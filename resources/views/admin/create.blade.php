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
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Direccion</th>                        
                    </tr>
                </thead>
                 
                <tbody>    
                    
                    @foreach($jurado as $proyecto)
                    <tr>                        
                        <td>{{$proyecto->codigo}}</td>
                        <td>{{$proyecto->documento}}</td>
                        <td>{{$proyecto->nombre   }}</td>
                        <td>{{$proyecto->direccion  }}</td>
                        
                     

                    </tr>
                     
                     @endforeach
                </tbody>
               
             </table>
              </div>
        </div>
    </div>
</div>
@endsection