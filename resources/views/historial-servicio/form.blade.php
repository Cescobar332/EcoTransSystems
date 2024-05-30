<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $historialServicio?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hora" class="form-label">{{ __('Hora') }}</label>
            <input type="text" name="hora" class="form-control @error('hora') is-invalid @enderror" value="{{ old('hora', $historialServicio?->hora) }}" id="hora" placeholder="Hora">
            {!! $errors->first('hora', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="rol" class="form-label">{{ __('Rol') }}</label>
            <input type="text" name="rol" class="form-control @error('rol') is-invalid @enderror" value="{{ old('rol', $historialServicio?->rol) }}" id="rol" placeholder="Rol">
            {!! $errors->first('rol', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ubicacion_destino" class="form-label">{{ __('Ubicacion Destino') }}</label>
            <input type="text" name="ubicacion_destino" class="form-control @error('ubicacion_destino') is-invalid @enderror" value="{{ old('ubicacion_destino', $historialServicio?->ubicacion_destino) }}" id="ubicacion_destino" placeholder="Ubicacion Destino">
            {!! $errors->first('ubicacion_destino', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ubicacion_llegada" class="form-label">{{ __('Ubicacion Llegada') }}</label>
            <input type="text" name="ubicacion_llegada" class="form-control @error('ubicacion_llegada') is-invalid @enderror" value="{{ old('ubicacion_llegada', $historialServicio?->ubicacion_llegada) }}" id="ubicacion_llegada" placeholder="Ubicacion Llegada">
            {!! $errors->first('ubicacion_llegada', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="peso_paquete" class="form-label">{{ __('Peso Paquete') }}</label>
            <input type="text" name="peso_paquete" class="form-control @error('peso_paquete') is-invalid @enderror" value="{{ old('peso_paquete', $historialServicio?->peso_paquete) }}" id="peso_paquete" placeholder="Peso Paquete">
            {!! $errors->first('peso_paquete', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="valor_paquete" class="form-label">{{ __('Valor Paquete') }}</label>
            <input type="text" name="valor_paquete" class="form-control @error('valor_paquete') is-invalid @enderror" value="{{ old('valor_paquete', $historialServicio?->valor_paquete) }}" id="valor_paquete" placeholder="Valor Paquete">
            {!! $errors->first('valor_paquete', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>