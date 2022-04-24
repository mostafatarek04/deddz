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

    <title>Document</title>
</head>
<body>
<section class="profile-section">
    <div class="row">
        <div class="col-1-of-4 flex-align-top"><aside>@yield('profile-side')</aside>
        </div>
        <div class="col-3-of-4"><main>@yield('profile-main')</main>
        </div>
    </div>
</section>
<script src="{{asset('js/profile.js')}}"></script>
</body>
</html>
