<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('favicon')
     {{--    Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/all.css">
    <title>Dedzz Home</title>
</head>
<body>
<x-header></x-header>
<div class="navigation">
    <input type="checkbox" class="navigation-checkbox" id="nav-toggle">
    <label for="nav-toggle" class="navigation-button"><span class="navigation-icon">&nbsp;</span></label>
    <div class="navigation-background">&nbsp;</div>
    <nav class="navigation-nav">
        <ul class="navigation-list">
            <li class="navigation-item"><a href="" class="navigation-link">Home</a></li>
            <li class="navigation-item"><a href="" class="navigation-link">Book</a></li>
            <li class="navigation-item"><a href="" class="navigation-link">Memories Collection</a></li>
            <li class="navigation-item"><a href="{{url('/stories')}}" class="navigation-link">Stories</a></li>
            <li class="navigation-item"><a href="{{url('/profile/5')}}" class="navigation-link">Profile</a></li>
            <li class="navigation-item"><a href="" class="navigation-link">About</a></li>
        </ul>
    </nav>
</div>



<header class="welcome-header">

    <div class="title-box">
        <h1 class="title-header">
            <span class="upper-span">dedzzz</span>
            <span class="bottom-span">Welcome to our community</span>

        </h1>
    </div>
</header>


<main>
    <section class="section-1">
        <div class="founders-div">
            <h2 class="h2-title">Founders Of Dedzz</h2>

            <div class="all-founders">
            <div class="founderprofile">
                <div class=" img-box">
                    <img src="/images/mostafa.jpeg" alt="">
                </div>
                <div class="founder-desc">
                    <h4>Mostafa Tarek</h4>
                </div>
            </div>

            <div class="founderprofile">
                <div class=" img-box">
                    <img src="/images/rana.jpg" alt="">
                </div>
                <div class="founder-desc">
                    <h4>Rana Adel Abdo</h4>
                </div>
            </div>
            <div class="founderprofile">
                <div class=" img-box">
                    <img src="/images/mayar.jpg" alt="">
                </div>
                <div class="founder-desc">
                    <h4>Mayar Tarek Morsi</h4>
                </div>
            </div>
            <div class="founderprofile">
                <div class=" img-box">
                    <img src="/images/habiba.jpg" alt="">
                </div>
                <div class="founder-desc">
                    <h4>Habiba Adel Abdo</h4>
                </div>
            </div>
            <div class="founderprofile">
                <div class=" img-box">
                    <img src="/images/nour.jpg" alt="">
                </div>
                <div class="founder-desc">
                    <h4>Nour Adel Abdo</h4>
                </div>
            </div>

            <div class="founderprofile">
                <div class=" img-box">
                    <img src="/images/ingy.jpg" alt="">
                </div>
                <div class="founder-desc">
                    <h4>Ingy Adel Abdo</h4>
                </div>
            </div>

            <div class="founderprofile">
                <div class=" img-box">
                    <img src="/images/samar.jpg" alt="">
                </div>
                <div class="founder-desc">
                    <h4>Samar Adel Abdo</h4>
                </div>
            </div>
            </div>

        </div>
    </section>

    <section class="section-2">
        <div class="features-div">
           <h2 class="h2-title">Feature of becoming a "Deddd"</h2>

            <div class="feature">
                <div class="row">
                    <div class="col-1-of-2 feature-desc">
                        <h3 class="h3-heading">You are going to fall in LOVE with Dedzz</h3>
                        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias incidunt possimus rerum sunt.
                            Doloremque labore, mollitia nulla optio rerum vitae?</p>

                        <h3 class="h3-heading">Gice meaning to your life!</h3>
                        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias incidunt possimus rerum sunt.
                            Doloremque labore, mollitia nulla optio rerum vitae?</p>

                        <a class="btn btn-primary" href="#">Request Now &rAarr;</a>
                    </div>

                    <div class="col-1-of-2">
                        <div class="composition">
                            <img src="/images/friedch.jpg" alt="" class="composition-photo composition-photo-p1">
                            <img src="/images/pizza.jpg" alt="" class="composition-photo composition-photo-p2">
                            <img src="/images/choco.jpg" alt="" class="composition-photo composition-photo-p3">

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="section-3">
        <div class="moments">
            <h3 class="moments-secondary-heading">The Most Memorable Moments</h3>
            <div class="row">
                <div class="col-1-of-3">
                  <div class="card">

                          <div class="card__content card__content-front">
                              <h3 class="memory-title">Africana Park!</h3>
                              <div class="memory-img-box">
                                  <img src="/images/memory1.jpeg" alt="">
                              </div>
                              <p class="memory-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, voluptate!</p>

                          </div>
                          <div class="card__content card__content-back">
                              <div class="card__content-back-control">
                                  <h4>Discover More!</h4>
                                  <a class="memory-btn" href="">See Album</a>
                              </div>
                          </div>

                  </div>
                </div>

                <div class="col-1-of-3">
                    <div class="card">

                            <div class="card__content card__content-front">FRONT</div>
                            <div class="card__content card__content-back">BACK</div>

                    </div>
                </div>


                <div class="col-1-of-3">
                    <div class="card">

                            <div class="card__content card__content-front">FRONT</div>
                            <div class="card__content card__content-back">BACK</div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-3">
        <div class="booking">
           <div class="row">
               <div class="col-2-of-4">
                   <div class="holding">
                       <div class="content">
                           <h3><span class="upper">Excited ?</span> <span class="lower">Book a Dedz Now!</span></h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, consectetur debitis labore laborum obcaecati ullam.</p>
                           <a href="#" class="booking-btn"> Book Now!</a>
                       </div>
                   </div>
               </div>
               <div class="col-2-of-4">
                   <div class="booking-img-box">
                       <img src="{{asset('images/calendar2.png')}}" alt="">
                   </div>
               </div>
           </div>
        </div>
    </section>

</main>
</body>
</html>
