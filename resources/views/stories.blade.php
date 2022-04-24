<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<header class="stories-header">
        <div class="header-stories">
            <h3>Time to share our thoughts </h3>
        </div>

</header>

<main>

    <section class="stories-main">
        <div class="search-div">
            {!! Form::open(['url'=>'/stories','method'=>'get','class'=>'search-form']) !!}
            {!! Form::label('search','<i class="fa-solid fa-magnifying-glass"></i>',['class'=>'search-form-label'],false) !!}
            {!! Form::text('search',"",['class'=>'search-form-input','placeholder'=>'Enter Search keywords...']) !!}
            {!! Form::submit('Search',['class'=>'submit']) !!}
            {!! Form::close() !!}
        </div>
        <div class="all-stories-container">
            @foreach($data as $story)
                <div class="all-stories-container-child">
                    <div class="user-info">
                        <img class="profile-photo" src="{{asset($story->user->profile_photo_url)}}" alt="">
                        <h4>{{$story->user->name}}</h4></div>
                    <p>{{$story->story}}</p>
                    <p>{{$story->published_at}}</p>
                </div>

            @endforeach

        </div>
    </section>
</main>
<script src="{{asset('js/story.js')}}"></script>
</body>
</html>
