<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">

    <title>Deedzz Register</title>
</head>
<body>
<main>
<section class="section-signup">
    <div class="form-div">
        <h3 class="form-title text-cente">Sign in to our Deddz</h3>
        {!! Form::open(['url'=>'/user-login','method'=>'POST','class'=>'form']) !!}

        <div class="form-group">
            {!! Form::email('email',null,['placeholder'=>'Type Email Here ...','class'=>'form-group-input']) !!}
            {!! Form::label('email','Email Address',['class'=>'form-group-label']) !!}

        </div>
        <div class="form-group">
            {!! Form::password('password',['placeholder'=>'Type password Here ...','class'=>'form-group-input']) !!}
            {!! Form::label('password','Password',['class'=>'form-group-label']) !!}

        </div>


        <div class="form-group">
            {!! Form::submit('Sign In' ,['class'=>'form-group-submit']) !!}
        </div>
        <div class="signup-links text-cente">
            <a href="/signup">Not a user? Register Now</a>
        </div>

    </div>

</section>
</main>
</body>
</html>
