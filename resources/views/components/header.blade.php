<aside class="header-top-aside">
    <div class="header-top">
        {!! Form::open(['url'=>'/searchheader','method'=>'post']) !!}
        {!! Form::text('search',null,['placeholder'=>'search users']) !!}
        {!! Form::submit('search') !!}
        {!! Form::close() !!}

        <a href="/allusers">Browse Users</a>
    </div>
</aside>
