@extends('layouts.profile-layout')

@section('profile-side')

<div class="profile-controls">
    <div class="profile-controls-pic-box">
        <img src="{{asset($user->profile_photo_url)}}" alt="">
    </div>
    <div class="profile-controls-name">
        <h3 class="profile-name"><span class="upper">{{$user->name}}</span><span class="bottom">Site User</span></h3>

    </div>
    <div class="profile-controls-links">
        <ul>
            <li><a id="profile-info" href="">Profile Info</a></li>
            <li><a id="Activities" href="">Activities</a></li>
            <li>Friends</li>
            <li id="logout">logout</li>
        </ul>
    </div>
</div>

@endsection


@section('profile-main')
<div class="profile-info">
    <div class="profile-info-basic">
        <h3 class="profile-title entry">Basic Info</h3>
        <h6 class="entry"><span>Name: </span><span>{{$user->name}} </span></h6>
        <h6 class="entry"><span>Date of Birth: </span><span>13/02/1994</span></h6>
    </div>

    <div class="profile-info-additional">
        <h3 class="profile-title">list of activities: </h3>
        <div class="flex-container">
            <div class="flex-container-child"><a href="">Activity 1</a></div>
            <div class="flex-container-child"><a href="">Activity 2</a></div>
            <div class="flex-container-child"><a href="">Activity 3</a></div>
            <div class="flex-container-child"><a href="">Activity 4</a></div>
            <div class="flex-container-child"><a href="">Activity 5</a></div>
            <div class="flex-container-child"><a href="">Activity 6</a></div>
            <div class="flex-container-child"><a href="">Activity 7</a></div>
        </div>

    </div>
   <div class="profile-info-activity">
       <div class="entry">
           <h3 class="h3-heading">Bored? Add a new activity now</h3>
           {!! Form::open(['url'=>'/activity','method'=>'POST','class'=>'form']) !!}
           {!! Form::text('ActivityTitle',null,['placeholder'=>"Activity title",'class'=>'entry-input']) !!}

           {!! Form::textarea('activityDesc',null,['id'=>'activity','cols'=>'30','rows'=>'10']) !!}

           {!! Form::submit('Add Activity' ,['class'=>'story-submit']) !!}
           {!! Form::close() !!}
       </div>


   </div>
    <div class="profile-info-feed">

        <div class="entry">
            <h3 class="h3-heading">Tell us what you are thinking ?</h3>
            {!! Form::open(['url'=>'/story','method'=>'POST','class'=>'form']) !!}

            {!! Form::textarea('story',null,['id'=>'story','cols'=>'30','rows'=>'10']) !!}
            {!! Form::text('keywords',null,['placeholder'=>"Story keywords",'class'=>'entry-input']) !!}
            {!! Form::submit('Publish' ,['class'=>'story-submit']) !!}
            {!! Form::close() !!}

        </div>
        <div class="all-stories">
           @if($allData)
               @foreach($allData as $story)
                   <div class="all-stories-child">
                       <h2 class="margin-up-down-small">{{$story->story}}</h2>
                       <h5 class="margin-up-down-small">{{$story->key_words}}</h5>
                       <h6 class="margin-up-down-small">{{$story->published_at}}</h6>
                        <div class="story-controls">
                            <button type="button" class="button-delete" data-id="{{$story->id}}">Delete</button>
                            <button class="button-edit">Edit</button>

                        </div>
                   </div>
                @endforeach
            @endif
        </div>
    </div>
   </div>
@endsection
