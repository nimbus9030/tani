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

    public function writehtml()
    {
        // https://www.ritolab.com/entry/7
        // https://laravel.com/docs/5.4/filesystem

        $tag_table = App\Tag::class;
        $tag = $tag_table::first()['url'];
        File::put( 'test.html', viw('resources.views.instagram2')->with(["tag" => $tag])->render() );

        return "OK";
        // return view('instagram2', ['tag' => $tag]);
    }
}
