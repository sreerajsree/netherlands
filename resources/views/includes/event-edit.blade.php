<div class="modal fade" id="eventModalEdit_{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Edit: {{ $item->event_name }} -
                    {{ $item->name }}</h1>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="p-2">
                    <form action="{{ route('update.eventbooking', $item->id) }}" method="POST">
                        @csrf
                        <div class="mt-4">
                            <label for="event_name" class="form-label">Event name <span
                                    class="text-danger">*</span></label>
                            <select id="event_name" class="form-select form-select-lg" name="event_name" required>
                                <option selected disabled>Select Event</option>
                                @foreach ($allevents as $eventitem)
                                    <option value="{{ $eventitem->name }}"
                                        @if ($item->event_name == $eventitem->name) selected @endif>{{ $eventitem->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-4">
                            <label for="name" class="form-label">Full Name <span
                                    class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control form-control-lg" id="name"
                                value="{{ $item->name }}" required>
                        </div>
                        <div class="mt-4">
                            <label for="email" class="form-label">Email Address <span
                                    class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control form-control-lg" id="email"
                                value="{{ $item->email }}" required>
                        </div>
                        <div class="mt-4">
                            <label for="phone" class="form-label">Phone Number <span
                                    class="text-danger">*</span></label>
                            <input type="number" class="form-control form-control-lg" id="phone" name="phone"
                                value="{{ $item->phone }}" required>
                        </div>
                        <div class="mt-4">
                            <label for="nos" class="form-label">Number of people</label>
                            <input type="number" class="form-control form-control-lg" id="nos" name="nos"
                                required value="{{ $item->nos }}">
                        </div>
                        <div class="mt-4">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control form-control-lg" name="message" id="message" name="message" cols="30"
                                rows="5">{{ $item->message }}</textarea>
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
