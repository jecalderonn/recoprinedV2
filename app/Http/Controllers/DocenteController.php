<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Response;

use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
       $docente =  DB::table('docente')
        ->leftJoin('proyecto_aprobado','docente.codigo','=','proyecto_aprobado.docente_codigo')
        ->leftJoin('proyecto','proyecto_aprobado.codigo','=','proyecto.codigo')
        ->leftJoin('anexo','proyecto_aprobado.codigo', '=', 'anexo.proyecto_codigo')
        ->leftJoin('avances','proyecto_aprobado.codigo', '=', 'avances.proyecto_codigo')
        ->leftJoin('ficha_evaluadora','proyecto_aprobado.codigo', '=', 'ficha_evaluadora.proyecto_codigo')
        ->leftJoin('investigador','proyecto_aprobado.investigador_codigo', '=', 'investigador.codigo')
        ->select('docente.*', 'proyecto_aprobado.codigo as proyecto_codigo','proyecto_aprobado.titulo as proyecto_nombre', 'anexo.anexo as anexos','avances.avances as avances', 'ficha_evaluadora.ficha as ficha', 'investigador.nombre as investigador_nombre', 'proyecto_aprobado.facultad_codigo as facultad', 'proyecto_aprobado.proyecto as proyecto_url')
        ->where('docente.codigo', '=', '1151721')
        ->get();

        return view('docente.index', compact('docente'));
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
         return view('docente.index');
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
