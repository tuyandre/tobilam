<!-- ======= Contact Section ======= -->
<section id="contact" class="contact" style="background: #146c77; padding-top: 80px">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2 style="color: white">Training Registration</h2>
{{--            <p> Training registration summary</p>--}}
        </div>
        <div class="row">

            <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="{{route('frontend.registration.store')}}" method="post" role="form" id="training_form" class="php-email-form">
                  @csrf
                    <div class="row">

                        <div class="form-group">
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
                            <label for="service">Select Session *</label>
                            <select class="form-control select2"   name="session_id" id="session" style="width: 100%" required data-placeholder="Select Session/Training do you wish to Attend">
                                @foreach($sessions as $session)
                                    <option value="{{$session->id}}">{{$session->session_title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Your Full Name *</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Your Email *</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="telephone">Your Phone *</label>
                                <input type="text" class="form-control" name="telephone" id="telephone" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="gender">Select Gender *</label>
                            <select class="form-control select2"   name="gender" id="gender" style="width: 100%" required data-placeholder="Select Gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="B-sexual">B-sexual</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="education_level">Select Level of Education *</label>
                            <select class="form-control select2"   name="education_level" id="education_level" style="width: 100%" required data-placeholder="Select Education Level">
                                <option value="Secondary Education(A2)">Secondary Education(A2)</option>
                                <option value="Post-Secondary Diplomas(A1)">Post-Secondary Diplomas(A1)</option>
                                <option value="Bachelor">Bachelor</option>
                                <option value="Master">Master</option>
                                <option value="Doctorate(PhD)">Doctorate(PhD)</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="company_name">Company Name</label>
                            <input type="text" class="form-control" name="company_name" id="company_name" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="company_tin">Company Tin</label>
                            <input type="number" class="form-control" name="company_tin" id="company_tin" minlength="9" maxlength="9">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="position">Select Position do you hold in your company  *</label>
                            <select class="form-control select2"   name="position" id="position" style="width: 100%" required data-placeholder="Select Gender">
                                <option value="CEO">CEO</option>
                                <option value="HR">HR</option>
                                <option value="CFO">CFO</option>
                                <option value="Accountant">Accountant</option>
                                <option value="Auditor">Auditor</option>
                                <option value="Cashier">Cashier</option>
                                <option value="Procurement">Procurement</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="service">Select service/Training do you wish to have *</label>
                            <select class="form-control select2" multiple name="services[]" id="service" style="width: 100%" required data-placeholder="Select service/Training do you wish to have">
                               <option value="">Select service/Training do you wish to have</option>
                                @foreach($services as $service)
                                <option value="{{$service->id}}">{{$service->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="comment">Comment</label>
                            <textarea class="form-control" name="comment" rows="3" id="comment"  required></textarea>
                        </div>

                    <div class="form-group col-md-6">
                        <label for="agreement"> <strong>I understand that I will have to pay  200,000.00 RWf before enrollment for the training of my choice and
                                Two consecutive absence with no clear justification leads to automatic dismissal from the training program. </strong> </label>
                        <input type="checkbox" value="1" name="agreement" id="agreement">
                    </div>
                    </div>


                    <div class="text-center">
                        <input type="submit" class="btn btn-info rounded btn-contactus" value="Register"/></div>
                </form>

            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
