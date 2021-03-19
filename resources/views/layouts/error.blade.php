<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error Page</title>

    {{-- app.css --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    {{-- app.js --}}
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body>

    <div class="vw-100 vh-100 d-flex align-items-center justify-content-center bg-light">
    @yield("content")
    </div>

</body>

</html>
