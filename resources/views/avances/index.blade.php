@extends('layouts.investigador') 
@section('content')
 <h1 class="page-header">Avances</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Avances
        </div>
                        <!-- /.panel-heading -->
        <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Fecha</th>
                        <th>Proyecto</th>
                        <th>Avance</th>
                        
                    </tr>
                </thead>
                 
                <tbody>    
                    
                    @foreach($avances as $avances)
                    <tr>                        
                        <td>{{$avances->codigo}}</td>
                        <td>{{$avances->fecha}}</td>
                        <td>{{$avances->proyecto_nombre}}</td>                       
                        @if(!is_null($avances->avances))
                        <td><a href ="{{ asset ($avances->avances) }}"> Descargar</a></td>
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