@php use App\Constants\VariableConstants; @endphp
@extends('frontend.layout.master')
@section('hero')
    <section id="hero" class="d-flex align-items-center" style="height: 40vh !important;">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Coaching</h1>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{asset(VariableConstants::ROOT_FOLDER.'assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>
@endsection
@section('content')


    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Coaching</h2>
            </div>

            <div class="row content">
                <div class="col-lg-12">
                    <div class="text-left">
                        <p>
                            We train your staffs in:
                        </p>

                        <ul type="none">
                            <li><i class="ri-check-double-line"></i>Accounting skills</li>
                            <li><i class="ri-check-double-line"></i>Taxation</li>
                            <li><i class="ri-check-double-line"></i>Secretariat</li>
                            <li><i class="ri-check-double-line"></i>Customer care service</li>
                            <li><i class="ri-check-double-line"></i>Accounting softwares : Sage50, Sage100, Desktop and online quickbooks</li>
                            <li><i class="ri-check-double-line"></i>Office Management and organization</li>

                        </ul>
                        <p>We help business in staff’s capacity building, this service can be offered and your work place or at our offices.</p>

                        <p>For more detail and Price discussion please Contactus <a class="btn btn info" style="background: #fb2628; border-radius: 30px;margin: 0 10px"  href="{{route('frontend.contact.us')}}"> Contact Us</a> </p>

                    </div>

                </div>

            </div>

        </div>
    </section>

    @include('frontend.components.partner')

@endsection
