<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App;
use App\Tag;

use Log;

class PublicSiteController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
        $tag_table = App\Tag::class;
        $tag = $tag_table::first()['url'];
        return view('instagram2', ['tag' => $tag]);
    }

    public function event()
    {
        $tag_table = App\Tag::class;
        $tag = $tag_table::first()['url'];
        return view('event', ['tag' => $tag]);
    }

    public function hotel()
    {
        $tag_table = App\Tag::class;
        $tag = $tag_table::first()['url'];
        return view('hotel', ['tag' => $tag]);
    }

    public function magazine()
    {
        $tag_table = App\Tag::class;
        $tag = $tag_table::first()['url'];
        return view('magazine', ['tag' => $tag]);
    }

    public function restaurant()
    {
        $tag_table = App\Tag::class;
        $tag = $tag_table::first()['url'];
        return view('restaurant', ['tag' => $tag]);
    }

    public function travel()
    {
        $tag_table = App\Tag::class;
        $tag = $tag_table::first()['url'];
        return view('travel', ['tag' => $tag]);
    }

    public function wedding()
    {
        $tag_table = App\Tag::class;
        $tag = $tag_table::first()['url'];
        return view('wedding', ['tag' => $tag]);
    }    
}
