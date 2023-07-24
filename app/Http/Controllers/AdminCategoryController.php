<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use \Cviebrock\EloquentSluggable\services\slugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      

        return view('dashboard.categories.index',[
            'categories'=> Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(' dashboard.categories.create',[
            'categories'=> Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
     'category_id'=>'required'
            
        ]);
        categories::create($validatedData);

        return redirect('/dashboard/categories')->with('success', 'New category has been added!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(category $Categories)
    {
        return view('dashboard.categories.show',[
            'category'=> $Categories
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(categorie $Categories)
    {
        return view('dashboard.categories.edit',[
            'categories'=> Category::all()
        ]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $Categories)
    {
        post::Where('id',$Categories->id)
        ->update($validatedData);

        return redirect('/dashboard/categories')->with('success', 'category has been updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Categories)
    {
       

        category::destroy($Categories);

        return redirect('/dashboard/categories')->with('success', 'category has been deleted!'); 
    }
}
