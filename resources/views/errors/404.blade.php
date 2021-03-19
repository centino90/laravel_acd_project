@extends("layouts.error")
@section('content')

   <div class="container col-md-5">
    
    <header class="mb-3">Oooops!. You've landed on the wrong page</header>

    <section>
        <h5>You can go back by clicking this <a href="{{ route('event.index') }}">link</a></h5>
    </section>
    
   </div>

@endsection
