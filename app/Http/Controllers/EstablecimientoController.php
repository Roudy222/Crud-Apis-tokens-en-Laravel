<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostEstablecimiento;
use App\Models\Establecimiento;
use Illuminate\Http\Request;

class EstablecimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(
            [
                'mensaje' => 'Listado de establecimientos',
                'establecimientos' => Establecimiento::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostEstablecimiento $request)
    {
        //
        $establecimiento = Establecimiento::create($request->all());
        return response()->json(
            [
                'mensaje' => 'Establecimiento creado',
                'establecimiento' => $establecimiento
            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Establecimiento $establecimiento)
    {
        //
        return response()->json(
            [
                'mensaje' => 'Detalle del establecimiento',
                'establecimiento' => $establecimiento
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Establecimiento $establecimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Establecimiento $establecimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Establecimiento $establecimiento)
    {
        //
        $establecimiento->delete();
        return response()->json(
            [
                'mensaje' => 'Establecimiento eliminado',
                'establecimiento' => $establecimiento
            ]
        );
    }
}
