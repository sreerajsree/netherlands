<div class="modal fade" id="elianneModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">&nbsp;</h1>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="p-2">
                    <div class="d-flex justify-content-center mb-4">
                        <img class="w-50" src="{{ asset('assets/img/logo-footer.png') }}" alt="">
                    </div>
                    <h4 class="mb-3">Private request for Elianne</h4>
                    <p class="fs-6 lh-base"><b>Thanks for contacting House for Positive Change. Please leave us your
                            contact details for more information.</b></p>
                    <form action="{{ route('store.service') }}" method="POST">
                        @csrf
                        <input type="hidden" name="trainer" value="Elianne">
                        <div class="mt-4">
                            <label for="first_name" class="form-label">First Name<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="first_name" class="form-control" id="first_name"
                                placeholder="Eg: John" required>
                        </div>
                        <div class="mt-4">
                            <label for="last_name" class="form-label">Last Name<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="last_name" class="form-control" id="last_name"
                                placeholder="Eg: Doe" required>
                        </div>
                        <div class="mt-4">
                            <label for="email" class="form-label">Email Address <span
                                    class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="Eg: john@doe.com" required>
                        </div>
                        <div class="mt-4">
                            <label for="phone" class="form-label">Phone Number <span
                                    class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="phone" name="phone"
                                required>
                        </div>
                        <div class="mt-4">
                            <label for="interest" class="form-label">What are you interested in? <span
                                    class="text-danger">*</span></label>
                            <div class="form-check mb-2">
                                <input class="form-check-input" name="interest[]" type="checkbox"
                                    value="One time for a specific reason" id="One time for a specific reason">
                                <label class="form-check-label" for="One time for a specific reason">
                                    One time for a specific reason
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" name="interest[]" type="checkbox"
                                    value="To be coached /supported over time" id="To be coached /supported over time">
                                <label class="form-check-label" for="To be coached /supported over time">
                                    To be coached /supported over time
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" name="interest[]" type="checkbox" value="I am not sure"
                                    id="I am not sure">
                                <label class="form-check-label" for="I am not sure">
                                    I am not sure
                                </label>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="message" class="form-label">Briefly, what are your needs or topic?</label>
                            <textarea class="form-control" name="message" id="message" name="message" cols="30"
                                rows="5"></textarea>
                        </div>
                        <div class="mt-4">
                            <label for="day" class="form-label">Preferred days of the week for your appointment?
                                (choose 2-3) <span class="text-danger">*</span></label>
                            <div class="form-check mb-2">
                                <input class="form-check-input" name="day[]" type="checkbox" value="Monday"
                                    id="Monday">
                                <label class="form-check-label" for="Monday">
                                    Monday
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" name="day[]" type="checkbox" value="Tuesday"
                                    id="Tuesday">
                                <label class="form-check-label" for="Tuesday">
                                    Tuesday
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" name="day[]" type="checkbox" value="Wednesday"
                                    id="Wednesday">
                                <label class="form-check-label" for="Wednesday">
                                    Wednesday
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" name="day[]" type="checkbox" value="Thursday"
                                    id="Thursday">
                                <label class="form-check-label" for="Thursday">
                                    Thursday
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" name="day[]" type="checkbox" value="Friday"
                                    id="Friday">
                                <label class="form-check-label" for="Friday">
                                    Friday
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" name="day[]" type="checkbox" value="Saturday"
                                    id="Saturday">
                                <label class="form-check-label" for="Saturday">
                                    Saturday
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" name="day[]" type="checkbox" value="Sunday"
                                    id="Sunday">
                                <label class="form-check-label" for="Sunday">
                                    Sunday
                                </label>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="time" class="form-label">Preferred time of day? <span
                                    class="text-danger">*</span></label>
                            <div class="form-check mb-2">
                                <input class="form-check-input" name="time[]" type="checkbox" value="Morning"
                                    id="Morning">
                                <label class="form-check-label" for="Morning">
                                    Morning
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" name="time[]" type="checkbox" value="Afternoon"
                                    id="Afternoon">
                                <label class="form-check-label" for="Afternoon">
                                    Afternoon
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" name="time[]" type="checkbox" value="Evening"
                                    id="Evening">
                                <label class="form-check-label" for="Evening">
                                    Evening
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" name="time[]" type="checkbox" value="Other"
                                    id="Other">
                                <label class="form-check-label" for="Other">
                                    Other
                                </label>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="place" class="form-label">Where would you like to have the appointment?
                                <span class="text-danger">*</span></label>
                            <div class="form-check mb-2">
                                <input class="form-check-input" name="place[]" type="checkbox"
                                    value="In House for Positive Change Yoga studio (If you have a preference, please write it below)"
                                    id="In House for Positive Change Yoga studio (If you have a preference, please write it below)">
                                <label class="form-check-label"
                                    for="In House for Positive Change Yoga studio (If you have a preference, please write it below)">
                                    In House for Positive Change Yoga studio (If you have a preference, please write it
                                    below)
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" name="place[]" type="checkbox" value="Online (Zoom)"
                                    id="Online (Zoom)">
                                <label class="form-check-label" for="Online (Zoom)">
                                    Online (Zoom)
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" name="place[]" type="checkbox"
                                    value="At my home or office (please indicate the location)"
                                    id="At my home or office (please indicate the location)">
                                <label class="form-check-label"
                                    for="At my home or office (please indicate the location)">
                                    At my home or office (please indicate the location)
                                </label>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="notes" class="form-label">Anything else?<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="notes" class="form-control"
                                id="notes">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="site-btn mt-3">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
