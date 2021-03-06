@extends('layouts.app')

@section('content')

    <section class="services-section">
        <h6 class="section-subtitle">WHAT I DO</h6>
        <h2 class="section-title">SERVICES</h2>
        <div class="row">
            <div class="media service-card col-lg-6">
                <div class="service-icon">
                    <img src="assets/images/001-target.svg" alt="target">
                </div>
                <div class="media-body">
                    <h5 class="service-title">web designing</h5>
                    <p class="service-description">Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed
                        tortor.</p>
                </div>
            </div>
            <div class="media service-card col-lg-6">
                <div class="service-icon">
                    <img src="assets/images/003-idea.svg" alt="bulb">
                </div>
                <div class="media-body">
                    <h5 class="service-title">Graphic design</h5>
                    <p class="service-description">Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed
                        tortor.
                    </p>
                </div>
            </div>
            <div class="media service-card col-lg-6">
                <div class="service-icon">
                    <img src="assets/images/002-development.svg" alt="development">
                </div>
                <div class="media-body">
                    <h5 class="service-title">Development</h5>
                    <p class="service-description">Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed
                        tortor.
                    </p>
                </div>
            </div>
            <div class="media service-card col-lg-6">
                <div class="service-icon">
                    <img src="assets/images/004-smartphone.svg" alt="smartphone">
                </div>
                <div class="media-body">
                    <h5 class="service-title">Mobile design</h5>
                    <p class="service-description">Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed
                        tortor.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-section">
        <div id="testimonialCarousel" class="testimonial-carousel carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <p class="testimonial-content">Mauris magna sapien, pharetra consectetur fringilla vitae,
                        interdum sed tortor.</p>
                    <img src="assets/images/Profile.png" alt="profile" class="testimonial-img">
                    <p class="testimonial-name">Nout Golstein</p>
                </div>
                <div class="carousel-item">
                    <p class="testimonial-content">Mauris magna sapien, pharetra consectetur fringilla vitae,
                        interdum sed tortor.</p>
                    <img src="assets/images/Profile.png" alt="profile" class="testimonial-img">
                    <p class="testimonial-name">Nout Golstein</p>
                </div>
                <div class="carousel-item">
                    <p class="testimonial-content">Mauris magna sapien, pharetra consectetur fringilla vitae,
                        interdum sed tortor.</p>
                    <img src="assets/images/Profile.png" alt="profile" class="testimonial-img">
                    <p class="testimonial-name">Nout Golstein</p>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#testimonialCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#testimonialCarousel" data-slide-to="1"></li>
                <li data-target="#testimonialCarousel" data-slide-to="2"></li>
            </ol>
        </div>
    </section>
</main>
@endsection
