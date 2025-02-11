<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="/">
                <img src="{{asset($ROOT_FOLDER.'assets/img/logo.jpg')}}" >
            </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="getstarted scrollto active" href="/">Home</a></li>
                <li><a class="getstarted scrollto" href="{{route('frontend.about.us')}}">About</a></li>
                <li><a class="getstarted scrollto" href="{{route('frontend.services')}}">Services</a></li>
{{--                <li><a class="nav-link   scrollto" href="{{route('frontend.gallery')}}">Our Gallery</a></li>--}}
{{--                <li><a class="nav-link scrollto" href="{{route('frontend.team')}}">Our Team</a></li>--}}
                <li><a class="getstarted scrollto" href="{{route('frontend.contact.us')}}">Contact</a></li>
{{--                <li><a class="getstarted scrollto" href="{{route('frontend.pricing')}}">Training Program </a></li>--}}
                <li><a class="getstarted scrollto btn " style="background: #fb2628" href="https://tobilam.co.rw:2096/" target="_blank">Webmail </a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
