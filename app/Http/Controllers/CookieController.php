<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CookieController extends Controller
{
    //

    public static function setCookie(Request $request,$cookieName,$cookieValue){
         $minutes = 5;
        $response = new Response('Auth_statusssss');
        $response->withCookie(cookie($cookieName,$cookieValue , $minutes));

        return $response;

    }

    public static function getCookie(Request $request,$cookieName){
        return $request->cookie($cookieName);
    }
}
