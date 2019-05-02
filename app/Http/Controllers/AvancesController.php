<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Response;
use Illuminate\Http\Request;

class AvancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        //
        $avances =  DB::table('avances')
        ->leftJoin('proyecto','avances.proyecto_codigo','=','proyecto.codigo')
        ->leftJoin('investigador','proyecto.investigador_codigo','=','investigador.codigo')
        ->select('avances.*','proyecto.titulo as proyecto_nombre', 'investigador.codigo as investigador_codigo', 'proyecto.codigo as codigo_proyecto')
        ->where('investigador.codigo', '=', '1151229')
        ->get();

        return view('avances.index', compact('avances'));
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
        return view('avances.create',compact('proyecto'));
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

        \App\avances::create([
            'codigo' => $request['codigo'],
            'proyecto_codigo' => $request['proyecto'],
            'avances' => $path,
            ]);

        return redirect('/avances')->with('message', 'store');
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
