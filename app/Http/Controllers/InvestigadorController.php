<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Response;
use Illuminate\Http\Request;

class InvestigadorController extends Controller
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
        ->select('investigador.*', 'proyecto.codigo as proyecto_codigo','proyecto.titulo as proyecto_nombre', 'anexo.anexo as anexo','avances.avances as avances', 'ficha_evaluadora.ficha as ficha', 'proyecto.facultad_codigo as facultad', 'proyecto.proyecto as proyecto')
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
        $docente = \App\docente::All();
        $investigador = \App\investigador::All();
        $facultad = \App\facultad::All();
        $jurado = \App\jurado::All();
        return view('investigador.create',compact('docente','investigador','facultad','jurado'));


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

        $ruta = 'proyectos';
        
        $path = $request -> file('url') -> store($ruta);

        \App\proyecto::create([
            'codigo' => $request['codigo'],
            'titulo' => $request['titulo'],
            'rama' => $request['rama'],
            'facultad_codigo' => $request['facultad'],
            'proyecto' => $path,
            'investigador_codigo' => $request['investigador'],
            ]);


        return redirect('/investigador')->with('message', 'store');
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
        $investigador =  DB::table('investigador')
        ->leftJoin('proyecto','investigador.codigo','=','proyecto.investigador_codigo')
        ->leftJoin('anexo','proyecto.codigo', '=', 'anexo.proyecto_codigo')
        ->leftJoin('avances','proyecto.codigo', '=', 'avances.proyecto_codigo')
        ->leftJoin('ficha_evaluadora','proyecto.codigo', '=', 'ficha_evaluadora.proyecto_codigo')
        ->select('investigador.*', 'proyecto.codigo as proyecto_codigo','proyecto.titulo as proyecto_nombre', 'anexo.anexo as anexo','avances.avances as avances', 'ficha_evaluadora.ficha as ficha', 'proyecto.facultad_codigo as facultad')
        ->where('investigador.codigo', '=', '1151229')
        ->get();

        return view('investigador.index', compact('investigador'));
        
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
