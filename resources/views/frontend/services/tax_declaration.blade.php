@php use App\Constants\VariableConstants; @endphp
@extends('frontend.layout.master')
@section('hero')
    <section id="hero" class="d-flex align-items-center" style="height: 40vh !important;">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Tax and Declaration</h1>
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
                <h2>Tax and Declaration</h2>
            </div>

            <div class="row content">
                <div class="col-lg-12">
                    <div class="text-left">
                        <p>
                            As certified Tax advisory firm, we declare for local taxes, domestic taxes, non-fiscal fees, RSSB Contribution (Pension, medical insurance common know as RAMA and Maternity leave). As Official agent of IREMBO, we can declare for every service that is mapped on IREMBO. For the above mentioned taxes, we can have an agreement with you that enable us to manage daily your tax accounts, represent you in different
                            audits performed by Rwanda Revenue Authority and Rwanda Social Security Board on a permanent and annual basis

                        </p>

                        <p>For more detail and Price discussion please Contactus <a class="btn btn info" style="background: #fb2628; border-radius: 30px;margin: 0 10px"  href="{{route('frontend.contact.us')}}"> Contact Us</a> </p>

                    </div>

                </div>

            </div>

        </div>
    </section>

    @include('frontend.components.partner')

@endsection
