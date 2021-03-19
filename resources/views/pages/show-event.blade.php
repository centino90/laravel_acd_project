@extends("layouts.app")

@section('content')

    <div class="row justify-content-center">
        <div class="card col-lg-5 p-0">

            {{-- Card Header --}}
            <section class="card-header bg-success d-flex justify-content-lg-between">
                <div>
                    <a href="{{ route('event.index') }}" class="text-decoration-none text-white">Go Back</a>
                </div>
                <div class="d-flex gap-2 align-items-center text-white">
                    <i class="fa fa-eye"></i>
                    <span>Show Event</span>
                </div>
            </section>

            {{-- Card Body --}}
            <section class="card-body">

                {{-- Event Name --}}
                <div class="mb-4">
                    <label for="event_name" class="form-label">Event Name</label>
                    <div class="col-12 border-bottom p-1" id="event_name">
                        {{ $event->name }}
                    </div>
                </div>

                {{-- Date --}}
                <div class="mb-4">
                    <label for="event_date" class="form-label">Date</label>
                    <div class="col-12 border-bottom p-1" id="event_date">
                        {{ $event->date }}
                    </div>
                </div>

                {{-- In charge --}}
                <div class="mb-4">
                    <label for="event_incharge" class="form-label">In charge</label>
                    <div class="col-12 border-bottom p-1" id="event_incharge">
                        {{ $event->in_charge }}
                    </div>
                </div>

                {{-- Venue --}}
                <div class="mb-4">
                    <label for="event_venue" class="form-label">Venue</label>
                    <div class="col-12 border-bottom p-1" id="event_venue">
                        {{ $event->venue }}
                    </div>
                </div>

            </section>
        </div>

    </div>

@endsection
