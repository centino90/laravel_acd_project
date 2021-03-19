@extends("layouts.app")

@section('content')

    <div class="row justify-content-center">
        <div class="card col-lg-5 p-0">

            {{-- Card Header --}}
            <section class="card-header bg-warning d-flex justify-content-lg-between">
                <div>
                    <a href="{{ route('event.index') }}" class="text-decoration-none">Go Back</a>
                </div>
                <div class="d-flex gap-2 align-items-center">
                    <i class="fa fa-pen-alt"></i>
                    <span>Edit Event</span>
                </div>
            </section>

            {{-- Session Errors --}}
            @if ($errors->any())
                <div class="alert alert-danger rounded-0">
                    <header class="fs-5 fw-semibold mb-2">Ooops! You made few mishaps:</header>
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li class="">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Card Body --}}
            <section class="card-body">
                <form action="{{ route('event.update', $event->id) }}" method="POST">
                    @csrf
                    @method("PUT")

                    {{-- Event Name --}}
                    <div class="mb-4">
                        <label for="event_name" class="form-label">Event Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $event->name }}" autofocus>
                    </div>

                    {{-- Date --}}
                    <div class="mb-4">
                        <label for="event_date" class="form-label">Date</label>
                        <input id="event_date" type="date" name="date" class="form-control"
                            value="{{ $event->date }}">
                    </div>

                    {{-- In charge --}}
                    <div class="mb-4">
                        <label for="event_incharge" class="form-label">In charge</label>
                        <input type="text" name="in_charge" class="form-control" value="{{ $event->in_charge }}">
                    </div>

                    {{-- Venue --}}
                    <div class="mb-4">
                        <label for="event_venue" class="form-label">Venue</label>
                        <select name="venue" id="event_venue" class="form-select">
                            <option value="Church">Church</option>
                            <option value="AVR">AVR</option>
                            <option value="Chapel">Chapel</option>
                            <option value="Computer Room">Computer Room</option>
                            <option value="Quadrangle">Quadrangle</option>
                            <option value="Gymnasium">Gymnasium</option>
                        </select>
                    </div>

                    {{-- Submit --}}
                    <div class="mb-4">
                        <button type="submit" class="btn btn-warning form-control">
                            Update Event
                        </button>
                    </div>

                </form>
            </section>
        </div>

    </div>

@endsection

@section('script')
<script>
    document.getElementById("event_venue").value = "{{ $event->venue }}";
</script>

@endsection
