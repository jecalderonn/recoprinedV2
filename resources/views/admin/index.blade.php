@extends('layouts.admin') 
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
                        <th>Jurado</th>
                        <th>Investigador</th>
                        <th>Facultad</th>
                        <th>Proyecto</th>
                        <th>Anexos</th>
                        <th>Avances</th>
                        <th>Ficha Evaluadora</th>
                        
                        
                    </tr>
                </thead>
                 
                <tbody>    
                    
                    @foreach($proyecto as $proyecto)
                    <tr>                        
                        <td>{{$proyecto->codigo}}</td>
                        <td>{{$proyecto->titulo}}</td>
                        <td>{{$proyecto->jurado_nombre   }}</td>
                        <td>{{$proyecto->investigador_nombre   }}</td>
                        <td>{{$proyecto->facultad   }}</td>

                        @if(!is_null($proyecto->proyecto))
                        <td><a href ="{{ asset ($proyecto->proyecto) }}"> Descargar</a></td>
                        @endif</td>
                       
                        @if(!is_null($proyecto->anexos))
                        <td><a href ="{{ asset ($proyecto->anexos) }}"> Descargar</a></td>
                        @endif
                        @if(!is_null($proyecto->avances))
                        <td><a href ="{{ asset ($proyecto->avances) }}"> Descargar</a></td>
                        @endif                      
                        @if(!is_null($proyecto->ficha))
                        <td><a href ="{{ asset ($proyecto->ficha) }}"> Descargar</a></td>
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