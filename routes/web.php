<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

////// new data structure ////////////

Route::middleware([\App\Http\Middleware\MyAuthMiddleware::class])->group(function () {

    Route::get('/','App\Http\Controllers\MainController@home');
    Route::get('/allusers','App\Http\Controllers\MainController@browseAll');
    Route::get('/stories','App\Http\Controllers\MainController@stories')->name('ss');
    Route::get('/activity','App\Http\Controllers\MainController@activities');
    Route::post('/activity','App\Http\Controllers\MainController@addActivity');
    Route::get('/profile/{username}','App\Http\Controllers\MainController@showProfile');
    Route::post('/logout','App\Http\Controllers\SignupController@logout');
    Route::post('/subscribe','App\Http\Controllers\MainController@subscribee');
    Route::post('searchstories','App\Http\Controllers\MainController@searchStory');
    Route::get('/manytomany',function (){
//       $user = \App\Models\User::findOrFail(3);
//       foreach ($user->subscription as $entry){
//           echo $entry;
//       }
        $allActivities = \App\Models\Activities::all();
        $allActivities_related = \App\Models\User::findOrFail(3)->subscription;


       return view('test',['data'=>$allActivities_related]);
    });

    Route::post('/manytomany',function (\Illuminate\Http\Request $request){
        $userID = 3;
        $activityID = $request->input('aID');

//       $activity = new \App\Models\Activities();
//       $activity->activity_body = $request->input('activity_body');
//       $activity->activity_title =  $request->input('activity_name');
//       $activity->published_at = \Carbon\Carbon::today();
//       $activity->user_id = 4;
//       $activity->save();
//
          $user = \App\Models\User::find(4);
          $user->subscription()->attach($activityID,['user_name'=>$user->user_name,'user_img'=>$user->profile_photo_url]);
//        $activity = $user->subscription()->save($activity);

        return "success";
    });
});



















/////////////// old Data structure /////////////////////

//Route::get('/', 'App\Http\Controllers\MainController@home')->middleware('cauth');


Route::get('/login',function (){
    return view('Login');
});


//Route::get('/profile/{id}',function ($id){
//
//    $user = \App\Models\User::findOrFail($id);
//    $allData = $user->stories;
//
////  return $id;
//    return view('profile',["user"=>$user,"allData"=>$allData]);
//});


Route::get('/signup',function (){
    return view('signup');
});

//Route::get('/activity',function (){
//   $allusers =  \App\Models\User::all();
//    return view('activities',['users'=>$allusers]);
//});



Route::post('/story',function (\Illuminate\Http\Request $request){
 $story_text = $request->input('story');
 $keywords = $request->input('keywords');
 $userId = $request->cookie('logged_in_usesssr');
 $currentUser = \App\Models\User::find(4);
 $story = new \App\Models\Story();
 $story->story = $story_text;
 $story->published_at = \Carbon\Carbon::today();
 $story->key_words = $keywords;
 $story->user_id = 4;
 $story->save();


 return redirect('profile/'.$currentUser->user_name);


});

Route::post('/api/story-delete/{id}',function (\Illuminate\Http\Request $request, $id){
    $story_to_delete = \App\Models\Story::findOrFail($id);
    $story_to_delete->delete();
    return 'Success';

});



Route::post('/user','App\Http\Controllers\SignupController@signupUser');
Route::post('/user-login','App\Http\Controllers\SignupController@loginUser');
Route::get('/user','App\Http\Controllers\SignupController@showUser');

