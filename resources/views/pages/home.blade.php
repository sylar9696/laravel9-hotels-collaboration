@extends( 'layout.app' )

@section('titlePage')
    Laravel App | Home
@endsection

@section( 'content' )

<h1>Pagina Home</h1>

{{-- @php dd($hotels)  @endphp --}}

@foreach( $hotels as $elem )
    <h2>{{$elem->nome_hotel}}</h2>
@endforeach


@endsection
