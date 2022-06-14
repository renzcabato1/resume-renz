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
            <a href='{{url($information->resume)}}' target="_blank"><button class="btn btn-download-cv btn-primary rounded-pill"> <img  src="{{url('assets/images/download.svg')}}" target="_blank" alt="download"
                class="btn-img">DOWNLOAD CV </button></a>
            </div>
            <div class="widget">
                <h5 class="widget-title text-left">personal information</h5>
                <div class="widget-content text-left">
                    <p>CIVIL STATUS : {{$information->civil_status}}</p>
                    <p>LOCATION : {{$information->location}}</p>
                    <p>NATIONALITY : {{$information->nationality}}</p>
                    <p>GENDER : {{$information->gender}}</p>
                </div>
            </div>
            <div class="widget">
                <h5 class="widget-title text-left">contact information</h5>
                <div class="widget-content text-left">
                    <p>EMAIL : {{$information->email}}</p>
                    <p>PHONE : {{$information->phone_number}}</p>
                    <p>VIBER : {{$information->viber}}</p>
                </div>
            </div>
          
            <div class="widget card">
                <div class="card-body">
                    <div class="widget-content ">
                        <h5 class="widget-title card-title">HOBBIES</h5>
                            @foreach($hobbies as $hobby)
                            <p class='text-left'>{{$hobby->name}}</p>
                            @endforeach
                    </div>
                </div>
            </div>
        </aside>
        <main>
            @yield('content')
        </main>
    </div>

    <script src='assets/vendors/jquery/dist/jquery.min.js'></script>
    <script src='assets/vendors/@popperjs/core/dist/umd/popper-base.min.js'></script>
    <script src='assets/vendors/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src='assets/js/live-resume.js'></script>
</body>
</html>
