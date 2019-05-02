@extends('layouts.jurado')
@section('content')
<section class="content-header">
	<h1>
		Registrar Ficha
		
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Usuario</a></li>
		<li claavancesveproyecto_">Registrar Ficha</proyecto_li>
	</ol>
</section>
<section class="content container-fluid">
	<div class="box box-warning">
            
            <!-- /.box-header -->

            
            <div class="box-body">
              	{!!Form::open(['route'=>'jurado.store', 'method'=>'POST', 'files'=> true])!!}

          <div class="form-group">
            <label for="proyecto">Proyecto</label>
         
               <select  class="form-control" id="proyecto" name="proyecto">
                  @foreach($proyecto as $proyecto)
                  <option value="{{$proyecto->codigo}}">{{$proyecto->codigo}}--{{$proyecto->titulo}}</option>  
                  @endforeach
               </select>
       
          </div>
					<div class="form-group">
					<label for="codigo">Codigo</label><input type="number" name="codigo" id="codigo" class="form-control" placeholder="Ingrese el codigo del avance">
					</div>
					</div>
					<div class="form-grou
					
					
					<div class="form-group">
						
					<label for="url">Ficha</label><input id="url" type="file" name="url" class="form-control" placeholder="Subir archivo de anexo">
					
            	</div>
                <input type="submit" value="Registrar" class="btn btn-success"></input>
				{!!Form::close()!!}

              
            </div>
            <!-- /.box-body -->
          </div>
</section>

@endsection