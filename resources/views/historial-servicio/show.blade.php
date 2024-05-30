@extends('layouts.app')

@section('template_title')
    {{ $historialServicio->name ?? __('Show') . " " . __('Historial Servicio') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Historial Servicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('historial-servicios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $historialServicio->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hora:</strong>
                                    {{ $historialServicio->hora }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Rol:</strong>
                                    {{ $historialServicio->rol }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ubicacion Destino:</strong>
                                    {{ $historialServicio->ubicacion_destino }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ubicacion Llegada:</strong>
                                    {{ $historialServicio->ubicacion_llegada }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Peso Paquete:</strong>
                                    {{ $historialServicio->peso_paquete }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Valor Paquete:</strong>
                                    {{ $historialServicio->valor_paquete }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
