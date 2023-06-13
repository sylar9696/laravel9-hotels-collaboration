@extends( 'layout.app' )

@section('titlePage')
    Laravel App | Books
@endsection

@section( 'content' )

<h1>Pagina Books</h1>

<!-- Inserirò il ciclo dei dati dei libbri -->

@foreach( $books as $elem )
    <h2>{{ $elem['title'] }}</h2>
@endforeach

@endSection
