<nav>
    <h1 class="fs-4">Event Management System</h1>

    <div class="my-4 d-flex gap-4">

        @if(url()->current() !== route('event.create'))

        <a href="{{ route('event.create') }}" class="text-decoration-none">
            <i class="fa fa-plus-circle"></i>
            <span>Add Event</span>
        </a>

        @endif

        <a href="#" class="btn-calendar text-decoration-none">
            <i class="fa fa-calendar"></i>
            <span>Calendar</span>
        </a>
    </div>
</nav>
