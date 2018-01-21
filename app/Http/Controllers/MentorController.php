<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feed;
use App\Mentor;
use Auth;


class MentorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:mentor');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->mentor = Mentor::find(Auth::user()->id);
        
        $id = $this->mentor->id;
        $feeds = Feed::where('mentor_id','=' , $id)->get();
        return view('mentor',compact('feeds'));
    }
}
