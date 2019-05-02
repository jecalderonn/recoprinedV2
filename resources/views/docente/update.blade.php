@extends('layouts.docente') 
@section('content')
 <h1 class="page-header">Proyectos Docente</h1>
       <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Proyectos Activos
        </div>
                        <!-- /.panel-heading -->
        <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Titulo</th>
                        <th>Rama</th>
                        <th>Facultad</th>
                        <th>Programa</th>
                        <th>Ficha Evaluadora</th>
                        <th></th>
                    </tr>
                </thead>
                 
                <tbody>    
                   
                    <tr>
                        <td>Presencial</td>
                        <td>10</td>
                        <td>Ingenieria de Sistemas</td>
                        <td>3.8</td>
                        <td>20/08/2008</td>
                        <td>
                        <form  action="/Avanzadas/Examen/public/estudios">
                         <!-- <input type="hidden" name="_method" value="DELETE">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                        
                         <button type="submit" class="btn btn-warning btn-circle">
                            <i class='fa fa-times'></i>
                            </button></input></input>
                         </form>

                        </td>
                    </tr>
                    <tr>
                        <td>Distancia</td>
                        <td>2</td>
                        <td>Tecnico en Diseño</td>
                        <td>4.4</td>
                        <td>26/11/2009</td>
                        <td>
                        <form  action="/Avanzadas/Examen/public/estudios">
                        <!--  <input type="hidden" name="_method" value="DELETE">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                        
                         <button type="submit" class="btn btn-warning btn-circle">
                            <i class='fa fa-times'></i>
                            </button></input></input>
                         </form>

                        </td>
                    </tr>
                   
                </tbody>
               
             </table>
              </div>
        </div>
    </div>
</div>
@endsection