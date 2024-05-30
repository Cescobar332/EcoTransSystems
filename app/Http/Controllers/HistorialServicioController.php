<?php

namespace App\Http\Controllers;

use App\Models\HistorialServicio;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\HistorialServicioRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class HistorialServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $historialServicios = HistorialServicio::paginate();

        return view('historial-servicio.index', compact('historialServicios'))
            ->with('i', ($request->input('page', 1) - 1) * $historialServicios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $historialServicio = new HistorialServicio();

        return view('historial-servicio.create', compact('historialServicio'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HistorialServicioRequest $request): RedirectResponse
    {
        HistorialServicio::create($request->validated());

        return Redirect::route('historial-servicios.index')
            ->with('success', 'HistorialServicio created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $historialServicio = HistorialServicio::find($id);

        return view('historial-servicio.show', compact('historialServicio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $historialServicio = HistorialServicio::find($id);

        return view('historial-servicio.edit', compact('historialServicio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HistorialServicioRequest $request, HistorialServicio $historialServicio): RedirectResponse
    {
        $historialServicio->update($request->validated());

        return Redirect::route('historial-servicios.index')
            ->with('success', 'HistorialServicio updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        HistorialServicio::find($id)->delete();

        return Redirect::route('historial-servicios.index')
            ->with('success', 'HistorialServicio deleted successfully');
    }
}
