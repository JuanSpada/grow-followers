@extends('layouts.app')
@section('content')
<div id="panel-inicio" class="panel panel-default">
        <div class="card text-center">
                <div class="card-header bg-primary">
                    <p class="text-white pt-3">Sistema de Crecimiento para <strong>Instagram</strong>.</p>
                </div>
                <div id="card-body" class="card-body">
                    <h3 class="card-title text-success">¡Pago Confirmado!</h3>
                    <div class="d-flex justify-content-center">
                        <a href="{{route ('configurar')}}">
                            <i class="fas fa-clipboard-check" style="font-size:4.5em"></i>
                        </a>
                    </div>
                    <p class="card-text mt-2">Hola, {{Auth::user()->name}} vincula tu cuenta con <strong>Instagram</strong>, <a href="{{route ('configurar')}}">haciendo click acá</a> para que el sistema empiece a funcionar.</p>
                    <p>Muchas gracias, Equipo MásFollows.</p>
                    <p class="text-primary">info@masfollows.com</p>
                </div>
                <div class="card-footer text-muted bg-primary">
                    <p class="mt-3 text-white">¡Potencia tu <strong>Instagram</strong> de manera orgánica!</p>
                </div>
            </div>
        </div>
@endsection