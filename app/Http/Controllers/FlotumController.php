<?php

namespace App\Http\Controllers;

use App\Models\Flotum;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\FlotumRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FlotumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $flota = Flotum::paginate();

        return view('flotum.index', compact('flota'))
            ->with('i', ($request->input('page', 1) - 1) * $flota->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $flotum = new Flotum();

        return view('flotum.create', compact('flotum'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FlotumRequest $request): RedirectResponse
    {
        Flotum::create($request->validated());

        return Redirect::route('flotum.index')
            ->with('success', 'Flotum created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $flotum = Flotum::find($id);

        return view('flotum.show', compact('flotum'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $flotum = Flotum::find($id);

        return view('flotum.edit', compact('flotum'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FlotumRequest $request, Flotum $flotum): RedirectResponse
    {
        $flotum->update($request->validated());

        return Redirect::route('flota.index')
            ->with('success', 'Flotum updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Flotum::find($id)->delete();

        return Redirect::route('flota.index')
            ->with('success', 'Flotum deleted successfully');
    }
}
