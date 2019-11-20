<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;
use Session;
use Illuminate\Support\Facades\Mail;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.careers.index',['careers'=>Career::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.careers.create');
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
            'name' => 'required|max:255',
            'description' => 'required'
        ]);
        Career::create([
            'name' => $request->name,
            'description' => $request->description
        ]);
        Session::flash('success','Careers added successfully');
        return redirect()->route('careers.index');
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
        return view('admin.careers.edit',['career'=>Career::find($id)]);
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
        $this->validate($request,[
            'name' => 'required|max:255',
            'description' => 'required'
        ]);
        $career = Career::find($id);
        $career->name = $request->name;
        $career->description = $request->description;
        $career->save();
        Session::flash('success','Career updated successfully');
        return redirect()->route('careers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Career::destroy($id);
        Session::flash('success','Career deleted successfully');
        return redirect()->route('careers.index');
    }

    public function send_cv(Request $request){
        $this->validate($request,[
            'cv'=>'required|mimes:jpeg,png,jpg,gif,svg,txt,pdf,ppt,docx,doc,xls',
            'name' => 'required'
        ]);
        if($request->hasFile('cv') && !empty($request->cv)){
            Mail::send(['text'=>'cv'],['name'=>$request->name],function($message) use ($request) {
                $message->to('info@aabroo.org','Aabroo')->subject('CV from aabroo.org');
                $message->from('admin@aabroo.org','Admin');
                $message->attach($request->cv->getRealPath(),['as' => 'CV',$request->cv->getClientOriginalExtension(),'mime' => $request->cv->getMimeType()]);
            });
        }
        return redirect()->back();
    }

}
