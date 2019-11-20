<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\news_and_update;

class NewsUpdatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index',['news'=>news_and_update::all(),'count'=>count(news_and_update::all())]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            'statement' => 'required',
            'featured' => 'required'
        ]);
        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/admin/news',$featured_new_name);
        news_and_update::create([
            'statement' => $request->statement,
            'featured' => 'uploads/admin/news/'.$featured_new_name
        ]);
        Session::flash('success','News added successfully');
        return redirect()->route('news_updates.index',['news'=>news_and_update::all(),'count'=>count(news_and_update::all())]);
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
        news_and_update::destroy($id);
        Session::flash('success','News deleted successfully');
        return redirect()->route('news_updates.index');
    }
}
