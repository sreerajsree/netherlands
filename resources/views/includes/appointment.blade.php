<!-- Appoinment Section Begin -->
<section class="appointment">
    <div class="container">
        <div class="appointment__text">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <img width="50" height="50" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                        <h2>Make An Appointment</h2>
                    </div>
                </div>
            </div>
            <form action="#" class="appointment__form">
                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" placeholder="Name">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" placeholder="Email">
                    </div>
                    <div class="col-lg-12">
                        <input type="text" placeholder="Phone">
                    </div>
                    {{-- <div class="col-lg-6">
                        <select class="class-select">
                            <option value="">Choose Your Class</option>
                        </select>
                    </div> --}}
                    <div class="col-lg-12 text-center">
                        <textarea placeholder="Message"></textarea>
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Appoinment Section End -->