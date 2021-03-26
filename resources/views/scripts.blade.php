@extends('layouts.app')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="text-center m-0 font-weight-bold text-primary">Activos: {{$users['activo']}} | Inactivos: {{$users['inactivo']}} | Prueba Finalizada: {{$users['prueba']}} | Revisión: {{$users['revision']}} | Error: {{$users['error']}}</h6>
    </div>
<div>
<div class="row">
    <div class="col m-5">
        <p>Mis Usuarios Activos:</p>
        <ol>
            @foreach ($users['users'] as $user)
            {{-- @dd($user->assigned_to.' '.Auth::user()->id) --}}
                @if($user->estado == 1 && $user->assigned_to == Auth::user()->id)
                    <li>
                        <p>User: {{$user->name}}</p>
                        <input class="form-control" type="text" disabled value="python {{$user->cuenta}}.py">
                    </li>    
                @endif
            @endforeach
        </ol>
    </div>
</div>

@endsection
