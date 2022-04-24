<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\Story;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PhpParser\Node\Expr\Array_;

class MainController extends Controller
{
    //
    function home(Request $request){

       $value = $request->cookie('logged_user_id');

        return view('welcome');

    }

    function stories(Request $request){
        $value = $request->cookie('logged_user_id');
        $all_stories = Story::all();
        $paramExist = $request->has('search');

         if (!$paramExist){
           //  return redirect()->route('ss',['search'=>"all"]);
             return view('stories',['data'=>$all_stories]);

         }else{
             $searchText = $request->search;
             $all_stories = Story::where('story','LIKE','%'.$searchText.'%')->get();
             return view('stories',['data'=>$all_stories]);

         }
       // return view('test',['data'=>$searchTerm]);

    }

    function activities(Request $request){
        $allUsers =  \App\Models\User::all();
        $allActivities = \App\Models\Activities::all();
        $logged_Id = $request->cookie('logged_in_usesssr');
        $logged_user = User::findOrFail($logged_Id)->name;
        $all_user_subs = User::findOrFail($logged_Id)->subscription;
        $all_user_subs_arr = array();
        foreach ($all_user_subs as $sub){
            array_push($all_user_subs_arr,$sub->id);
        }



        return view('activities',['users'=>$allUsers,'activities'=>$allActivities,'userr'=>$logged_user,'allSubs'=>$all_user_subs_arr]);

    }

    function addActivity(Request $request){
        $logged_user_id = $request->cookie('logged_in_usesssr');
        $newActivity = new Activities();
        $newActivity->user_id = $logged_user_id;
        $newActivity->activity_title = $request->input('ActivityTitle');
        $newActivity->activity_body = $request->input('activityDesc');
        $newActivity->published_at = Carbon::today();

        $newActivity->save();

    }
   function browseAll(){
        $users = User::all();
        return view('searchresults',['users'=>$users]);
   }
    function showProfile(Request $request, $username){
        $current_user_id = $request->cookie('logged_in_usesssr');
     //  $current_user = User::findorFail($current_user_id);
        $current_user = User::where('user_name',$username)->first();
        $all_stories = $current_user->stories;

        return view('/profile', ['user'=>$current_user,'allData'=>$all_stories]);
    }

    function subscribee(Request $request){

       $id = $request->input('id');
       $logged_Id = $request->cookie('logged_in_usesssr');
       $logged_user = User::findOrFail($logged_Id);
      // $all_user_subs = User::findOrFail($logged_Id)->subscription;
        $logged_user->subscription()->attach($id,['user_name'=>$logged_user->user_name,'user_img'=>$logged_user->profile_photo_url]);

    }
    function searchStory(Request $request){
        $search_term = $request->input('search');
        $all_stories = Story::where('story','LIKE','%'.$search_term.'%')->get()->toArray();

          return $all_stories;
    }
}


