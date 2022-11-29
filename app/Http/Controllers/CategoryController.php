<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    /**
     * Show the screen list of category.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $category = Category::get();
        return view('admin.category');
        // return response()->json( $category, 200);
    }
    public function getAll()
    {
        $category = $this->category->get();
        return response()->json([
            'data' =>  $category
        ], 200);
    }
    /**
     * store new category
     *
     * @return \Illuminate\Http\Response
     */
    public function storeCategory(CategoryRequest $request)
    {
        try {
            $category = $this->category->get();
            foreach ($category as $el) {
                if (strtoupper($el->name) == strtoupper($request->name)) {
                    $mess = 3;
                    return response()->json($mess, 422);
                }
            }
            $data = new Category();
            $data->name = $request->name;
            $data->description = $request->description;
            $data->slug = Str::slug($request->name) . '-' . now()->format('dhis');
            $data->status = 'active';
            // dd($data->slug);
            $data->save();
            return response()->json($data);
        } catch (\Exception $err) {
            return redirect()->with('error', $err->getMessage());
        }
        return true;
    }
    /**
     * Insert new category
     *
     * @return \Illuminate\Http\Response
     */
    public function EditCategory($category)
    {
        try {
            $data = Category::findOrFail($category);
            return response()->json([
                'data' => $data
            ], 200);
        } catch (\Throwable $err) {
            return redirect()->with('error', $err->getMessage());
        }
    }

    /**
     * Store update category
     *
     * @return \Illuminate\Http\Response
     */
    public function UpdateCategory(CategoryRequest $request, $category)
    {
        //    \dd($request->all());
        try {
            $categorys = $this->category->get();
            $data = $this->category->find($category);
            if (strtoupper($data->name) == strtoupper($request->name)) {
                $data = Category::find($category);
                $data->name = $request->name;
                $data->description = $request->description;
                $data->save();
                return response()->json($data);
            }
            foreach ($categorys as $el) {
                if (strtoupper($el->name) == strtoupper($request->name)) {
                    $mess = 3;
                    return response()->json($mess, 422);
                }
            }
            $data = Category::find($category);
            $data->name = $request->name;
            $data->description = $request->description;
            // 'status' = 'active';
            $data->save();
            return response()->json($data);
        } catch (\Exception $err) {
            return redirect()->with('error', $err->getMessage());
        }
    }

    /**
     * Store update status category
     *
     * @return \Illuminate\Http\Response
     */
    public function UpdateStatusCategory(Request $request)
    {
        try {
            $data = $this->category->find($request->id);
            if ($data->status == 'active') {
                $data->status = 'inactive';
            } else {
                $data->status = 'active';
            };
            $data->save();
            return response()->json([
                'value' => $request->status,
            ]);
        } catch (\Exception $err) {
            return redirect()->with('error', $err->getMessage());
        }
        // return true;
    }
    /**
     * Delete new category
     *
     * @return \Illuminate\Http\Response
     */
    public function DeleteCategory(Request $request)
    {
        $data = Category::find($request->id);
        $data->delete();
        return response()->json(['id' => $request->id]);
    }
}
