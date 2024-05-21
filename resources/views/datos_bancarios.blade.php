<!-- resources/views/datos_bancarios.blade.php -->

@extends('layouts.app')

@section('content')
<main id="main">
    <div class="container mt-5">
        <h2>Datos Bancarios</h2>
        <p>Por favor, introduce tus datos bancarios:</p>
        <form action="{{ route('procesar_pago') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre completo:</label>
                <input type="text" id="nombre" name="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="numero_cuenta">Número de cuenta:</label>
                <input type="text" id="numero_cuenta" name="numero_cuenta" class="form-control">
            </div>
            <div class="form-group">
                <label for="banco">Banco:</label>
                <input type="text" id="banco" name="banco" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Pagar</button>
        </form>
    </div>
</main>
@endsection
