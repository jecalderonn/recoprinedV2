@extends('layouts.investigador') 
@section('content')
 <h1 class="page-header">Anexo</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Anexo
        </div>
                        <!-- /.panel-heading -->
        <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Fecha</th>
                        <th>Descripcion</th>
                        <th>Proyecto</th>
                        <th>Anexo</th>
                        
                    </tr>
                </thead>
                 
                <tbody>    
                    
                    @foreach($anexo as $anexo)
                    <tr>                        
                        <td>{{$anexo->codigo}}</td>
                        <td>{{$anexo->fecha}}</td>
                        
                        
                        
                        <td>{{$anexo->descripcion}}</td>
                        <td>{{$anexo->proyecto_nombre}}</td>
                                             
                        @if(!is_null($anexo->anexo))
                        <td><a href ="{{ asset ($anexo->anexo) }}"> Descargar</a></td>
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