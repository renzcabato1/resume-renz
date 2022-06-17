@extends('layouts.app')

@section('content')

<section class="services-section">
    <h2 class="section-title">SERVICES</h2>
    <div class="row">
        @foreach($services as $service)
        <div class="media service-card col-lg-3">
            <div class="service-icon">
                <img src="services/{{$service->name}}.png" alt="target">
            </div>
            <div class="media-body">
                <h5 class="service-title">{{$service->name}}</h5>
         
            </div>
        </div>
        @endforeach
       
    </div>
</section>
<section class="services-skills">
    <h2 class="section-title">SKILLS</h2>
    @foreach($skillTypes as $skillTypes)
    <h4 >{{$skillTypes->name}}</h4>
    <div class="row">
        @foreach($skillTypes->skills as $skill)
            <div class="media service-card col-lg-1 d-flex  justify-content-center">
                
             
                <div class="service-icons text-center">
                  
                    <img src="skills/{{$skill->tool}}.png" alt="target" class='' title='{{$skill->tool}}'> 
                    <br>
                    <span class='text-center'>{{$skill->tool}}</span>
                    
                </div>
            </div>
        @endforeach
    </div>
    <br>
    @endforeach
 
</section>
<section class="resume-section" id='history'>
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
            <h2 class="section-title">EXPERIENCE</h2>
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