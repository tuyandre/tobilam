@php use App\Constants\VariableConstants; @endphp
@extends('frontend.layout.master')
@section('hero')
    <section id="hero" class="d-flex align-items-center" style="height: 40vh !important;">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Accounting Service</h1>
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
                <h2>Accounting Service</h2>
            </div>

            <div class="row content">
                <div class="col-lg-12">
                    <div class="text-left">
                        <p>
                            We advise you how you company, enterprise, non-profit organization and institution can have a strong, professional, efficient and compliant accounting department. Our profession accountants set your chart of accounts and items;
                            bookkeeping and reconcile your transaction through certified accounting software’s. <br>
                            We are able to advise you how to fill accounting documents such as invoices, bills, vouchers, payrolls, bank cheques, standing orders, bank slips and other accounting files.

                            A better accounting depatment must help managers to get reports daily, monthly, quaterly and annually.<br>
                            we are ready to help you building an accounting depatment which enable partners, bankers and donors to trust your business and/or institution.


                        </p>

                        <p>For more detail and Price discussion please Contactus <a class="btn btn info" style="background: #fb2628; border-radius: 30px;margin: 0 10px"  href="{{route('frontend.contact.us')}}"> Contact Us</a> </p>

                    </div>

                </div>

            </div>

        </div>
    </section>


    @include('frontend.components.partner')
@endsection
