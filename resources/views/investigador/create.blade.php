@extends('layouts.investigador')
@section('content')
<h1 class="page-header">Registrar Proyecto</h1>

	<div class="box box-warning">
            
            <!-- /.box-header -->
            <div class="box-body">
              	{!!Form::open(['route'=>'investigador.store', 'method'=>'POST', 'files'=> true])!!}
					<div class="form-group">
					<label for="codigo">Codigo</label><input type="number" name="codigo" id="codigo" class="form-control" placeholder="Ingrese el codigo del proyecto">
					</div>

					<div class="form-group">
					<label for="titulo">Titulo</label><input id="titulo" name="titulo" class="form-control" placeholder="Ingrese la titulo del proyecto">
					</div>
					<div class="form-group">
					<label for="rama">Rama</label><input id="rama" name="rama" class="form-control" placeholder="Ingrese el rama del proyecto">
					</div>
					
					<div class="form-group">
    				<label for="facultad">Facultad</label>
         
       				 <select  class="form-control" id="facultad" name="facultad">
            			@foreach($facultad as $facultad)
            			<option value="{{$facultad->codigo}}">{{$facultad->codigo}}--{{$facultad->nombre}}</option>	
            		 	@endforeach
       				 </select>
       
					</div>
					<div class="form-group">
    				<label for="investigador">Investigador</label>
         
       				 <select  class="form-control" id="investigador" name="investigador">
            			@foreach($investigador as $investigador)
            			<option value="{{$investigador->codigo}}">{{$investigador->codigo}}--{{$investigador->	nombre}}</option>	
            		 	@endforeach
       				 </select>
       
					</div>
					<div class="form-group">
						
					<label for="url">Proyecto</label><input id="url" type="file" name="url" class="form-control" placeholder="Subir archivo de proyecto">
					
            	</div>
                <input type="submit" value="Registrar" class="btn btn-success"></input>
				{!!Form::close()!!}

              
            </div>
            <!-- /.box-body -->
          </div>


@endsection