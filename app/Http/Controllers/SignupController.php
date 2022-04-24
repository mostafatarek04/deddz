<?php

namespace App\Http\Controllers;

use App\Models\User;
//use http\Cookie;
//use Symfony\Component\HttpFoundation\Cookie;
use http\Cookie;
use http\Env\Response;
use Illuminate\Http\Request;
//use Illuminate\Http\Response;
//use Symfony\Component\HttpFoundation\Response;
use phpDocumentor\Reflection\Types\Null_;

class SignupController extends Controller
{
    //
    function signupUser(Request $request)
    {
        $newEmail = $request->input('email');
        // check to see if email exists
        $new_user = User::all()->where('email', $newEmail)->count();
        if ($new_user > 0) {

        } else {
            $user = new User();
            $user->name = $request->input('fullname');
            $user->user_name = $request->input('username');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->gender = $request->input('gender');
            $user->save();
            //Creating a cookie with the registered user id for 3 mins
            $cookie_user = \Cookie::make('logged_in_usesssr',$user->id,3);
            $cookie_auth = \Cookie::make('logged_state',true,3);

            return \Response()->view('welcome',["user"=>$user])->withCookie($cookie_user)->withCookie($cookie_auth);
        }
    }

    function showUser(Request $request)
    {
        $value = $request->cookie('logState');
        echo $value;
    }

    function loginUser(Request $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email',$email)->first();

        if ($user){
            $cookie = \Cookie::make('logged_in_usesssr',$user->id,4);
            $cookie2 = \Cookie::make('logged_state',true,4);

            return redirect('/')
                  ->withCookie(cookie()->forever('logged_in_usesssr',$user->id))
                  ->withCookie(cookie()->forever('logged_state',true));

        }else{
            echo 'user not foumd';
        }


    }

    function logout(Request $request){
   $cookie1 = \Cookie::forget('logged_in_usesssr');
   $cookie2 = \Cookie::forget('logged_state');
   $response = new \Illuminate\Http\Response('success');
    return $response->withCookie($cookie1)->withCookie($cookie2);



    }

}
