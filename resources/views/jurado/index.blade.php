@extends('layouts.jurado') 
@section('content')
 <h1 class="page-header">Proyectos</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Proyectos
        </div>
                        <!-- /.panel-heading -->
        <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Titulo</th>
                        <th>Facultad</th>
                        <th>Anexos</th>
                        <th>Avances</th>
                        <th>Ficha Evaluadora</th>
                        
                    </tr>
                </thead>
                 
                <tbody>    
                    
                    @foreach($jurado as $jurado)
                    <tr>                        
                        <td>{{$jurado->proyecto_codigo}}</td>
                        <td>{{$jurado->proyecto_nombre}}</td>
                        
                        @if($jurado->facultad== '1')
                        <td>Ingenieria</td>
                        @endif
                        @if($jurado->facultad == '2')
                        <td>Ciencias de la Salud</td>
                        @endif
                        @if($jurado->facultad == '3')
                        <td>Ciencias Agrarias</td>
                        @endif
                        @if($jurado->facultad == '4')
                        <td>Ciencias Basicas</td>
                        @endif
                        @if($jurado->facultad == '5')
                        <td>Ciencias Empresariales</td>
                        @endif
                        @if($jurado->facultad == '6')
                        <td>Educacion, Artes y Humanidades</td>
                        @endif
                        @if(!is_null($jurado->anexo))
                        <td><a href ="{{ asset ($jurado->anexo) }}"> Descargar</a></td>
                        @endif
                        @if(!is_null($jurado->avances))
                        <td><a href ="{{ asset ($jurado->avances) }}"> Descargar</a></td>
                        @endif                      
                        @if(!is_null($jurado->ficha))
                        <td><a href ="{{ asset ($jurado->ficha) }}"> Descargar</a></td>
                        @endif
                        

                    </tr>
                     
                     @endforeach
                </tbody>
               
             </table>
              </div>
        </div>
    </div>
</div>
@endsection