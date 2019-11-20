<?php

namespace App\Http\Controllers;

use App\Career;
use Response;
use App\Videos;
use Illuminate\Http\Request;
use App\news_and_update;
use App\Projects;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function welcome(){
        return view('welcome',['news'=>news_and_update::OrderBy('created_at', 'desc')->get(),'count'=>count(news_and_update::all()),'projects'=>Projects::all()->take(3),'videos'=>Videos::all()->take(2)]);
    }

    public function send(Request $request){
        $this->validate($request,[
            'name'=>'required|max:255',
            'email'=>'required',
            'message'=>'required',
			'g-recaptcha-response' => 'required|captcha'
        ]);
		
        Mail::send(['text'=>'message'],['name'=>$request->name,'email'=>$request->email,'mail_message'=>$request->message],function($message){
            $message->to('info@aabroo.org','Aabroo')->subject('Message from aabroo.org');
            $message->from('admin@aabroo.org','Admin');
        });
        return redirect()->back();
    }

    public function getDownload($filename)
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= base_path(). "/download/".$filename.".pdf";
    
        $headers = array(
                  'Content-Type: application/pdf',
                );
    
        return Response::download($file, 'aabroo.org-'.$filename.'.pdf', $headers);
    }

    public function why_we_are(){
        return view('frontend.who_we_are.why_we_are',['videos'=>Videos::all()->take(2),'count'=>count(news_and_update::all()),'news'=>news_and_update::all()]);
    }

    public function objectives(){
        return view('frontend.who_we_are.objectives',['videos'=>Videos::all()->take(2),'count'=>count(news_and_update::all()),'news'=>news_and_update::all()]);
    }

    public function executive_committees(){
        return view('frontend.who_we_are.executive_committees',['videos'=>Videos::all()->take(2),'count'=>count(news_and_update::all()),'news'=>news_and_update::all()]);
    }

    public function sub_committees(){
        return view('frontend.who_we_are.sub_committees',['videos'=>Videos::all()->take(2),'count'=>count(news_and_update::all()),'news'=>news_and_update::all()]);
    }

    public function our_services(){
        return view('frontend.what_we_do.our_services',['videos'=>Videos::all()->take(2),'count'=>count(news_and_update::all()),'news'=>news_and_update::all()]);
    }

    public function informal(){
        return view('frontend.what_we_do.informal',['videos'=>Videos::all()->take(2),'count'=>count(news_and_update::all()),'news'=>news_and_update::all()]);
    }

    public function formal(){
        return view('frontend.what_we_do.formal',['videos'=>Videos::all()->take(2),'count'=>count(news_and_update::all()),'news'=>news_and_update::all()]);
    }

    public function technical(){
        return view('frontend.what_we_do.technical',['videos'=>Videos::all()->take(2),'count'=>count(news_and_update::all()),'news'=>news_and_update::all()]);
    }

    public function it(){
        return view('frontend.what_we_do.it',['videos'=>Videos::all()->take(2),'count'=>count(news_and_update::all()),'news'=>news_and_update::all()]);
    }

    public function financial(){
        return view('frontend.accounts.financial',['videos'=>Videos::all()->take(2),'count'=>count(news_and_update::all()),'news'=>news_and_update::all()]);
    }

    public function corruption(){
        return view('frontend.accounts.corruption',['videos'=>Videos::all()->take(2),'count'=>count(news_and_update::all()),'news'=>news_and_update::all()]);
    }

    public function waste_management(){
        return view('frontend.accounts.waste_management',['videos'=>Videos::all()->take(2),'count'=>count(news_and_update::all()),'news'=>news_and_update::all()]);
    }

    public function endowment_fund(){
        return view('frontend.accounts.endowment_fund',['videos'=>Videos::all()->take(2),'count'=>count(news_and_update::all()),'news'=>news_and_update::all()]);
    }

    public function ensuing_projects(){
        return view('frontend.our_projects.ensuing_projects',['videos'=>Videos::all()->take(2),'count'=>count(news_and_update::all()),'news'=>news_and_update::all()]);
    }

    public function capital_projects(){
        return view('frontend.our_projects.capital_projects',['videos'=>Videos::all()->take(2),'count'=>count(news_and_update::all()),'news'=>news_and_update::all()]);
    }

    public function funding(){
        return view('frontend.funding',['videos'=>Videos::all()->take(2),'count'=>count(news_and_update::all()),'news'=>news_and_update::all()]);
    }

    public function success_stories(){
        return view('frontend.success_stories',['videos'=>Videos::all()->take(2),'count'=>count(news_and_update::all()),'news'=>news_and_update::all()]);
    }

    public function road_map(){
        return view('frontend.road_map',['videos'=>Videos::all()->take(2),'count'=>count(news_and_update::all()),'news'=>news_and_update::all()]);
    }

    public function jobs(){
        return view('frontend.careers',['careers'=>Career::all(),'videos'=>Videos::all()->take(2),'count'=>count(news_and_update::all()),'news'=>news_and_update::all()]);
    }

    public function newsletter(){
        return view('frontend.who_we_are.newsletter', ['videos'=>Videos::all()->take(2),'count'=>count(news_and_update::all()),'news'=>news_and_update::all()]);
    }

}
