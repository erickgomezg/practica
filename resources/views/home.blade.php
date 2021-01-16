@extends('layouts.app')

@section('content')
<div class="container">
    <div id="Boton_inicio">
        <a href=" {{ route('Calculadora') }}">Calculadora</a>
    </div>
    <div id="Boton_inicio">
        <a href="#">Organizador</a>
    </div>
    <div id="Boton_inicio">
        <a href="#">Directorio</a>
    </div>
    <div id="Boton_inicio">
        <a href="#">Tienda Online</a>
    </div>
</div>
@endsection
