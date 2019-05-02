<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Response;
use Illuminate\Http\Request;

class JuradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $jurado =  DB::table('jurado')
        ->leftJoin('proyecto_aprobado','jurado.codigo','=','proyecto_aprobado.jurado_codigo')
        ->leftJoin('anexo','proyecto_aprobado.codigo', '=', 'anexo.proyecto_codigo')
        ->leftJoin('avances','proyecto_aprobado.codigo', '=', 'avances.proyecto_codigo')
        ->leftJoin('ficha_evaluadora','proyecto_aprobado.codigo', '=', 'ficha_evaluadora.proyecto_codigo')
        ->leftJoin('investigador','proyecto_aprobado.investigador_codigo', '=', 'investigador.codigo')
        ->select('jurado.*', 'proyecto_aprobado.codigo as proyecto_codigo','proyecto_aprobado.titulo as proyecto_nombre', 'anexo.anexo as anexo','avances.avances as avances', 'ficha_evaluadora.ficha as ficha','proyecto_aprobado.facultad_codigo as facultad')
        ->where('jurado.codigo', '=', '125261')
        ->get();

        return view('jurado.index', compact('jurado'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $proyecto = \App\proyecto::All();
        return view('jurado.create',compact('proyecto'));

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

        \App\evaluacion::create([
            'codigo' => $request['codigo'],
            'proyecto_codigo' => $request['proyecto'],
            'ficha' => $path,
            ]);

        return redirect('/jurado')->with('message', 'store');
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
