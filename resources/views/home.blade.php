@extends('layouts.app')

@section('content')

    <div id="panel-inicio" class="panel panel-default">
        <div class="card text-center">
                <div class="card-header bg-primary">
                    <p class="text-white pt-3">Sistema de Crecimiento para <strong>Instagram</strong>.</p>
                </div>

                @if (Auth::user()->cliente == 0)
                    {{-- DESCUENTO PARA EL RESTO DEL MUNDO --}}
                    <div id="card-body" class="card-body">
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">50% OFF</h4>
                                <p>Solo por este mes estamos ofreciendo un 50% de descuento.</p>
                            </div>
                        {{-- <h3 class="card-title text-primary">Una Semana Gratis!</h3> --}}
                        <p class="card-text mt-2">Una vez completado el pago en Paypal el sistema automáticamente empieza a correr con tu cuenta.</p>
                        <div class="d-flex justify-content-center">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="QMNCEK3HXQJV8">
                                <table>
                                <tr><td><input type="hidden" name="on0" value=""></td></tr><tr><td><select name="os0">
                                    <option value="Mensual">Mensual : $29,00 USD - mensual</option>
                                    <option value="Anual">Anual : $230,00 USD - anual</option>
                                </select> </td></tr>
                                </table>
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                                </form>
                        </div>
                    </div>
                    <p>Garantía de reembolso garantizada, si no te sirve o no te gusta te devolvemos el dinero.</p>
                    
                @endif
                {{-- SI EL CLIENTE ESTA ACTIVO O USUARIO ADMIN --}}
                @if(Auth::user()->estado == 1 || Auth::user()->estado == 9)
                <div id="card-body" class="card-body">
                    <h3 class="card-title text-success">¡Tu cuenta esta activa!</h3>
                    <div class="d-flex justify-content-center">
                        <img src="/img/logo.png" style="width: 200px;" alt="">
                    </div>
                    <p class="card-text mt-2">Muchas gracias por confiar en nosotros.</p>
                </div>
                @endif

                {{-- SI EL CLIENTE ESTA EN REVISION --}}
                @if(Auth::user()->estado == 3)
                <div id="card-body" class="card-body">
                    <h3 class="card-title text-info">¡Tu cuenta esta en revisión!</h3>
                    <div class="d-flex justify-content-center">
                        <img src="/img/logo.png" style="width: 150px;" alt="">
                    </div>
                    <p class="card-text mt-2">Te avisaremos cuando tu cuenta este activa.</p>
                </div>
                @endif

                {{-- SI EL CLIENTE TIENE UN ERROR EN LA ACTIVACIÓN --}}
                @if(Auth::user()->estado == 4)
                <div id="card-body" class="card-body">
                    <h3 class="card-title text-danger">¡Error en Vinculación!</h3>
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-exclamation-triangle text-danger" style="font-size:4.5em"></i>
                    </div>
                    <p class="card-text mt-2">No pudimos vincular tu cuenta con <strong>Instagram</strong>, <a href="{{route ('configurar')}}">asegurate de que los datos sean correctos.</a></p>
                </div>
                @endif

                {{-- SI ES CLIENTE Y ES INACTIVO --}}

                @if(Auth::user()->estado == 0 && Auth::user()->cliente == 1)
                <div id="card-body" class="card-body">
                    <h3 class="card-title text-success">¡Gracias por confiar en nosotros!</h3>
                    <div class="d-flex justify-content-center">
                        <a href="{{route ('configurar')}}">
                            <i class="fas fa-cog text-secondary" style="font-size:4.5em"></i>
                        </a>
                    </div>
                    <p class="card-text mt-2">Vincular tu cuenta con <strong>Instagram</strong>, <a href="{{route ('configurar')}}">haciendo click acá.</a></p>
                </div>
                @endif

                <div class="card-footer text-muted bg-primary">
                    <p class="mt-3 text-white">¡Potencia tu <strong>Instagram</strong> de manera orgánica!</p>
                </div>
            </div>
        </div>
@endsection
