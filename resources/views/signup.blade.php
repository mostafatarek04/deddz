<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <title>Document</title>
</head>
<body>
<main>

    <section class="section-signup">
        <div class="form-div">
            <h3 class="form-title text-cente">Welcome to our Deddz</h3>
            {!! Form::open(['url'=>'/user','method'=>'POST','class'=>'form']) !!}

            <div class="form-group">
                {!! Form::text('fullname',null,['placeholder'=>'Type Name Here ...','class'=>'form-group-input','required']) !!}
                {!! Form::label('fullname','Full Name',['class'=>'form-group-label']) !!}

            </div>

            <div class="form-group">
                {!! Form::text('username',null,['placeholder'=>'Type User Name Here ...','class'=>'form-group-input']) !!}
                {!! Form::label('username','User Name',['class'=>'form-group-label']) !!}

            </div>

            <div class="form-group">
                {!! Form::email('email',null,['placeholder'=>'Type Email Here ...','class'=>'form-group-input']) !!}
                {!! Form::label('email','Email Address',['class'=>'form-group-label']) !!}

            </div>
            <div class="form-group">
                {!! Form::password('password',['placeholder'=>'Type password Here ...','class'=>'form-group-input']) !!}
                {!! Form::label('password','Password',['class'=>'form-group-label']) !!}

            </div>

            <div class="form-group">
                <div class="form-radio-group">
                    {!! Form::radio('gender','Female',true,['class'=>'form-radio-group-input','id'=>'genderF']) !!}
                    {!! Form::label('genderF','<span class="form-radio-group-button"></span> Female',['class'=>'form-radio-group-label'],false) !!}
                </div>

                <div class="form-radio-group">
                    {!! Form::radio('gender','Male',false,['class'=>'form-radio-group-input','id'=>'genderM']) !!}
                    {!! Form::label('genderM','<span class="form-radio-group-button"></span> Male',['class'=>'form-radio-group-label'],false) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::submit('Register Now ',['class'=>'form-group-submit']) !!}
            </div>
            <div class="signup-links text-cente">
                <a href="/login">Already a user? Login instead</a>
            </div>

        </div>
    </section>
</main>

</body>
</html>
