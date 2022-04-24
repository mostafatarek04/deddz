<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Results</title>

</head>

<body>
<x-header></x-header>
<main>
    <section>
        @foreach($users as $user)
            <div class="profile-info">
                <img src="{{asset('images/profile_photo_url')}}" alt="">
                <h4>{{$user->name}}</h4>
            </div>
        @endforeach
    </section>
</main>
</body>
</html>
