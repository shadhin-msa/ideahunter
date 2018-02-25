<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\model\user\topic;
use Illuminate\Http\Request;

class topicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $topics = topic::all();
        return view('admin_res.topic.index', compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_res.topic.topic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'topic_name'=> 'required',
            'slug' => 'required',
            'closing_date' => 'required',
            'final_closing_date' => 'required',
            'topic_description' => 'required'
        ]);

        // $topic = new topic;
        // $topic->topic_name = $request->topic_name;
        // $topic->slug = $request->slug;
        // $topic->topic_description = $request->topic_description;
        // $topic->closing_date = date('Y-m-d',strtotime($request->closing_date));
        // $topic->final_closing_date = date('Y-m-d',strtotime($request->final_closing_date));
        // $topic->image = $request->image;
        // $topic->save();
        topic::create($request->all());

        return redirect(route('topic.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

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
