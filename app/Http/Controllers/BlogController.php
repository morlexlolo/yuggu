<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use App\Cat;
use App\Tag;
use Mtownsend\ReadTime\ReadTime;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $tags =Tag::orderBy('name','asc')->limit(5)->get();
        $cats =Cat::with('posts')->orderBy('name','asc')->limit(5)->get();
        $popular =Blog::orderBy('view_count','desc')->take(5)->get();
        $articles=Blog::latest()->paginate(6);
        return view('blog.index',compact('articles','cats','popular','tags'));
    }


    public function cat($slug)
    {
        $tags =Tag::orderBy('name','asc')->limit(5)->get();
        $cats =Cat::with('posts')->orderBy('name','asc')->limit(5)->get();
        $popular =Blog::orderBy('view_count','desc')->take(5)->get();
        $articles=Cat::where('slug', $slug)->first()->posts()->paginate(6);

        return view('blog.index',compact('articles','cats','popular','tags'));
    }

    public function tag($slug)
    {

        $tags =Tag::orderBy('name','asc')->limit(5)->get();
        $tags =Tag::with('posts')->orderBy('name','asc')->limit(5)->get();
        $popular =Blog::orderBy('view_count','desc')->take(5)->get();
        $articles=Cat::where('slug', $slug)->first()->posts()->paginate(6);

        return view('blog.index',compact('articles','tags','popular','tags'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $tags =Tag::all();
        $article =Blog::where('slug',$slug)->first();
        $article ->increment('view_count',1);
        $popular =Blog::orderBy('view_count','desc')->take(5)->get();
        $related=Blog::whereHas('cat',function ($q) use ($article){
            return $q->whereIn('name',$article->cat->pluck('name'));
        })->where('id','!=',$article->id)
          ->get();
        $cats =Cat::with('posts')->orderBy('name','asc')->limit(5)->get();
        return view('blog.show',compact('article','cats','related','popular','tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
