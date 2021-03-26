@extends('layouts.app')

@section('content')


<div class="panel panel-default m-3">

    <h4 class="text-center text-primary">Configura el Sistema</h4>

    <form class="text-white" action="{{ route('update') }}" method="POST">
        @csrf
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5 m-1 col-md-12 p-3 bg-primary rounded">
                <div class="form-grup">
                    <label for=""><strong>Usuario De Instagram:</strong></label>
                    <p class="text-white">Tiene que ser el nombre de usuario (@nombredeusuario) de la cuenta que quieres aumentar el crecimiento.</p>
                    <input name="cuenta" id="cuenta" class="form-control" type="text" placeholder="Ingrese aquí su nombre de usuario de Instagram" value="{{Auth::user()->cuenta}}">
                    <label for=""><strong>Contraseña De Instagram:</strong></label>
                    <p>La misma contraseña que usas para iniciar sesión en el app.</p>
                    <input id="igpassword" name="igpassword" class="form-control" type="password" placeholder="Ingrese aquí su contraseña de Instagram" required>
                    <p><strong>La contraseña es encriptada</strong>, ninguna persona va a poder ver la misma. Pero es necesaria para que el sistema pueda conectarse a tu cuenta y funcionar.</p>
                    <label for=""><strong>Hastags# de Referencia:</strong></label>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="hashtag1">Hashtag 1:</label>
                            <input name="hashtag1" id="hashtag1" class="form-control   mb-3" type="text" placeholder="Ingrese # aquí" value="{{ Auth::user()->hashtag1 }}">
                            <label for="hashtag2">Hashtag 3:</label>
                            <input name="hashtag3" id="hashtag3" class="form-control   mb-3" type="text" placeholder="Ingrese # aquí" value="{{ Auth::user()->hashtag3 }}">
                        </div>
                        <div class="col-lg-6">
                            <label for="hashtag3">Hashtag 2:</label>
                            <input name="hashtag2" id="hashtag2" class="form-control   mb-3" type="text" placeholder="Ingrese # aquí" value="{{ Auth::user()->hashtag2 }}">
                            <label for="hashtag4">Hashtag 4:</label>
                            <input name="hashtag4" id="hashtag4" class="form-control   mb-3" type="text" placeholder="Ingrese # aquí" value="{{ Auth::user()->hashtag4 }}">
                        </div>
                    </div>
                    <label for="referencias">Cuentas de Referencia:</label>
                    {{-- <p>Los usuarios de tus competidores o cuentas de referencias sin usar @ y también tienen que tener +5000 followers para que el sistema funcione bien.</p> --}}
                    <p>Los nombres de usuario de tus competidores. Usamos sus cuentas para interactuar con sus seguidores,  la gente que les comenta y hace likes.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="referencia1">Referencia 1:</label>
                            <input required name="referencia1" id="referencia1" class="form-control mb-3" type="text" placeholder="Ingrese @ de referencia aquí" value="{{ Auth::user()->referencia1 }}">
                            <label for="referencia2">Referencia 2:</label>
                            <input required name="referencia2" id="referencia2" class="form-control mb-3" type="text" placeholder="Ingrese @ de referencia aquí" value="{{ Auth::user()->referencia2 }}">
                        </div>
                        <div class="col-lg-6">
                            <label for="referencia3">Referencia 3:</label>
                            <input name="referencia3" id="referencia3" class="form-control mb-3" type="text" placeholder="Ingrese @ de referencia aquí" value="{{ Auth::user()->referencia3 }}">
                            <label for="referencia4">Referencia 4:</label>
                            <input name="referencia4" id="referencia4" class="form-control mb-3" type="text" placeholder="Ingrese @ de referencia aquí" value="{{ Auth::user()->referencia4 }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 m-1 col-md-12 p-3 bg-primary rounded">
                <div class="form-group">
                    <br>
                    <label for="ubicaciones"><strong>Ubicación en donde quieres que interactuemos:</strong></label>
                    <p>Podes agregar más de una ubicación separadas por ","</p>
                    <input type="text" class="form-control" placeholder="Ingrese aquí las ubicaciones" name="ubicaciones" id="ubicaciones" placeholder="{{Auth::user()->customizations()[0]->comment1}}">
                    {{-- <label for=""><strong>Comentarios:</strong></label>
                    <p>Es necesario tener al menos de 10 comentarios</p>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                                <input name="comment1" id="comment1" type="text" class="form-control m-2" placeholder="Ingrese comentario aquí" value="{{Auth::user()->customizations()[0]->comment1}}">
                                <input name="comment2" id="comment2" type="text" class="form-control m-2" placeholder="Ingrese comentario aquí" value="{{Auth::user()->customizations()[0]->comment2}}">
                                <input name="comment3" id="comment3" type="text" class="form-control m-2" placeholder="Ingrese comentario aquí" value="{{Auth::user()->customizations()[0]->comment3}}">
                                <input name="comment4" id="comment4" type="text" class="form-control m-2" placeholder="Ingrese comentario aquí" value="{{Auth::user()->customizations()[0]->comment4}}">
                                <input name="comment5" id="comment5" type="text" class="form-control m-2" placeholder="Ingrese comentario aquí" value="{{Auth::user()->customizations()[0]->comment5}}">
                        </div>
                        <div class="col-lg-6 col-md-12">
                                <input name="comment6" id="comment6" type="text" class="form-control m-2" placeholder="Ingrese comentario aquí" value="{{Auth::user()->customizations()[0]->comment6}}">
                                <input name="comment7" id="comment7" type="text" class="form-control m-2" placeholder="Ingrese comentario aquí" value="{{Auth::user()->customizations()[0]->comment7}}">
                                <input name="comment8" id="comment8" type="text" class="form-control m-2" placeholder="Ingrese comentario aquí" value="{{Auth::user()->customizations()[0]->comment8}}">
                                <input name="comment9" id="comment9" type="text" class="form-control m-2" placeholder="Ingrese comentario aquí" value="{{Auth::user()->customizations()[0]->comment9}}">
                                <input name="comment10" id="comment10" type="text" class="form-control m-2" placeholder="Ingrese comentario aquí" value="{{Auth::user()->customizations()[0]->comment10}}">
                        </div>
                    </div> --}}
                    <label for=""><strong>Funcionalidades:</strong></label>
                    <p>Seleccione las funcionalidades que quieres que usemos en tu cuenta.</p>
                    <div class="row">
                        <div class="col">
                            <label for="follow">Seguir y dejar de Seguir:</label>
                            <select name="follow" id="follow" class="form-control">
                                <option value="">No</option>
                                <option value="on" selected>Si</option>
                            </select>
                            <label for="likes">Likes:</label>
                            <select name="likes" id="likes" class="form-control">
                                <option value="">No</option>
                                <option value="on" selected>Si</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="private">Ignorar Usuarios Privados:</label>
                            <select name="private" id="private" class="form-control">
                                <option value="" selected>No</option>
                                <option value="on">Si</option>
                            </select>
                            <label for="comment">Comentarios:</label>
                            <select name="comment" id="comment" class="form-control">
                                <option value="" selected>No</option>
                                <option value="on">Si</option>
                            </select>
                        </div>
                    </div>
                    <label for=""><strong>Mensajes Directos</strong></label>
                    <p>Cargue aquí el mensaje de bienvenida que le quiere dejar a sus seguidores nuevos:</p>
                    <textarea class="form-control" name="md" id="md" cols="30" rows="3" placeholder="Ingrese aquí un mensaje de bienvenida a los nuevos seguidores de tu cuenta de Instagram">{{Auth::user()->customizations()[0]->md}}</textarea>
                </div>
            </div>
        </div>
            <div class="row d-flex justify-content-center">
                <button type="submit" class="btn btn-success">GUARDAR</button>
            </div>
    </form>

</div>

@endsection
