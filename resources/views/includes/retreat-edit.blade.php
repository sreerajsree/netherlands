<div class="modal fade" id="retreatModalEdit_{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Edit: {{ $item->retreat_name }}</h1>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="p-2">
                    <form class="row g-3" action="{{ route('retreat.update', $item->id) }}" method="POST">
                        @csrf
                        <div class="col-md-6">
                            <label for="nop" class="form-label">No. of participants</label>
                            <input type="number" class="form-control form-control-lg" id="nop" name="nop"
                                value="{{ $item->nop }}">
                        </div>
                        <div class="col-md-6">
                            <label for="retreat_name" class="form-label">Retreat name <span
                                    class="text-danger">*</span></label>
                            <select id="retreat_name" class="form-select form-select-lg" name="retreat_name" required>
                                <option selected disabled>Select Retreat</option>
                                <option value="Himalayan Bliss Odyssey Retreat"
                                    @if ($item->retreat_name == 'Himalayan Bliss Odyssey Retreat') selected @endif>Himalayan Bliss Odyssey Retreat
                                </option>
                                <option value="Know Yourself Retreat - Belgian Ardennes"
                                    @if ($item->retreat_name == 'Know Yourself Retreat - Belgian Ardennes') selected @endif>Know Yourself Retreat - Belgian
                                    Ardennes</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="full_name" class="form-label">Full Name <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" id="full_name" name="full_name"
                                value="{{ $item->full_name }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="nop" class="form-label">Gender <span class="text-danger">*</span></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="female"
                                    @if ($item->gender == 'female') checked @endif value="female">
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male"
                                    @if ($item->gender == 'male') checked @endif value="male">
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="other"
                                    @if ($item->gender == 'other') checked @endif value="other">
                                <label class="form-check-label" for="other">
                                    Other
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="nationality" class="form-label">Nationality <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" name="nationality"
                                id="nationality" value="{{ $item->nationality }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="dob" class="form-label">Date of Birth <span
                                    class="text-danger">*</span></label>
                            <input type="date" class="form-control form-control-lg" id="dob" name="dob"
                                value="{{ $item->dob }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email Address <span
                                    class="text-danger">*</span></label>
                            <input type="email" class="form-control form-control-lg" name="email" id="email"
                                value="{{ $item->email }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="contact" class="form-label">Contact number <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" id="contact" name="contact"
                                value="{{ $item->contact }}" required>
                        </div>
                        <div class="col-md-12">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control form-control-lg">{{ $item->message }}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="medical" class="form-label">Do you have pre-existing medical condition?
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" id="medical" name="medical"
                                value="{{ $item->medical }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="dietary" class="form-label">Any specific dietary requirements?
                                Vegan/Vegetarian/ Food allergies etc. <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" id="dietary" name="dietary"
                                value="{{ $item->dietary }}" required>
                        </div>
                        <div class="col-md-12">
                            <label for="room" class="form-label">Rooming (In tent and hotel) <span
                                    class="text-danger">*</span></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="room" id="single"
                                    @if ($item->room == 'single') checked @endif value="single">
                                <label class="form-check-label" for="single">
                                    Single occupancy
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="room" id="twin"
                                    @if ($item->room == 'twin') checked @endif value="twin">
                                <label class="form-check-label" for="twin">
                                    Twin sharing
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="about_us" class="form-label">How have you got to know about us? <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" id="about_us"
                                name="about_us" value="{{ $item->about_us }}">
                        </div>
                        <div class="col-md-6">
                            <label for="emer_name" class="form-label">Emergency contact full name <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" id="emer_name"
                                value="{{ $item->emer_name }}" name="emer_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="emer_email" class="form-label">Emergency contact email <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" id="emer_email"
                                name="emer_email" value="{{ $item->emer_email }}" required
                                placeholder="Eg: john@doe.com">
                        </div>
                        <div class="col-md-6">
                            <label for="emer_number" class="form-label">Emergency contact phone number <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" id="emer_number"
                                name="emer_number" value="{{ $item->emer_number }}" required>
                        </div>
                        <button type="submit" class="site-btn mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
