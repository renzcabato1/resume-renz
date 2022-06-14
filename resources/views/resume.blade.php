@extends('layouts.app')

@section('content')

<section class="services-section">
    <h2 class="section-title">SERVICES</h2>
    <div class="row">
        <div class="media service-card col-lg-3">
            <div class="service-icon">
                <img src="assets/images/001-target.svg" alt="target">
            </div>
            <div class="media-body">
                <h5 class="service-title">web designing</h5>
         
            </div>
        </div>
        <div class="media service-card col-lg-3">
            <div class="service-icon">
                <img src="assets/images/003-idea.svg" alt="bulb">
            </div>
            <div class="media-body">
                <h5 class="service-title">Graphic design</h5>
             
            </div>
        </div>
        <div class="media service-card col-lg-3">
            <div class="service-icon">
                <img src="assets/images/002-development.svg" alt="development">
            </div>
            <div class="media-body">
                <h5 class="service-title">Development</h5>
             
            </div>
        </div>
        <div class="media service-card col-lg-3">
            <div class="service-icon">
                <img src="assets/images/004-smartphone.svg" alt="smartphone">
            </div>
            <div class="media-body">
                <h5 class="service-title">Mobile design</h5>
               
            </div>
        </div>
    </div>
</section>
<section class="resume-section">
    <div class="row">
        <div class="col-lg-6">
            <h2 class="section-title">EDUCATION</h2>
            <ul class="time-line">
                @foreach($educations as $educ)
                    <li class="time-line-item">
                        <span class="badge badge-primary">{{date('F Y',strtotime($educ->date_from))}} - {{date('F Y',strtotime($educ->date_to))}}</span>
                        <h6 class="time-line-item-title">{{$educ->school}}</h6>
                        <p class="time-line-item-subtitle">{{$educ->course}}</p>
                        <p class="time-line-item-content">{{$educ->school_address}}</p>
                    </li>
                @endforeach
             
              
            </ul>
        </div>
        <div class="col-lg-6">
            <h2 class="section-title">EDUCATION</h2>
            <ul class="time-line">
                @foreach($educations as $educ)
                    <li class="time-line-item">
                        <span class="badge badge-primary">{{date('F Y',strtotime($educ->date_from))}} - {{date('F Y',strtotime($educ->date_to))}}</span>
                        <h6 class="time-line-item-title">{{$educ->school}}</h6>
                        <p class="time-line-item-subtitle">{{$educ->course}}</p>
                        <p class="time-line-item-content">{{$educ->school_address}}</p>
                    </li>
                @endforeach
             
              
            </ul>
        </div>
    </div>
</section>

@endsection