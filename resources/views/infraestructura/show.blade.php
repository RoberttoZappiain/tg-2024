@extends('welcome')

@section('content')
    <div class="container">
        <h1>{{ $producto->nombre_kit }}</h1>
        <p>{{ $producto->descripcion }}</p>
        <img src="{{ asset($producto->url_img_1) }}" alt="{{ $producto->nombre_kit }}">
        <!-- Agregar más detalles del producto -->
    </div>
@endsection
