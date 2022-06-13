<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="shortcut icon" href="{{url('images/logo.png')}}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="shortcut icon" href="{{url('images/programmer.png')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Mukta:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendors/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href='assets/css/live-resume.css'>
    <style>
          .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url("{{ asset('/images/3.gif')}}") 50% 50% no-repeat rgb(249,249,249) ;
            opacity: .8;
            background-size:200px 120px;
        }
    </style>
</head>
<body>
    <header>
        <button class="btn btn-white btn-share ml-auto mr-3 ml-md-0 mr-md-auto"><img src="assets/images/share.svg" alt="share" class="btn-img">
            SHARE</button>
           
        <nav class="collapsible-nav right" id="collapsible-nav">
            {{-- <a href="{{url('/')}}" class="nav-link @if($header == "home") active @endif">HOME</a> --}}
            <a href="{{url('/resume')}}" class="nav-link  @if($header == "resume") active @endif">RESUME</a>
            <a href="{{url('/portfolio')}}" class="nav-link">PORTFOLIO</a>
            <a href="{{url('/skills')}}" class="nav-link">SKILLS</a>
            <a href="{{url('/contact')}}" class="nav-link">CONTACT</a>
            <a href="{{url('/login')}}" target="_blank" class="nav-link">LOGIN</a>
        </nav>
        <button class="btn btn-menu-toggle btn-white rounded-circle" data-toggle="collapsible-nav"  data-target="collapsible-nav"><img src="assets/images/hamburger.svg" alt="hamburger"></button>
    </header>
    <div class="content-wrapper">
        <aside>
            <div class="profile-img-wrapper">
                <img src="assets/images/Profile.png" alt="profile">
            </div>
            <h1 class="profile-name">{{$information->name}}</h1>
            <div class="text-center">
                <span class="badge badge-white badge-pill profile-designation">{{$information->position}}</span>
            </div>
            <nav class="social-links">
                <a href="{{$information->facebook}}" target='_blank' class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="{{$information->instagram}}" target='_blank' class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="{{$information->linked_in}}" target='_blank' class="social-link"><i class="fab fa-linkedin"></i></a>
                <a href="{{$information->github}}" target='_blank' class="social-link"><i class="fab fa-github"></i></a>
            </nav>
            <div class="widget">
            <button class="btn btn-download-cv btn-primary rounded-pill"> <img  src="{{url('assets/images/download.svg')}}" target="_blank" alt="download"
                class="btn-img">DOWNLOAD CV </button>
            </div>
            <div class="widget">
                <h5 class="widget-title text-left">personal information</h5>
                <div class="widget-content text-left">
                    <p>CIVIL STATUS : </p>
                    <p>LOCATION : </p>
                    <p>NATIONALITY : </p>
                    <p>GENDER : </p>
                </div>
            </div>
            <div class="widget">
                <h5 class="widget-title text-left">contact information</h5>
                <div class="widget-content text-left">
                    <p>EMAIL : </p>
                    <p>PHONE : </p>
                    <p>VIBER : </p>
                </div>
            </div>
            <div class="widget card">
                <div class="card-body">
                    <div class="widget-content">
                        <h5 class="widget-title card-title">LANGUAGES</h5>
                        <p>English : native</p>
                        <p>Spanish : fluent</p>
                        <p>Italian : fluent</p>
                    </div>
                </div>
            </div>
            <div class="widget card">
                <div class="card-body">
                    <div class="widget-content">
                        <h5 class="widget-title card-title">INTERESTS</h5>
                        <p>Video games</p>
                        <p>Finance</p>
                        <p>Basketball</p>
                        <p>Theatre</p>
                    </div>
                </div>
            </div>
        </aside>
        <main>
            <section class="intro-section">
                <h2 class="section-title">Hello, Daisy Murphy!</h2>
                <p>I'm Creative Director and UI/UX Designer from Sydney, Australia, working in web development and print
                    media. I enjoy turning complex problems into simple, beautiful and intuitive designs. My job is to
                    build your website so that it is functional and user-friendly but at the same time attractive.
                    Moreover, I add personal touch to your product and make sure that is eye-catching and easy to use.
                    My aim is to bring across your message and identity in the most creative way. I created web design
                    for many famous brand companies.</p>
                <a href="#!" class="btn btn-primary btn-hire-me">HIRE ME</a>
            </section>
            <section class="resume-section">
                <div class="row">
                    <div class="col-lg-6">
                        <h6 class="section-subtitle">RESUME</h6>
                        <h2 class="section-title">EDUCATION</h2>
                        <ul class="time-line">
                            <li class="time-line-item">
                                <span class="badge badge-primary">1998 - 2005</span>
                                <h6 class="time-line-item-title">Master In Computer Science</h6>
                                <p class="time-line-item-subtitle">MASTER, UNIVERSITY</p>
                                <p class="time-line-item-content">Mauris magna sapien, pharetra consectetur fringilla
                                    vitae, interdum sed tortor.</p>
                            </li>
                            <li class="time-line-item">
                                <span class="badge badge-primary">1995 - 1998</span>
                                <h6 class="time-line-item-title">Studied at Harvard University</h6>
                                <p class="time-line-item-subtitle">UNIVERSITY</p>
                                <p class="time-line-item-content">Mauris magna sapien, pharetra consectetur fringilla
                                    vitae, interdum sed tortor.
                                </p>
                            </li>
                            <li class="time-line-item">
                                <span class="badge badge-primary">1993 - 1995</span>
                                <h6 class="time-line-item-title">Studied at Oxford University</h6>
                                <p class="time-line-item-subtitle">UNIVERSITY</p>
                                <p class="time-line-item-content">Mauris magna sapien, pharetra consectetur fringilla
                                    vitae, interdum sed tortor.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h6 class="section-subtitle">RESUME</h6>
                        <h2 class="section-title">Experience</h2>
                        <ul class="time-line">
                            <li class="time-line-item">
                                <span class="badge badge-primary">2010 - 2014</span>
                                <h6 class="time-line-item-title">UI/UX Designer</h6>
                                <p class="time-line-item-subtitle">Web Agency</p>
                                <p class="time-line-item-content">Mauris magna sapien, pharetra consectetur fringilla
                                    vitae, interdum sed
                                    tortor.</p>
                            </li>
                            <li class="time-line-item">
                                <span class="badge badge-primary">2008 - 2010</span>
                                <h6 class="time-line-item-title">Web Designer</h6>
                                <p class="time-line-item-subtitle">Apple Inc.</p>
                                <p class="time-line-item-content">Mauris magna sapien, pharetra consectetur fringilla
                                    vitae, interdum sed
                                    tortor.
                                </p>
                            </li>
                            <li class="time-line-item">
                                <span class="badge badge-primary">2006 - 2008</span>
                                <h6 class="time-line-item-title">Graphic Designer</h6>
                                <p class="time-line-item-subtitle">Apple Inc.</p>
                                <p class="time-line-item-content">Mauris magna sapien, pharetra consectetur fringilla
                                    vitae, interdum sed
                                    tortor.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        @yield('content')
    </div>

    <script src='assets/vendors/jquery/dist/jquery.min.js'></script>
    <script src='assets/vendors/@popperjs/core/dist/umd/popper-base.min.js'></script>
    <script src='assets/vendors/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src='assets/js/live-resume.js'></script>
</body>
</html>
