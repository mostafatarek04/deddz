<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <title> Deddz Activities</title>
</head>
<body>
<header>
    <div class="activity-header">
       <div class="activity-title-box">
           <h2>BRowse all our activities</h2>
       </div>
    </div>
</header>
<main>
    <section class="section-1">
{{--             @php--}}
{{--             print_r($allSubs)--}}
{{--             @endphp--}}
        <div class="activities-search flex">
            <label for="user">Filter by user</label>
            <select name="user" id="user">
                <option value="" selected disabled hidden>Select Here</option>

              @foreach ($users as $user)
                    <option value="{{$user->name}}">{{$user->name}}</option>
                @endforeach
            </select>

        </div>
        <div class="activities-main">
            <div class="">
                <div class="">
{{--col-3-of-4 margin-rt-small--}}

                    @foreach($activities as $activity)
                        <div class="activity back-1">
                            <div class="activity-hover">
                           @if(in_array($activity->id,$allSubs))
                               <div class="activity-hover-controls">
                                   <p>You are subscribed</p>
                                   <button data-id="{{$activity->id}}" id="Unsub">Unsubscribe</button>
                               </div>

                                @else

                                    <div class="activity-hover-controls">
                                        <p>You are not subscribed</p>
                                        <button data-id="{{$activity->id}}" id="Sub">Subscribe</button>
                                    </div>

                                @endif
                            </div>
                            @foreach($activity->subscribers as $subscriber)
                                <p>{{$subscriber->pivot->use_name}}</p>
                            @endforeach
                           <div class="user-info">
                               <img src="{{asset($activity->user->profile_photo_url)}}" alt="">
                               <h3>{{$activity->user->name}}</h3>
                           </div>
                            <h4 class="activity-entry">{{$activity->activity_title}}</h4>
                            <p class="activity-entry">{{$activity->activity_body}}</p>
                            <h5 class="activity-entry">{{$activity->published_at}}</h5>
                            <h6 class="activity-entry">Confirmed:</h6>
                            <div class="users-container class=activity-entry">
                                @foreach($activity->subscribers as $subscriber2)
                                    <div><img src="{{$subscriber2->pivot->user_img}}" alt=""></div>

                                @endforeach

                            </div>
                            <a  href="">View Details</a>
                        </div>
                    @endforeach


                </div>

            </div>
        </div>
    </section>
</main>
<script src="{{asset('js/activity.js')}}"></script>
</body>
</html>
