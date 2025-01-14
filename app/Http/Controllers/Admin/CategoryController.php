<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Image ;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!Auth::user()->can('category list')){
            abort(403);
        }
        $categoris = Category::latest()->paginate(10);
        return view('admin.category.index', compact('categoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!Auth::user()->can('category create')){
            abort(403);
        }
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();

        $request->validate([
            'name'=>'required'
        ]);



        $data=[
            'name'      => $request->name,
            'slug'      => Str ::slug($request->name),
            'author_id' => Auth::user()->id,
            // 'thumbnail' => $request->thumbnail,
        ];
        if($request->file('thumbnail')){
            $file_name = $request->file('thumbnail')->store('thumbnail/category');
            $data['thumbnail'] = $file_name;
        }
        Category::create($data);
        Session::flash('create');
        return redirect()->route('category.index')->with('create',' Category Successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(!Auth::user()->can('category update')){
            abort(403);
        }
        $category = Category::where('id', $id)->first();
        // return $category;
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(!Auth::user()->can('category update')){
            abort(403);
        }
        $data = [
            'name'      => $request->name,
            'slug'      => Str::slug($request->name),
            'author_id' => Auth::user()->id,
            // 'thumbnail' => $request->thumbnail,
        ];
        if($request->file('thumbnail')){
            $file_name = $request->file('thumbnail')->store('thumbnail/category');
            $data['thumbnail'] = $file_name;
        }


        Category::firstwhere('id', $id)->update($data);
        Session::flash('warning');
        return redirect()->route('category.index')->with('warning',' Category Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        if(!Auth::user()->can('category delete')){
            abort(403);
        }
        Category::where('id', $id)->delete();
        return redirect()->route('category.index');
    }
}
