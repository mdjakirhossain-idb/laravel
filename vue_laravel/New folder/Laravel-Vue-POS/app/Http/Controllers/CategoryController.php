<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return response()->json($categories);

       // return view("admin.layouts.category.categories" , ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.layouts.category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([

            'name' => 'required|max:20|min:3|string',
            'description' => 'max:100'

        ]);

        //$request->session()->flash('saved', "Category <strong>".$request->name . " </strong>Created..!");

        Category::create($data);

        return response()->json([
            'message' => "Category <strong>".$request->name . " </strong>Created..!",
            'status' => true
        ],200);

        //return back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return response()->json($category);

       // return view("admin.layouts.category.category" , ['category'=>$category]);
    }

    public function edit(Category $category)
    {

        return response()->json($category);

        //return view("admin.layouts.category.edit" , ['category' => $category]);
    }

    public function update(Request $request,Category $category)
    {
        $category->update($request->only('name','description'));

        //$request->session()->flash('edited' , 'Category Updated Successfuly..');

        return response()->json([
            'message' => "Category <strong>".$request->name . " </strong>updated..!",
            'status' => true
        ],201);



        //return back();

    }




}
