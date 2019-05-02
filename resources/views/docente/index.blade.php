@extends('layouts.docente') 
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
                        
                        <th>Investigador</th>
                        <th>Facultad</th>
                        <th>Proyecto</th>
                        <th>Anexos</th>
                        <th>Avances</th>
                        <th>Ficha Evaluadora</th>
                        
                        
                    </tr>
                </thead>
                 
                <tbody>    
                    
                    @foreach($docente as $docente)
                    <tr>                        
                        <td>{{$docente->proyecto_codigo}}</td>
                        <td>{{$docente->proyecto_nombre}}</td>
                        
                        <td>{{$docente->investigador_nombre   }}</td>
                        
                        @if($docente->facultad== '1')
                        <td>Ingenieria</td>
                        @endif
                        @if($docente->facultad == '2')
                        <td>Ciencias de la Salud</td>
                        @endif
                        @if($docente->facultad == '3')
                        <td>Ciencias Agrarias</td>
                        @endif
                        @if($docente->facultad == '4')
                        <td>Ciencias Basicas</td>
                        @endif
                        @if($docente->facultad == '5')
                        <td>Ciencias Empresariales</td>
                        @endif
                         @if($docente->facultad == '6')
                        <td>Educacion, Artes y Humanidades</td>
                        @endif

                        @if(!is_null($docente->proyecto_url))
                        <td><a href ="{{ asset ($docente->proyecto_url) }}"> Descargar</a></td>
                        @endif</td>
                       
                        @if(!is_null($docente->anexos))
                        <td><a href ="{{ asset ($docente->anexos) }}"> Descargar</a></td>
                        @endif
                        @if(!is_null($docente->avances))
                        <td><a href ="{{ asset ($docente->avances) }}"> Descargar</a></td>
                        @endif                      
                        @if(!is_null($docente->ficha))
                        <td><a href ="{{ asset ($docente->ficha) }}"> Descargar</a></td>
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