@extends("layouts.app")

@section('content')

    {{-- Session Mesages --}}
    <div>
        @if ($message = Session::get('success_destroy'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @elseif ($message = Session::get('success_store'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @elseif ($message = Session::get('success_update'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @elseif ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 my-3">

        {{-- Event Cards --}}
        @forelse ($events as $event)
            <div class="col">
                <div class="card">

                    {{-- Card Header --}}
                    <section class="card-header d-flex justify-content-between align-items-center">
                        <h5>{{ $event->name }}</h5>
                        <form action="{{ route('event.destroy', $event->id) }}" method="post" id="delete_{{ $event->id }}">
                            @csrf
                            @method("DELETE")

                            <button type="submit" class="btn text-danger" data-bs-data="delete_{{ $event->id }}"
                                data-bs-title="{{ $event->name }}" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                onclick="event.preventDefault();">
                                <i class="fa fa-times"></i>
                            </button>
                        </form>
                    </section>

                    {{-- Card Body --}}
                    <section class="card-body py-5">
                        <div class="d-flex justify-content-center gap-5">
                            <div>
                                <a href="{{ route('event.show', $event->id) }}" class="btn btn-primary">View</a>
                            </div>
                            <div>
                                <a href="{{ route('event.edit', $event->id) }}" class="btn btn-warning">Edit</a>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

            {{-- Fall case --}}
        @empty
            <div class="text-center">
                There are no events present in database!
            </div>

        @endforelse

    </div>

@endsection
