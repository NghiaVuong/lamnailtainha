<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
// use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Banner $banner)
    {
        $this->banner = $banner;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Show the all of banner
     *
     * @return \Illuminate\Http\Response
     */
    public function showAllBanner()
    {
        $statusActive = $this->banner::STATUS['PUBLISH'];
        $responses1 = $this->banner->where('status', $statusActive)->where('tag', '1')->get();
        $responses2 = $this->banner->where('status', $statusActive)->where('tag', '2')->get();
        $responses3 = $this->banner->where('status', $statusActive)->where('tag', '3')->get();

        // dd($responses1);
        return view('index', ['responses1' => $responses1,
        'responses2' => $responses2,
        'responses3' => $responses3,
        ]);

    }

    /**
     * search banner
     *
     * @return \Illuminate\Http\Response
     */
    public function bannerSearch(Request $request)
    {
        $statusActive = $this->banner::STATUS['PUBLISH'];
        if($request->search) {
            $bannerList = $this->banner->where('status', $statusActive)->search()->orderBy('created_at', 'desc')->paginate(5);
        }
        // $recentPost = $this->banner->where('status', $statusActive)
        //     ->orderBy('created_at', 'desc')
        //     ->limit(5)
        //     ->get();

        // $categories = $this->category->where('status', $statusActive)->get();

        // $categoryResponse = [];
        // foreach($categories as $category){
        //     $count = $category->banners->where('status', $statusActive)->count();
        //     $categoryResponse[] = [
        //         'slug' => $category->slug,
        //         'name' => $category->name,
        //         'total' => $count,
        //     ];
        // }
        return view('banner', [
            'bannerList' => $bannerList,
            // 'category' => $categoryResponse,
            // 'recentPost' => $recentPost,
            'title' => 'Banner'
        ]);
    }
    /**
     * Show the banner-details
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the list of banner
     *
     * @return \Illuminate\Http\Response
     */
    public function showBanner()
    {
        $responses = $this->banner->orderBy('created_at', 'desc')->get();
        return view('admin.list-banner', ['responses' => $responses]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = $this->banner::where('id', '=', $id)->first();
        // $statusActive = $this->category::STATUS['PUBLISH'];
        // $category = $this->category->where('status', $statusActive)->get();

        return view(
            'admin.add-banner',
            [
                'banner' => $banner,
                // 'category' => $category,
                'title' => 'Chỉnh sửa slide'
            ],

        );
    }

    /**
     * Show the screen add new banner
     *
     * @return \Illuminate\Http\Response
     */
    public function showAddBanner()
    {
        // $banner = $this->banner::get();
        return view('admin.add-banner',
        [
            // 'banner' => $banner,
            'title' => 'Thêm slide'
        ]);
    }

    /**
     * Insert new banner
     *
     * @return \Illuminate\Http\Response
     */
    public function addBanner(BannerRequest $request)
    {
        try {
            $slug = Str::slug($request->title);
            $isDuplicate = $this->banner::where('slug', $slug)->first();
            if ($isDuplicate == null) {
                $isDeleted = $this->banner::onlyTrashed()->where('slug', $slug)->first();
                if ($isDeleted == null) {
                    $banner = new Banner();
                    $banner->title = $request->title;
                    // $banner->description = $request->description;
                    $banner->content = $request->content;
                    $banner->slug = $slug . '-' . now()->format('dhis');

                    $banner->tag = $request->tag;
                    $banner->updated_at = now();

                    if ($request->file('thumbnail')) {
                        $file = $request->file('thumbnail');
                        $filename = Storage::disk('public')->put('imageBanner', $file);
                        $banner->thumbnail = "storage/" . $filename;
                    }
                    $banner->save();
                    $banner = $request->banner;

                    return redirect()->route('list-banner');
                } else {
                    return redirect()->back()->with('error', "Đang tồn tại 1 Slide tương tự trong thùng rác tạm thời");
                }
            } else {
                return redirect()->back()->with('error', "Slide trùng tiêu đề");
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        return back();
    }

    /**
     * Delete banner by id
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteBanner($id)
    {
        $this->banner::where('id', '=', $id)->delete();
        return redirect()->route('list-banner');
    }

    /**
     * Update the banner
     *
     * @return \Illuminate\Http\Response
     */
    public function update(BannerRequest $request)
    {
        try {
            $id = $request->id;
            $banner = $this->banner::where('id', $id)->first();

            $banner->title = $request->title;
            // $banner->description = $request->description;
            $banner->content = $request->content;
            $banner->slug =  Str::slug($request->title) . '-' . now()->format('dhis');

            $banner->tag = $request->tag;
            $banner->updated_at = now();

            if ($request->file('thumbnail')) {
                $file = $request->file('thumbnail');
                $filename = Storage::disk('public')->put('imageBanner', $file);
                $banner->thumbnail = "storage/" . $filename;
            }

            $isDuplicate = Banner::where('id', '!=', $id)->where('slug', $banner->slug)->first();
            if ($isDuplicate == null) {
                $slug = $banner->slug;
                $isDeleted = $this->banner::onlyTrashed()->where('slug', $slug)->first();
                if ($isDeleted != null) {
                    return redirect()->back()->with('error', "Đang tồn tại 1 bài viết tương tự trong thùng rác tạm thời");
                }
                $banner->save();
                $banner = $request->banner;
                // $categories = $request->categories;
                // $banner->categories()->sync($categories);

                return redirect()->route('list-banner');
            } else {
                return redirect()->back()->with('error', "Bài viết trùng tiêu đề");
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        return back();
    }

    /**
     * Change status of banner
     *
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $request)
    {
        try {
            $id = $request->id;

            $banner = $this->banner::where('id', $id)->first();
            $status = $banner->status;
            if ($status == 'active') {
                $banner->status = 'inactive';
            } else {
                $banner->status = 'active';
            }
            $banner->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        return back();
    }
}
