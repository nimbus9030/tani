<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;

use Log;

class TagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function EditTag($hashtag){
        Log::info($hashtag);
    }
}
