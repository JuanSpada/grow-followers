@extends('layouts.app')
@section('content')
<div class="row">

	<div class="col-xl-3 col-md-4 mb-2">
		<div class="card bg-success shadow h-100 py-2">
			<div class="card-body">
			<div class="row no-gutters align-items-center">
				<div class="col mr-2">
				<div class="text-xs font-weight-bold text-white text-uppercase mb-1">Clientes</div>
				<div class="h5 mb-0 font-weight-bold text-white">{{Auth::user()->cantidad()['clientes']}}</div>
				</div>
				<div class="col-auto">
				<i class="fas fa-calendar fa-2x text-gray-300"></i>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-md-4 mb-2">
		<div class="card bg-primary shadow h-100 py-2">
			<div class="card-body">
			<div class="row no-gutters align-items-center">
				<div class="col mr-2">
				<div class="text-xs font-weight-bold text-white text-uppercase mb-1">Activos</div>
				<div class="h5 mb-0 font-weight-bold text-white">{{Auth::user()->cantidad()['activo']}}</div>
				</div>
				<div class="col-auto">
				<i class="fas fa-calendar fa-2x text-gray-300"></i>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div class="col-xl-2 col-md-4 mb-2">
		<div class="card bg-info shadow h-100 py-2">
			<div class="card-body">
			<div class="row no-gutters align-items-center">
				<div class="col mr-2">
				<div class="text-xs font-weight-bold text-white text-uppercase mb-1">En Revisión</div>
				<div class="h5 mb-0 font-weight-bold text-white">{{Auth::user()->cantidad()['revision']}}</div>
				</div>
				<div class="col-auto">
				<i class="fas fa-calendar fa-2x text-gray-300"></i>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div class="col-xl-2 col-md-4 mb-2">
		<div class="card bg-secondary shadow h-100 py-2">
			<div class="card-body">
			<div class="row no-gutters align-items-center">
				<div class="col mr-2">
				<div class="text-xs font-weight-bold text-white text-uppercase mb-1">Inactivos</div>
				<div class="h5 mb-0 font-weight-bold text-white">{{Auth::user()->cantidad()['inactivo']}}</div>
				</div>
				<div class="col-auto">
				<i class="fas fa-calendar fa-2x text-gray-300"></i>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div class="col-xl-2 col-md-4 mb-2">
		<div class="card bg-warning shadow h-100 py-2">
			<div class="card-body">
			<div class="row no-gutters align-items-center">
				<div class="col mr-2">
				<div class="text-xs font-weight-bold text-white text-uppercase mb-1">Error en Validación</div>
				<div class="h5 mb-0 font-weight-bold text-white">{{Auth::user()->cantidad()['error']}}</div>
				</div>
				<div class="col-auto">
				<i class="fas fa-calendar fa-2x text-gray-300"></i>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
<table>
	<!-- On rows -->
			<table class="table table-striped table-dark">
				<div class="row">
					<div class="col-md-8">
						<form action="{{route ('backoffice')}}" class="pull-left" method="GET" role="search">
							<div class="form-group d-flex flex-col">
								<select class="form-control" name="assigned_to">
									<option disabled selected>Assigned To</option>
									@foreach ($droplets as $droplet)
										<option value="{{$droplet->id}}">{{$droplet->name}}</option>
									@endforeach
								</select>
								<select class="form-control" name="estado">
									<option disabled selected>Estado</option>
									<option value="0">Inactivo</option>
									<option value="1">Activo</option>
									<option value="3">En Revisión</option>
									<option value="4">Error en Activacion</option>
								</select>
								<div class="col-2 d-flex align-items-center align-content-center">
									<input type="checkbox" name="clientes" id="clientes">
									<label class="mb-0 ml-2" for="clientes">Mostrar Clientes</label>
								</div>
								<input name="user" class="form-control" type="text" placeholder="usuarioinstagram">
								<button class="btn btn-primary" type="submit">Buscar</button>
							</div>
						</form>
					</div>
				</div>
				<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Fecha</th>
					<th scope="col">Users</th>
					<th scope="col">Estado</th>
					<th scope="col">Nombre</th>
					<th scope="col">Email</th>
					<th scope="col">Usuario</th>
					<th scope="col">País</th>
					<th scope="col">Acción</th>
				</tr>
				</thead>
				<tbody>
					@foreach($users as $key => $user)
						@if($user->estado == 0)
							<tr class="bg-secondary">
								<th scope="row">{{$key+1}}</th>
								<td>{{$user->created_at->diffForHumans()}}</td>
								<td>{{$user->assigned_to}}</td>
								<td>{{$user->showEstado()}}</td>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->cuenta}}</td>
								<td>{{$user->pais}}</td>
								<td>
									<a class="text-white" href="{{ route('showUser', $user->id) }}">Editar</a>
								</td>
							</tr>
						@elseif($user->estado == 1)
							<tr class="bg-success">
								<th scope="row">{{$key+1}}</th>
								<td>{{$user->created_at->diffForHumans()}}</td>
								<td>{{$user->assigned_to}}</td>
								<td>{{$user->showEstado()}}</td>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->cuenta}}</td>
								<td>{{$user->pais}}</td>
								<td>
									<a class="text-white" href="{{ route('showUser', $user->id) }}">Editar</a>
								</td>
							</tr>
						@elseif($user->estado == 2)
							<tr class="bg-danger">
								<th scope="row">{{$key+1}}</th>
								<td>{{$user->created_at->diffForHumans()}}</td>
								<td>{{$user->assigned_to}}</td>
								<td>{{$user->showEstado()}}</td>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->cuenta}}</td>
								<td>{{$user->pais}}</td>
								<td>
									<a class="text-white" href="{{ route('showUser', $user->id) }}">Editar</a>
								</td>
							</tr>
						@elseif($user->estado == 3)
							<tr class="bg-info">
								<th scope="row">{{$key+1}}</th>
								<td>{{$user->created_at->diffForHumans()}}</td>
								<td>{{$user->assigned_to}}</td>
								<td>{{$user->showEstado()}}</td>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->cuenta}}</td>
								<td>{{$user->pais}}</td>
								<td>
									<a class="text-white" href="{{ route('showUser', $user->id) }}">Editar</a>
								</td>
							</tr>
						@elseif($user->estado == 4)
							<tr class="bg-warning">
								<th scope="row">{{$key+1}}</th>
								<td>{{$user->created_at->diffForHumans()}}</td>
								<td>{{$user->assigned_to}}</td>
								<td>{{$user->showEstado()}}</td>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->cuenta}}</td>
								<td>{{$user->pais}}</td>
								<td>
									<a class="text-white" href="{{ route('showUser', $user->id) }}">Editar</a>
								</td>
							</tr>
						@endif
					@endforeach
				</tbody>
			</table>
	</table>
		</div>
		{{ $users->links() }}
		<!-- /.container-fluid -->

@endsection
