@extends ('app')

@section('title', 'Services')

@section('content')
    <h1>Welcome to Services Page</h1>

    <ul>
        @forelse($services as $service)


        <li>{{ dd($service) }}</li>


        @empty
           <!--  <li>No Services at this Time </li> -->
        @endforelse
    </ul>


@endsection
