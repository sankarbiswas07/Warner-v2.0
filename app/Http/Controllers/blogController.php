<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class blogController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {  
        $this->middleware('auth', ['except' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog =Blog::orderBy('created_at','desc')->get();
        return view('pages.blogsIndex')->with('blogs',$blog);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.blogsCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);
        // Create Post
        $post = new Blog;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->student_id = auth()->user()->id;
        $post->save();
        return redirect('/blogs')->with('success', 'Post Created');
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
        return view('pages.blogsShow')->with('blog', $blog);
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
        // Check for correct user
        if(auth()->user()->id !==$blog->student_id){
            return redirect('/blogs')->with('danger', 'Unauthorized Page');
        }
        return view('pages.blogsEdit')->with('blog', $blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        // Create Post
        $post = Blog::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');

        $post->save();
        return redirect('/blogs')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Blog::find($id);
        // Check for correct user
        if(auth()->user()->id !==$post->student_id){
            return redirect('/blogs')->with('error', 'Unauthorized Page');
        }
        
        $post->delete();
        return redirect('/blogs')->with('success', 'Post Removed');
    }
}
