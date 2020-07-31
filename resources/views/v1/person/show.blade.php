<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header>
        @include('includes.header')
    </header>

    <div id="main" class="row">

        @yield('content')
        <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Hero section start -->
        <div class="col-12" style="margin: auto">


            <section class="hero-section spad">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="hero-text" style="position: relative;z-index: 1">
                                        <h2>{{$first_name.' '.$last_name}}</h2>

                                        <h3>AGE: {{$age}}</h3>
                                        <p>{{$about_me}}</p>
                                    </div>

                                    <div class="hero-info">
                                        <h2>General Info</h2>
                                        <ul>
                                            {{--                                <li><span>Date of Birth</span>{{$dob}}</li>--}}
                                            <li><span>Star Sign </span>{{$starSign}}</li>
                                            <li><span>Address</span>{{$city}}</li>
                                            <li><span>E-mail</span>{{$email}}</li>
                                            <li><span>Phone </span>{{$phone}}</li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="col-6" style="padding-top: 200px">
                                    <figure class="hero-image">
                                        <img src="{{asset('img/profile/'.$avatar)}}" alt="5">
                                    </figure>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="btn btn-block btn-lg site-btn btn-primary" name="send_date_request">Send Date Request</a>
                                    <a href="#" class="btn btn-block site-btn btn-danger" name="send_like">Send a Heart <i class="fa fa-heart-o" style="size: 50px"></i></a>
                                    <a href="#" class="btn btn-block site-btn btn-secondary" name="follow">Follow</a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </section>
            <!-- Hero section end -->

            <!-- Social links section start -->
            <div class="social-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="social-link-warp">
                                <div class="social-links">
                                    <a href=""><i class="fa fa-pinterest"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                    <a href=""><i class="fa fa-instagram"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                                <h2 class="hidden-md hidden-sm">My Social Profiles</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        </body>

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>



