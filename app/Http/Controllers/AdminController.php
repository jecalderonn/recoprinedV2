<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Response;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $proyecto =  DB::table('proyecto_aprobado')
        ->leftJoin('anexo','proyecto_aprobado.codigo', '=', 'anexo.proyecto_codigo')
        ->leftJoin('avances','proyecto_aprobado.codigo', '=', 'avances.proyecto_codigo')
        ->leftJoin('ficha_evaluadora','proyecto_aprobado.codigo', '=', 'ficha_evaluadora.proyecto_codigo')
        ->leftJoin('investigador','proyecto_aprobado.investigador_codigo', '=', 'investigador.codigo')
        ->leftJoin('jurado','proyecto_aprobado.jurado_codigo', '=', 'jurado.codigo')
        ->leftJoin('facultad','proyecto_aprobado.facultad_codigo', '=', 'facultad.codigo')
        ->select('proyecto_aprobado.*', 'anexo.anexo as anexos','avances.avances as avances', 'ficha_evaluadora.ficha as ficha', 'investigador.nombre as investigador_nombre', 'jurado.nombre as jurado_nombre', 'facultad.nombre as facultad')
        ->get();

        return view('admin.index', compact('proyecto'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jurado = \App\jurado::All();
        return view('admin.create',compact('jurado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
