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

    public function getInstagramInfos()
    {
        /* User ID, Token */
        $instagramUserID = 3520061443;
        $instagramToken  = '3520061443.a090108.3d61d228cb6f4c77a3a39e1b1d8674ed';
        
        // /* Get API ( Require HTTPS ) JSON Convert */
        $instagramApiURI    = 'https://api.instagram.com/v1/users/'.$instagramUserID.'/media/recent?access_token='.$instagramToken.'&count=10';
        // https://camp-in.jp/campaign/widget/1202/3?callback=?

        // pollInstagram('https://api.instagram.com/v1/users/3/media/recent/?callback=?&min_timestamp=1388563200&max_timestamp=1420099200&access_token={access_token}', 33);
        $instagramDates = file_get_contents($instagramApiURI);

        return $instagramDates;
        // Log::Info( $instagramDates );
        // return 'ok';
    
        // return $instagraDatas;
        /* Loop Start */
        // foreach((array) $instagramDates->data as $instagramData):
    }
}
