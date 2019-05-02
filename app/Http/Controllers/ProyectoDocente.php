<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoDocente extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $investigador =  DB::table('investigador')
        ->leftJoin('proyecto','investigador.codigo','=','proyecto.investigador_codigo')
        ->leftJoin('anexo','proyecto.codigo', '=', 'anexo.proyecto_codigo')
        ->leftJoin('avances','proyecto.codigo', '=', 'avances.proyecto_codigo')
        ->leftJoin('ficha_evaluadora','proyecto.codigo', '=', 'ficha_evaluadora.proyecto_codigo')
        ->leftJoin('docente','proyecto.docente_codigo', '=', 'docente.codigo')
        ->leftJoin('jurado','proyecto.jurado_codigo', '=', 'jurado.codigo')
        ->select('investigador.*', 'proyecto.codigo as proyecto_codigo','proyecto.titulo as proyecto_nombre', 'anexo.anexo as anexo','avances.avances as avances', 'ficha_evaluadora.ficha as ficha', 'docente.nombre as docente_nombre', 'proyecto.facultad_codigo as facultad', 'jurado.nombre as jurado_nombre')
        ->where('investigador.codigo', '=', '1151229')
        ->get();

        return view('investigador.index', compact('investigador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
