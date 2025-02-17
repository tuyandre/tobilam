@php use App\Constants\VariableConstants; @endphp
@extends('frontend.layout.master')
@section('hero')
    <section id="hero" class="d-flex align-items-center" style="height: 40vh !important;">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Business Registration & De-Registration</h1>
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
                <h2>Business Registration & De-Registration</h2>
            </div>

            <div class="row content">
                <div class="col-lg-12">
                    <div class="text-left">
                        <p>
                            As official agent of Rwanda Development Board, we advise you how you can open a business in Rwanda, make an amendment on your existing company, close your business and make your business dormant. We are specialized in submitting annual return as prescribed by The Rwandan company law.<br>
                            We advise you which name suits to your business, appropriate activities you can incorporate in your business and other taxations skills related to Companies in Rwanda. we help you also to get an investment certificate which enable your business to obtain business incentives and exemptions.
                            If there is any change or amendments needed, we advise and fill for you at a friendly cost.
                            <br>
                            We heplp you to make your business dormant, to close your business with legal matters.

                        </p>
                        <p>For more detail and Price discussion please Contactus <a class="btn btn info" style="background: #fb2628; border-radius: 30px;margin: 0 10px"  href="{{route('frontend.contact.us')}}"> Contact Us</a> </p>

                    </div>

                </div>

            </div>

        </div>
    </section>

    @include('frontend.components.partner')

@endsection
