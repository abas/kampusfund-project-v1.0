<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the blog. not on dashboard
     *
     * @return Blog->all
     */
    public function index()
    {   
        $blogs = Blog::all();
        return $blogs;
        // return view('blog',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create-blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $blog = new Blog;
        $blog->judul        = $r->judul;
        $blog->deskripsi    = $r->deskripsi;
        $blog->cover_file   = $r->cover_file;
        $blog->category_id  = $r->category_id;
        $blog->user_id      = $r->user_id;
        if($blog->save()){
            return $blog;
        }else{
            echo "fail to store";
        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return $blog;
        // return view('single-blog');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return $blog;
        // return view('dashboard.create-blog');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        $blog = Blog::find($id);
        $blog->judul        = $r->judul;
        $blog->deskripsi    = $r->deskripsi;
        $blog->cover_file   = $r->cover_file;
        $blog->category_id  = $r->category_id;
        $blog->update();

        return $blog;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        if($blog->delete()){
            return "successful deleted!";
        }return "fail to delete!";
    }
}
