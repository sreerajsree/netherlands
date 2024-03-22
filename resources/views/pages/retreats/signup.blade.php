@extends('layouts.app')
@section('seo')
<title>RESERVE A SPOT RETREAT - House for Positive Change</title>
<meta name="description" content="House for Positive Change - Live life. Time flies.">
@endsection
@section('content')
    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="{{ asset('assets/img/services/banner.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>RESERVE A SPOT RETREAT FORM</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->
    <div class="leave-comment comment-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="leave__comment__text">
                        <h2>We are excited to see you signing up for our retreat.</h2>
                        <form class="row g-3" action="{{ route('store.retreat') }}" method="POST">
                            @csrf
                            <div class="col-md-6">
                                <label for="nop" class="form-label">No. of participants</label>
                                <input type="number" class="form-control form-control-lg" id="nop" name="nop" value="1">
                            </div>
                            <div class="col-md-6">
                                <label for="retreat_name" class="form-label">Retreat name <span class="text-danger">*</span></label>
                                <select id="retreat_name" class="form-select form-select-lg" name="retreat_name" required>
                                    <option selected disabled>Select Retreat</option>
                                    <option value="Himalayan Bliss Odyssey Retreat">Himalayan Bliss Odyssey Retreat</option>
                                    <option value="Know Yourself Retreat - Belgian Ardennes">Know Yourself Retreat - Belgian Ardennes</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="full_name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="full_name" name="full_name" placeholder="Eg: John Carter" required>
                            </div>
                            <div class="col-md-6">
                                <label for="nop" class="form-label">Gender <span class="text-danger">*</span></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female" checked
                                        value="female">
                                    <label class="form-check-label" for="female">
                                        Female
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male"
                                        value="male">
                                    <label class="form-check-label" for="male">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="other"
                                        value="other">
                                    <label class="form-check-label" for="other">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="nationality" class="form-label">Nationality <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" name="nationality" id="nationality" placeholder="Eg: German" required>
                            </div>
                            <div class="col-md-6">
                                <label for="dob" class="form-label">Date of Birth <span class="text-danger">*</span></label>
                                <input type="date" class="form-control form-control-lg" id="dob" name="dob" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Eg: John@doe.com" required>
                            </div>
                            <div class="col-md-6">
                                <label for="contact" class="form-label">Contact number <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="contact" name="contact" required>
                            </div>
                            <div class="col-md-12">
                                <label for="message" class="form-label">Message</label>
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control form-control-lg"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="medical" class="form-label">Do you have pre-existing medical condition?
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="medical" name="medical" required>
                            </div>
                            <div class="col-md-6">
                                <label for="dietary" class="form-label">Any specific dietary requirements?
                                    Vegan/Vegetarian/ Food allergies etc. <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="dietary" name="dietary" required>
                            </div>
                            <div class="col-md-12">
                                <label for="room" class="form-label">Rooming (In tent and hotel) <span class="text-danger">*</span></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="room" id="single" checked
                                        value="single">
                                    <label class="form-check-label" for="single">
                                        Single occupancy
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="room" id="twin"
                                        value="twin">
                                    <label class="form-check-label" for="twin">
                                        Twin sharing
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="about_us" class="form-label">How have you got to know about us? <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="about_us" name="about_us">
                            </div>
                            <div class="col-md-6">
                                <label for="emer_name" class="form-label">Emergency contact full name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="emer_name" placeholder="Eg: Jim Carter" name="emer_name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="emer_email" class="form-label">Emergency contact email <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="emer_email" name="emer_email" required
                                    placeholder="Eg: john@doe.com">
                            </div>
                            <div class="col-md-6">
                                <label for="emer_number" class="form-label">Emergency contact phone number <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="emer_number" name="emer_number" required>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                <label class="form-check-label" for="inlineFormCheck">
                                    I confirm that I have read and understood the <a href="">terms and
                                        conditions</a> of contract, <a href="">waiver
                                        of liability</a> and this Agreement prior to digitally signing it and agree that
                                    this
                                    Agreement will be binding upon my heirs, next of kin, executors, administrators and
                                    successors.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                <label class="form-check-label" for="inlineFormCheck">
                                    I hereby declare that the details furnished above are true and correct to the best of my
                                    knowledge and belief and I undertake to inform you of any changes therein, immediately.
                                    In case any of the above information is found to be false or untrue or misleading or
                                    misrepresenting, I am aware that I may be held liable for it.
                                </label>
                            </div>
                            <button type="submit" class="site-btn mt-5">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.blog')
    @include('includes.appointment')
@endsection
