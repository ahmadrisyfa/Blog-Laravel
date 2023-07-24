<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use \Cviebrock\EloquentSluggable\services\slugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index',[
    'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(' dashboard.posts.create',[
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
            'title'=>'required|max:255',
            'slug' =>'required|unique:posts',
            'category_id'=>'required',
            'image'=>'image|file|max:10000',
            'body'=> 'required'
        ]);

        if($request->file('image')){
            $validatedData['image']= $request->file('image')->store('post-images');
        }
        $validatedData['user_id']= auth()->user()->id;
        $validatedData['excerpt']= str::limit(strip_tags($request->body),200);

        post::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'New Post has been added!'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        return view('dashboard.posts.show',[
            'post'=> $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        return view('dashboard.posts.edit',[
            'post'=>$post,
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
    public function update(Request $request, post $post)
    {
        $rules=[
            'title'=>'required|max:255',
            'category_id'=>'required',
            'image'=>'image|file|max:10000',
            'body'=> 'required'
        ];
        

        if($request->slug != $post->slug){
            $rules['slug'] ='required|unique:posts';
        }
        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image']= $request->file('image')->store('post-images');
        }

        $validatedData['user_id']= auth()->user()->id;
        $validatedData['excerpt']= str::limit(strip_tags($request->body),200);

        post::Where('id',$post->id)
        ->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Post has been updated!'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    
    {
        if($post->image){
            Storage::delete($post->image);
        }
        post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Post has been deleted!'); 
    }
    public function checkSlug(Request $request)
    {
        $slug= SlugService::createSlug(post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}

