<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Response;
use Illuminate\Http\Request;

class AnexoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $anexo =  DB::table('anexo')
        ->leftJoin('proyecto','anexo.proyecto_codigo','=','proyecto.codigo')
        ->leftJoin('investigador','proyecto.investigador_codigo','=','investigador.codigo')
        ->select('anexo.*','proyecto.titulo as proyecto_nombre', 'investigador.codigo as investigador_codigo')
        ->where('investigador.codigo', '=', '1151229')
        ->get();

        return view('anexo.index', compact('anexo'));

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
        return view('anexo.create',compact('proyecto'));
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

        \App\anexo::create([
            'codigo' => $request['codigo'],
            'descripcion' => $request['descripcion'],
            'proyecto_codigo' => $request['proyecto'],
            'anexo' => $path,
            ]);


        return redirect('/anexo')->with('message', 'store');

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
