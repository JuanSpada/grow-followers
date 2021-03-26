@extends('layouts.app')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2 class="text-center text-primary">Droplets Digital Ocean</h2>
    </div>
<div>
<div class="row d-flex justify-content-center">
    <div class="col-3">
        <form class="mt-3" action="{{route ('adddroplet')}}" method="POST">
            @csrf
            <h3 class="text-center text-primary">Cargar New Droplet:</h3>
            <div class="form-group">
                <label for="">Name:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Ip:</label>
                <input type="text" name="ip" id="ip" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Cargar</button>
        </form>
    </div>
</div>
<div class="row d-flex justify-content-center">
    <div class="col">
        <hr>
        <h3 class="text-center text-primary">Droplets:</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Ip</th>
                <th scope="col">Cantidad de Usuarios</th>
                <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($droplets as $droplet)
                <tr>
                    <th scope="row">{{$droplet->id}}</th>
                    <td>{{$droplet->name}}</td>
                    <td>{{$droplet->ip}}</td>
                    <td>Cantidad</td>
                    <td>
                        <form action="{{route ('deletedroplet')}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" id="id" value="{{$droplet->id}}">
                            <button class="btn" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
    </div>
</div>

@endsection
