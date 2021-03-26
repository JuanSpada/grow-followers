@extends('layouts.app')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Usuario: {{$user->name}} | Email: {{$user->email}} || Fecha: {{$user->created_at->diffForHumans()}} || País: {{$user->pais}}</h6>
    </div>
    <div class="row">
        <div class="col ml-3">
            <form action="{{route ('editEstado', $user->id)}}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="estado">Cambiar Estado: {{$user->showEstado()}}</label>
                    <select class="form-control" name="estado" id="estado">
                        <option disabled selected>Cambiar Estado</option>
                        <option value="0">Inactivo</option>
                        <option value="1">Activo</option>
                        <option value="3">En Revisión</option>
                        <option value="4">Error en la Validación</option>
                    </select>
                    <label for="assigned_to">Assigned to: {{$user->showAssignedTo()}}</label>
                    <select class="form-control" name="assigned_to" id="assigned_to">
                        <option disabled selected>Asignar a</option>
                        @foreach ($droplets as $droplet)
                            <option value="{{$droplet->id}}">{{$droplet->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit">EDITAR</button>
                </div>
            </form>
            <p>Nombre de Usuario: {{ $user->cuenta }}</p>
            <p>Contraseña: {{ $user->igpassword }}</p>
            <div class="row">
                <div class="col">
                    <p>Referencias:</p>
                    <ul>
                        <li>{{ $user->referencia1 }}</li>
                        <li>{{ $user->referencia2 }}</li>
                        <li>{{ $user->referencia3 }}</li>
                        <li>{{ $user->referencia4 }}</li>
                        <li>{{ $user->referencia4 }}</li>
                    </ul>
                </div>
                <div class="col">
                    <p>Hashtags:</p>
                    <ul>
                        <li>{{ $user->hashtag1 }}</li>
                        <li>{{ $user->hashtag2 }}</li>
                        <li>{{ $user->hashtag3 }}</li>
                        <li>{{ $user->hashtag4 }}</li>
                        <li>{{ $user->hashtag4 }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col">
            {{-- <a href="{{route ('alta', $user->id)}}">Alta Usuario</a> --}}
            <a href="{{route ('userDelete', $user->id)}}">Eliminar Usuario</a>
            @if($user->cliente)
                <div>
                    <a href="{{route ('baja', $user->id)}}">Baja Cliente</a>
                </div>
            @endif
            <p>Estado: {{ $user->showEstado() }} || Assigned To: {{ $user->showAssignedTo() }}</p>
            <p>Ubicaciónes: {{ $user->customizations()[0]->ubicaciones }}</p>
            <p>Mensaje Directo: {{ $user->customizations()[0]->md }}</p>
            <p>Quiere Likes? {{ $user->customizations()[0]->likes }}</p>
            <p>Skip Private? {{ $user->customizations()[0]->private }}</p>
            <p>Comentarios? {{ $user->customizations()[0]->comment }}</p>
            <p>Seguir y Dejar de Seguir? {{ $user->customizations()[0]->follow }}</p>
        </div>
    </div>
<div>

@endsection
