<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact</h2>
            <p>.</p>
        </div>

        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>BASIL HEIGHTS, 2nd Floor</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p> info@tobilam.co.rw </p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+250788346571 / +250788347526</p>
                    </div>
                    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=The B Lounge&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://sprunkin.com/">Sprunki</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
{{--                    <div style="width: 100%">--}}
{{--                     <iframe width="431" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Kicukiro/Ziniya%20Market,%20KK%20502%20st%20Office%20of%20Professional%20Auditor+(OPA(Office%20of%20Professional%20Auditor))&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/population/">Population Estimator map</a></iframe>--}}
{{--                    </div>--}}

   </div>

            </div>

           <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">

                <form action="{{route('frontend.contact-us.store')}}" method="post" id="contactus_form" role="form" class="php-email-form">
                    @csrf
                    <div class="row">
                        <div class="form-group">

                            {{--                //get message from session--}}
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            {{--                //get message from session--}}
                            @if(session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Your Name</label>
                            <input type="text" name="full_name" class="form-control @error('full_name') is-invalid @enderror" id="full_name" required>

                            @error('full_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Your Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="telephone">Your Telephone</label>
                            <input type="tel" class="form-control @error('telephone') is-invalid @enderror" name="telephone" id="telephone" required>

                            @error('telephone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">

                        <label for="name">Subject</label>
                        <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" required>

                        @error('subject')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Reason</label>
                        <select class="form-control @error('reason') is-invalid @enderror select2" multiple name="reason[]" id="reason" required style="width: 100%" data-mce-placeholder="sel">

                            <option value="Accounting Services">Accounting Services</option>
                            <option value="Accounting Software">Accounting Software</option>
                            <option value="Taxation & IREMBO">Taxation & IREMBO</option>
                            <option value="Business Registration & Deregistration">Business Registration & Deregistration</option>
                            <option value="Business & Strategic Plan">Business & Strategic Plan</option>
                            <option value="Coaching">Coaching</option>
                            <option value="Internship">Internship</option>
                            <option value="Application for Job">Application for Job</option>
                            <option value="Website & Database development">Website & Database development</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Message</label>
                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5" required></textarea>

                        @error('message')
                        <span class="invalid-feedback" role="alert">
                                        <strong >{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="text-center">
                        <input type="submit" class="btn btn-contactus" value="Send Message"/></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
