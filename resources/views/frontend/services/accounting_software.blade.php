@php use App\Constants\VariableConstants; @endphp
@extends('frontend.layout.master')
@section('hero')
    <section id="hero" class="d-flex align-items-center" style="height: 40vh !important;">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Accounting Software</h1>
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
                <h2>Accounting Software</h2>
            </div>

            <div class="row content">
                <div class="col-lg-12">
                    <div class="text-left">
                        <p>We are official reseller of:<br>
                        </p>
                        <ul type="none">
                            <li><i class="ri-check-double-line"></i> SAGE50</li>
                            <li><i class="ri-check-double-line"></i>SAGE100</li>
                            <li><i class="ri-check-double-line"></i>Intuit Quickbooks Entreprise Solutions</li>
                            <li><i class="ri-check-double-line"></i>Intuit Quickbooks Premier</li>
                            <li><i class="ri-check-double-line"></i>Online Quickbooks</li>
                        </ul>

                        <p>For more detail and Price discussion please Contactus <a class="btn btn info" style="background: #fb2628; border-radius: 30px;margin: 0 10px"  href="{{route('frontend.contact.us')}}"> Contact Us</a> </p>

                    </div>

                </div>

            </div>

        </div>
    </section>

    @include('frontend.components.partner')

@endsection
