<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- fullcalendar.min.css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.css">

    {{-- app.css --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>

<body>

    <div class="card">

        {{-- Toggle Calendar Sidebar --}}
        @include('layouts.shared.events-calendar')

        {{-- Header --}}
        @include('layouts.shared.header')

        <main class="card-body" style="min-height: 89vh;">
            <div class="container">

                {{-- Navigation --}}
                @include('layouts.shared.nav')

                {{-- Main Content --}}
                @yield("content")

            </div>
        </main>

        @include('layouts.shared.modal-delete')
    </div>
        {{-- app.js --}}
        <script src="{{ mix('js/app.js') }}"></script>

        {{-- FullCalendar.min.js --}}
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.js"></script>

        {{-- FullCalendar Setup --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                let el = document.getElementById('calendar');

                let calendar = new FullCalendar.Calendar(el, {
                    themeSystem: 'default',
                    initialView: 'dayGridMonth',
                    selectable: true,
                    dayMaxEvents: true,
                    headerToolbar: {
                        left: 'dayGridMonth,listMonth',
                        center: 'title',
                        right: 'today,prev,next',
                    },
                    footerToolbar: {
                        center: 'prevYear,nextYear'
                    },
                    customButtons: {},
                    buttonText: {
                        prevYear: 'Previous Year',
                        nextYear: 'Next Year'
                    },
                    events: @json($events_calendar),
                });

                calendar.render();
            });

        </script>

        {{-- Yielded script --}}
        @yield('script')

</body>

</html>
