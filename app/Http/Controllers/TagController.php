<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;

use Log;



/**
 * 2018/05/18 jh.lee
 * This controller is not used now.
 * 
 */

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
