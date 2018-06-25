<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App;

use App\Tag;
use App\Html;

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
        $tag_table = App\Tag::class;
        if( $tag_table::first() ){
            Tag::Where('id', 1)->update(['url' => $tag]);
        }else{
            Tag::create(array('url' => $tag));
        }

        return view('home', ['tag' => $tag]);
    }


    public function editor()
    {
        $html = Html::all();
        if( !$html->count() ){
            return view('vvveb.editor');
        }else{
            $tasks = $html[0];
            return view('vvveb.editor', compact('tasks'));
        }

        // return view('vvveb.editor',compact('tasks'));
    }

    public function writeHtml(Request $request)
    {
        //１。公開画面で利用するタグはdbへ
        //２。編集画面で利用するhtml fileはstorageへ <- しなくてもいいかも。

        $html = Html::all();
        // Log::info($html->count());

        if( !$html->count() ){
            $insert_html = new Html;
            $insert_html->html = $request->text;
            $insert_html->save();
        }else{
            $html[0]->update([ 'html' => $request->text]);
        }

        return response('OK', 200);
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
