<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Blog $blog, Category $category)
    {
        $this->blog = $blog;
        $this->category = $category;
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
     * Show the all of blog
     *
     * @return \Illuminate\Http\Response
     */
    public function showAllBlog(Request $request)
    {
        $statusActive = $this->blog::STATUS['PUBLISH'];
        // if($request->search) {
        //     $blogList = $this->blog->where('status', $statusActive)->search()->orderBy('created_at', 'desc')->paginate(5);
        // }else
        if($request->slug) {
            $cate = $this->category->where('slug', '=', $request->slug)->first();
            if($cate->status == 'inactive' ) {
                return redirect()->route('blog');
            }
            $blogList = $cate->blogs()->where('status' , '=', $statusActive)->paginate(5);
        }else {
            $blogList = $this->blog->where('status', $statusActive)->orderBy('created_at', 'desc')->paginate(5);
        }
        $recentPost = $this->blog->where('status', $statusActive)
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        $categories = $this->category->where('status', $statusActive)->get();

        $categoryResponse = [];
        foreach($categories as $category){
            $count = $category->blogs->where('status', $statusActive)->count();
            $categoryResponse[] = [
                'slug' => $category->slug,
                'name' => $category->name,
                'total' => $count,
            ];
        }
        return view('blog', [
            'blogList' => $blogList,
            'category' => $categoryResponse,
            'recentPost' => $recentPost,
            'title' => 'Blog'
        ]);
    }

    /**
     * search blog
     *
     * @return \Illuminate\Http\Response
     */
    public function blogSearch(Request $request)
    {
        $statusActive = $this->blog::STATUS['PUBLISH'];
        if($request->search) {
            $blogList = $this->blog->where('status', $statusActive)->search()->orderBy('created_at', 'desc')->paginate(5);
        }
        $recentPost = $this->blog->where('status', $statusActive)
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        $categories = $this->category->where('status', $statusActive)->get();

        $categoryResponse = [];
        foreach($categories as $category){
            $count = $category->blogs->where('status', $statusActive)->count();
            $categoryResponse[] = [
                'slug' => $category->slug,
                'name' => $category->name,
                'total' => $count,
            ];
        }
        return view('blog', [
            'blogList' => $blogList,
            'category' => $categoryResponse,
            'recentPost' => $recentPost,
            'title' => 'Blog'
        ]);
    }
    /**
     * Show the blog-details
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function detailsBlog($slug)
    {
        $statusActive = $this->blog::STATUS['PUBLISH'];
        $blog = $this->blog->where('slug', $slug)->with('categories')->where('status',$statusActive)->first();
        if($blog == null){
            return redirect()->route('blog');
        }

        $categories = $this->category->where('status', $statusActive)->get();

        $categoryResponse = [];
        foreach($categories as $category){
            $count = $category->blogs->where('status', $statusActive)->count();
            $categoryResponse[] = [
                'slug' => $category->slug,
                'name' => $category->name,
                'total' => $count,
            ];
        }

        $recentPost = $this->blog->where('status', $statusActive)
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();
        return view('blog-details', [
            'recentPost' => $recentPost,
            'blog' => $blog,
            'category' => $categoryResponse,
            'title' => 'Bài viết',
        ]);
    }
    /**
     * Show the list of blog
     *
     * @return \Illuminate\Http\Response
     */
    public function showBlog()
    {
        $responses = $this->blog::orderBy('created_at', 'desc')->get();
        return view('admin.list-blog', ['responses' => $responses]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = $this->blog::where('id', '=', $id)->first();
        $statusActive = $this->category::STATUS['PUBLISH'];
        $category = $this->category->where('status', $statusActive)->get();

        return view(
            'admin.add-blog',
            [
                'blog' => $blog,
                'category' => $category,
                'title' => 'Chỉnh sửa bài viết'
            ],

        );
    }

    /**
     * Show the screen add new blog
     *
     * @return \Illuminate\Http\Response
     */
    public function showAddBlog()
    {
        $category = $this->category::get();
        return view('admin.add-blog',
        [
            'category' => $category,
            'title' => 'Thêm bài viết'
        ]);
    }

    /**
     * Insert new blog
     *
     * @return \Illuminate\Http\Response
     */
    public function addBlog(BlogRequest $request)
    {
        try {
            $slug = Str::slug($request->title);
            $isDuplicate = $this->blog::where('slug', $slug)->first();
            if ($isDuplicate == null) {
                $isDeleted = $this->blog::onlyTrashed()->where('slug', $slug)->first();
                if ($isDeleted == null) {
                    $blog = new Blog();
                    $blog->title = $request->title;
                    $blog->description = $request->description;
                    $blog->content = $request->content;
                    $blog->slug = $slug . '-' . now()->format('dhis');

                    $blog->tag = $request->tag;
                    $blog->updated_at = now();

                    if ($request->file('thumbnail')) {
                        $file = $request->file('thumbnail');
                        $filename = Storage::disk('public')->put('imageBlog', $file);
                        $blog->thumbnail = "storage/" . $filename;
                    }
                    $blog->save();
                    $categories = $request->categories;
                    $blog->categories()->sync($categories);

                    return redirect()->route('list-blog');
                } else {
                    return redirect()->back()->with('error', "Đang tồn tại 1 bài viết tương tự trong thùng rác tạm thời");
                }
            } else {
                return redirect()->back()->with('error', "Bài viết trùng tiêu đề");
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        return back();
    }

    /**
     * Delete blog by id
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteBlog($id)
    {
        $this->blog::where('id', '=', $id)->delete();
        return redirect()->route('list-blog');
    }

    /**
     * Update the blog
     *
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request)
    {
        try {
            $id = $request->id;
            $blog = $this->blog::where('id', $id)->first();

            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->content = $request->content;
            $blog->slug =  Str::slug($request->title) . '-' . now()->format('dhis');

            $blog->tag = $request->tag;
            $blog->updated_at = now();

            if ($request->file('thumbnail')) {
                $file = $request->file('thumbnail');
                $filename = Storage::disk('public')->put('imageBlog', $file);
                $blog->thumbnail = "storage/" . $filename;
            }

            $isDuplicate = Blog::where('id', '!=', $id)->where('slug', $blog->slug)->first();
            if ($isDuplicate == null) {
                $slug = $blog->slug;
                $isDeleted = $this->blog::onlyTrashed()->where('slug', $slug)->first();
                if ($isDeleted != null) {
                    return redirect()->back()->with('error', "Đang tồn tại 1 bài viết tương tự trong thùng rác tạm thời");
                }
                $blog->save();
                $categories = $request->categories;
                $blog->categories()->sync($categories);

                return redirect()->route('list-blog');
            } else {
                return redirect()->back()->with('error', "Bài viết trùng tiêu đề");
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        return back();
    }

    /**
     * Change status of blog
     *
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $request)
    {
        try {
            $id = $request->id;

            $blog = $this->blog::where('id', $id)->first();
            $status = $blog->status;
            if ($status == 'active') {
                $blog->status = 'inactive';
            } else {
                $blog->status = 'active';
            }
            $blog->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        return back();
    }
}
