<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @include('favicon')

                {{--    Google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/test.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <title>Event</title>
</head>
<body>

<section>
{{--    {!! Form::open(['url' => '/manytomany','method'=>'POST']) !!}--}}
{{--         {!! Form::text('activity_name') !!}--}}
{{--         {!! Form::text('activity_body') !!}--}}
{{--    {!! Form::submit('submit') !!}--}}

{{--    {!! Form::close() !!}--}}

{{--     @foreach($data as $activity)--}}
{{--         <div>--}}
{{--             <h5>{{$activity->user->name}}</h5>--}}
{{--             <h6>{{$activity->activity_title}}</h6>--}}
{{--             <h6>{{$activity->activity_body}}</h6>--}}

{{--             <button id="{{$activity->id}}">subscribe</button>--}}

{{--         </div>--}}
{{--    @endforeach--}}

    @php
    echo($data);
    @endphp
</section>
<script src="{{asset('js/test.js')}}"></script>
</body>
</html>
