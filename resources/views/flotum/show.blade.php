@extends('layouts.app')

@section('template_title')
    {{ $flotum->name ?? __('Show') . " " . __('Flotum') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Flotum</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('flotum.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $flotum->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hora:</strong>
                                    {{ $flotum->hora }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo:</strong>
                                    {{ $flotum->tipo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $flotum->estado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Asignado:</strong>
                                    {{ $flotum->id_asignado }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
