<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App;
use App\Tag;

use TagController;
use Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag_table = App\Tag::class;
        $tag = $tag_table::first()['url'];
        return view('home', ['tag' => $tag]);
    }


    public function store(Request $request) {
        $user = Auth::user();
        $tag = $request->input('tag');
        Tag::Where('id', 1)->update(['url' => $tag]);
        return view('home', ['tag' => $tag]);
    }



    public function EditTag($tag){

    }


    public function insta(){
        // return view('instagram');

        Log::info('called insta...');
        $tag_table = App\Tag::class;
        $tag = $tag_table::first()['url'];
        return view('instagram2', ['tag' => $tag]);
    }
}
