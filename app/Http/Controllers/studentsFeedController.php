<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feed;

class studentsFeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pages.home");
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
        $this->validate($request, [
            'library'=> 'required',
            'canteen'=> 'required',
            'hostel'=> 'required',
            'relation'=> 'required',
            'internet'=> 'required',
            'mentor'=> 'required',
            'comment'=> 'required',
            'others'=> 'required',
        ]);

        //storing data
        $feed = new Feed;
        $feed->student_roll = auth()->user()->roll;
        $feed->student_name = auth()->user()->name;
        $feed->library = $request->input('library');
        $feed->canteen = $request->input('canteen');
        $feed->hostel = $request->input('hostel');
        $feed->university_relation = $request->input('relation');
        $feed->internet = $request->input('internet');
        $feed->mentor_id = $request->input('mentor');
        $feed->comments_on_class_lab = $request->input('comment');
        $feed->others = $request->input('others');
        $feed->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   // public function show($id)
//    public function show()
//     {
//         $feeds = Feed::all();
//         return view('mentor',compact('feeds'));
//     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
