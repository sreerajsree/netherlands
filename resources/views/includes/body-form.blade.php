<div class="modal fade" id="bodyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <h4 class="mb-3">Private request for Body fit practices</h4>
                    <p class="fs-6 lh-base"><b>Thanks for contacting House for Positive Change. Please leave us your contact details for more information.</b></p>
                    <form action="{{ route('store.service') }}" method="POST">
                        @csrf
                        <input type="hidden" name="trainer" value="Body fit practices">
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
                                    value="Outdoor Yoga Condition Training" id="Outdoor Yoga Condition Training">
                                <label class="form-check-label" for="Outdoor Yoga Condition Training">
                                    Outdoor Yoga Condition Training
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" name="interest[]" type="checkbox"
                                    value="Yoga Stretching Massage" id="Yoga Stretching Massage">
                                <label class="form-check-label" for="Yoga Stretching Massage">
                                    Yoga Stretching Massage
                                </label>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="message" class="form-label">Briefly, what are your needs or topic?</label>
                            <textarea class="form-control" name="message" id="message" name="message" cols="30"
                                rows="5"></textarea>
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
