@extends('layouts.investigador')
@section('content')
<h1 class="page-header">Proyectos Investigador</h1>
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
                        <th>Nombre</th>
                        <th>Proyecto</th>
                        <th>Anexo</th>
                        <th>Avances</th>

                        
                    </tr>
                </thead>
                 
                <tbody>    
                    
                    @foreach($investigador as $investigador)
                    <tr>                        
                        <td>{{$investigador->proyecto_codigo}}</td>
                        <td>{{$investigador->proyecto_nombre}}</td>                      
                        @if(!is_null($investigador->proyecto))
                        <td><a href ="{{ asset ($investigador->proyecto) }}"> Descargar</a></td>
                        @endif
                        @if(!is_null($investigador->anexo))
                        <td><a href ="{{ asset ($investigador->anexo) }}"> Descargar</a></td>
                        @endif                       
                        @if(!is_null($investigador->avances))
                        <td><a href ="{{ asset ($investigador->avances  ) }}"> Descargar</a></td>
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