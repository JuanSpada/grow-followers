<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T8VLC9M');</script>
    <!-- End Google Tag Manager -->

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="png" href="/img/favicon.png">
  <title>MásFollows</title>

  <!-- Custom fonts for this template-->
  <link href="backoffice/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="backoffice/css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8VLC9M"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Registrarse</h1>
              </div>
              <form method="POST" id="register" action="{{ route('register') }}" class="user">
                @csrf
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">

                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="col-sm-6">
                      <input id="cuenta" type="text" class="form-control form-control-user @error('cuenta') is-invalid @enderror" name="cuenta" value="{{ old('cuenta') }}" required autocomplete="cuenta" autofocus placeholder="@cuentadeinstagram">

                      @error('cuenta')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
  
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <select required type="text" name="pais" id="pais" class="form-control form-control-user @error('pais') is-invalid @enderror">
                        <option selected="selected" disable="disable" value="">Elegir una opción</option> 
                        <option value="AF">
                          Afganistán
                        </option>
                        <option value="AX">
                          Islas Aland
                        </option>
                        <option value="AL">
                          Albania
                        </option>
                        <option value="DZ">
                          Argelia
                        </option>
                        <option value="AS">
                          Samoa Americana
                        </option>
                        <option value="AD">
                          Andorra
                        </option>
                        <option value="AO">
                          Angola
                        </option>
                        <option value="AI">
                          Anguila
                        </option>
                        <option value="AQ">
                          Antártida
                        </option>
                        <option value="AG">
                          Antigua y Barbuda
                        </option>
                        <option value="AR">
                          Argentina
                        </option>
                        <option value="AM">
                          Armenia
                        </option>
                        <option value="AW">
                          Aruba
                        </option>
                        <option value="AU">
                          Australia
                        </option>
                        <option value="AT">
                          Austria
                        </option>
                        <option value="AZ">
                          Azerbaiyán
                        </option>
                        <option value="BS">
                          Bahamas
                        </option>
                        <option value="BH">
                          Bahrein
                        </option>
                        <option value="BD">
                          Bangladesh
                        </option>
                        <option value="BB">
                          Barbados
                        </option>
                        <option value="BY">
                          Bielorrusia
                        </option>
                        <option value="BE">
                          Bélgica
                        </option>
                        <option value="BZ">
                          Belice
                        </option>
                        <option value="BJ">
                          Benin
                        </option>
                        <option value="BM">
                          islas Bermudas
                        </option>
                        <option value="BT">
                          Bután
                        </option>
                        <option value="BO">
                          Bolivia
                        </option>
                        <option value="BA">
                          Bosnia y Herzegovina
                        </option>
                        <option value="BW">
                          Botswana
                        </option>
                        <option value="BV">
                          Isla Bouvet
                        </option>
                        <option value="BR">
                          Brasil
                        </option>
                        <option value="IO">
                          Territorio Británico del Océano Índico
                        </option>
                        <option value="VG">
                          Islas Vírgenes Británicas
                        </option>
                        <option value="BN">
                          Brunei Darussalam
                        </option>
                        <option value="BG">
                          Bulgaria
                        </option>
                        <option value="BF">
                          Burkina Faso
                        </option>
                        <option value="BI">
                          Burundi
                        </option>
                        <option value="KH">
                          Camboya
                        </option>
                        <option value="CM">
                          Camerún
                        </option>
                        <option value="CA">
                          Canadá
                        </option>
                        <option value="IC">
                          Islas Canarias
                        </option>
                        <option value="CV">
                          Cabo Verde
                        </option>
                        <option value="KY">
                          Islas Caimán
                        </option>
                        <option value="CF">
                          República Centroafricana
                        </option>
                        <option value="TD">
                          Chad
                        </option>
                        <option value="CL">
                          Chile
                        </option>
                        <option value="CN">
                          China
                        </option>
                        <option value="CX">
                          Isla de Navidad
                        </option>
                        <option value="CC">
                          Islas Cocos (Keeling)
                        </option>
                        <option value="CO">
                          Colombia
                        </option>
                        <option value="KM">
                          Comoras
                        </option>
                        <option value="CG">
                          Congo
                        </option>
                        <option value="CD">
                          Congo (República Democrática del)
                        </option>
                        <option value="CK">
                          Islas Cook
                        </option>
                        <option value="CR">
                          Costa Rica
                        </option>
                        <option value="CI">
                          Costa de Marfil
                        </option>
                        <option value="HR">
                          Croacia
                        </option>
                        <option value="CW">
                          Curazao
                        </option>
                        <option value="CU">
                          Cuba
                        </option>
                        <option value="CY">
                          Chipre
                        </option>
                        <option value="CZ">
                          República Checa
                        </option>
                        <option value="DK">
                          Dinamarca
                        </option>
                        <option value="DJ">
                          Djibouti
                        </option>
                        <option value="DM">
                          Dominica
                        </option>
                        <option value="DO">
                          República Dominicana
                        </option>
                        <option value="EC">
                          Ecuador
                        </option>
                        <option value="EG">
                          Egipto
                        </option>
                        <option value="SV">
                          El Salvador
                        </option>
                        <option value="GQ">
                          Guinea Ecuatorial
                        </option>
                        <option value="ER">
                          Eritrea
                        </option>
                        <option value="EE">
                          Estonia
                        </option>
                        <option value="ET">
                          Etiopía
                        </option>
                        <option value="FK">
                          Islas Malvinas
                        </option>
                        <option value="FO">
                          Islas Faroe
                        </option>
                        <option value="FJ">
                          Fiyi
                        </option>
                        <option value="FI">
                          Finlandia
                        </option>
                        <option value="FR">
                          Francia
                        </option>
                        <option value="GF">
                          Guayana francés
                        </option>
                        <option value="PF">
                          Polinesia francés
                        </option>
                        <option value="TF">
                          Territorios Franceses del Sur
                        </option>
                        <option value="GA">
                          Gabón
                        </option>
                        <option value="GM">
                          Gambia
                        </option>
                        <option value="GE">
                          Georgia
                        </option>
                        <option value="DE">
                          Alemania
                        </option>
                        <option value="GH">
                          Ghana
                        </option>
                        <option value="GI">
                          Gibraltar
                        </option>
                        <option value="GR">
                          Grecia
                        </option>
                        <option value="GL">
                          Tierra Verde
                        </option>
                        <option value="GD">
                          Granada
                        </option>
                        <option value="GP">
                          Guadalupe
                        </option>
                        <option value="GU">
                          Guam
                        </option>
                        <option value="GT">
                          Guatemala
                        </option>
                        <option value="GG">
                          Guernesey
                        </option>
                        <option value="GN">
                          Guinea
                        </option>
                        <option value="GW">
                          Guinea-Bissau
                        </option>
                        <option value="GY">
                          Guayana
                        </option>
                        <option value="HT">
                          Haití
                        </option>
                        <option value="HM">
                          Islas Heard y Mcdonald
                        </option>
                        <option value="HN">
                          Honduras
                        </option>
                        <option value="HK">
                          Hong Kong
                        </option>
                        <option value="HU">
                          Hungría
                        </option>
                        <option value="IS">
                          Islandia
                        </option>
                        <option value="IN">
                          India
                        </option>
                        <option value="ID">
                          Indonesia
                        </option>
                        <option value="IR">
                          Corrí
                        </option>
                        <option value="IQ">
                          Irak
                        </option>
                        <option value="IE">
                          Irlanda
                        </option>
                        <option value="IM">
                          Isla de Man
                        </option>
                        <option value="IL">
                          Israel
                        </option>
                        <option value="IT">
                          Italia
                        </option>
                        <option value="JM">
                          Jamaica
                        </option>
                        <option value="JP">
                          Japón
                        </option>
                        <option value="JE">
                          Jersey
                        </option>
                        <option value="JO">
                          Jordán
                        </option>
                        <option value="KZ">
                          Kazajstán
                        </option>
                        <option value="KE">
                          Kenia
                        </option>
                        <option value="KI">
                          Kiribati
                        </option>
                        <option value="KP">
                          Corea (República Popular Democrática)
                        </option>
                        <option value="KR">
                          República de Corea)
                        </option>
                        <option value="KW">
                          Kuwait
                        </option>
                        <option value="KG">
                          Kirguistán
                        </option>
                        <option value="LA">
                          Lao (República Democrática Popular)
                        </option>
                        <option value="LV">
                          Letonia
                        </option>
                        <option value="LB">
                          Líbano
                        </option>
                        <option value="LS">
                          Lesoto
                        </option>
                        <option value="LR">
                          Liberia
                        </option>
                        <option value="LY">
                          Libia
                        </option>
                        <option value="LI">
                          Liechtenstein
                        </option>
                        <option value="LT">
                          Lituania
                        </option>
                        <option value="LU">
                          Luxemburgo
                        </option>
                        <option value="MO">
                          Macao
                        </option>
                        <option value="MK">
                          macedonia
                        </option>
                        <option value="MG">
                          Madagascar
                        </option>
                        <option value="MW">
                          Malawi
                        </option>
                        <option value="MY">
                          Malasia
                        </option>
                        <option value="MV">
                          Maldivas
                        </option>
                        <option value="ML">
                          Mali
                        </option>
                        <option value="MT">
                          Malta
                        </option>
                        <option value="MH">
                          Islas Marshall
                        </option>
                        <option value="MQ">
                          Martinica
                        </option>
                        <option value="MR">
                          Mauritania
                        </option>
                        <option value="MU">
                          Mauricio
                        </option>
                        <option value="YT">
                          Mayotte
                        </option>
                        <option value="MX">
                          México
                        </option>
                        <option value="FM">
                          Micronesia
                        </option>
                        <option value="MD">
                          Moldavia
                        </option>
                        <option value="MC">
                          Mónaco
                        </option>
                        <option value="MN">
                          Mongolia
                        </option>
                        <option value="ME">
                          Montenegro
                        </option>
                        <option value="MS">
                          Montserrat
                        </option>
                        <option value="MA">
                          Marruecos
                        </option>
                        <option value="MZ">
                          Mozambique
                        </option>
                        <option value="MM">
                          Myanmar
                        </option>
                        <option value="NA">
                          Namibia
                        </option>
                        <option value="NR">
                          Nauru
                        </option>
                        <option value="NP">
                          Nepal
                        </option>
                        <option value="NL">
                          Países Bajos
                        </option>
                        <option value="AN">
                          Países Bajos Antillas
                        </option>
                        <option value="NC">
                          Nueva Caledonia
                        </option>
                        <option value="NZ">
                          Nueva Zelanda
                        </option>
                        <option value="NI">
                          Nicaragua
                        </option>
                        <option value="NE">
                          Níger
                        </option>
                        <option value="NG">
                          Nigeria
                        </option>
                        <option value="NU">
                          Niue
                        </option>
                        <option value="NF">
                          Isla Norfolk
                        </option>
                        <option value="MP">
                          Islas Marianas del Norte
                        </option>
                        <option value="NO">
                          Noruega
                        </option>
                        <option value="OM">
                          Omán
                        </option>
                        <option value="PK">
                          Pakistán
                        </option>
                        <option value="PW">
                          Palau
                        </option>
                        <option value="PS">
                          Territorio Palestino, Ocupado)
                        </option>
                        <option value="PA">
                          Panamá
                        </option>
                        <option value="PG">
                          Papúa Nueva Guinea
                        </option>
                        <option value="PY">
                          Paraguay
                        </option>
                        <option value="PE">
                          Perú
                        </option>
                        <option value="PH">
                          Filipinas
                        </option>
                        <option value="PN">
                          Pitcairn
                        </option>
                        <option value="PL">
                          Polonia
                        </option>
                        <option value="PT">
                          Portugal
                        </option>
                        <option value="PR">
                          Puerto Rico
                        </option>
                        <option value="QA">
                          Katar
                        </option>
                        <option value="RE">
                          Reunión
                        </option>
                        <option value="RO">
                          Rumania
                        </option>
                        <option value="RU">
                          Federación Rusa
                        </option>
                        <option value="RW">
                          Ruanda
                        </option>
                        <option value="BL">
                          Saint Barthélemy
                        </option>
                        <option value="SH">
                          Santa Elena
                        </option>
                        <option value="KN">
                          San Cristóbal y Nieves
                        </option>
                        <option value="LC">
                          Santa Lucía
                        </option>
                        <option value="MF">
                          Saint Martin (Parte francesa)
                        </option>
                        <option value="PM">
                          San Pedro y Miquelón
                        </option>
                        <option value="VC">
                          San Vicente y las Granadinas
                        </option>
                        <option value="WS">
                          Samoa
                        </option>
                        <option value="SM">
                          San Marino
                        </option>
                        <option value="ST">
                          Santo Tomé y Príncipe
                        </option>
                        <option value="SA">
                          Arabia Saudita
                        </option>
                        <option value="SN">
                          Senegal
                        </option>
                        <option value="RS">
                          Serbia
                        </option>
                        <option value="SC">
                          Seychelles
                        </option>
                        <option value="SL">
                          Sierra Leona
                        </option>
                        <option value="SG">
                          Singapur
                        </option>
                        <option value="BQ">
                          Sint Eustatius y Saba Bonaire
                        </option>
                        <option value="SX">
                          Sint Maarten (parte neerlandesa)
                        </option>
                        <option value="SK">
                          Eslovaquia
                        </option>
                        <option value="SI">
                          Eslovenia
                        </option>
                        <option value="SB">
                          Islas Salomón
                        </option>
                        <option value="SO">
                          Somalia
                        </option>
                        <option value="ZA">
                          Sudáfrica
                        </option>
                        <option value="GS">
                          Georgia del Sur y las Islas Sandwich del Sur
                        </option>
                        <option value="SS">
                          Sudán del Sur
                        </option>
                        <option value="ES">
                          España
                        </option>
                        <option value="LK">
                          Sri Lanka
                        </option>
                        <option value="SD">
                          Sudán
                        </option>
                        <option value="SR">
                          Suriname
                        </option>
                        <option value="SJ">
                          Svalbard y Jan Mayen
                        </option>
                        <option value="SZ">
                          Swazilandia
                        </option>
                        <option value="SE">
                          Suecia
                        </option>
                        <option value="CH">
                          Suiza
                        </option>
                        <option value="SY">
                          República Árabe Siria
                        </option>
                        <option value="TW">
                          Taiwán
                        </option>
                        <option value="TJ">
                          Tayikistán
                        </option>
                        <option value="TZ">
                          Tanzania
                        </option>
                        <option value="TH">
                          Tailandia
                        </option>
                        <option value="TL">
                          Timor Oriental
                        </option>
                        <option value="TG">
                          Ir
                        </option>
                        <option value="TK">
                          Tokelau
                        </option>
                        <option value="TO">
                          Tonga
                        </option>
                        <option value="TT">
                          Trinidad y Tobago
                        </option>
                        <option value="TN">
                          Túnez
                        </option>
                        <option value="TR">
                          Turquía
                        </option>
                        <option value="TM">
                          Turkmenistán
                        </option>
                        <option value="TC">
                          Islas Turcas y Caicos
                        </option>
                        <option value="TV">
                          Tuvalu
                        </option>
                        <option value="UG">
                          Uganda
                        </option>
                        <option value="UA">
                          Ucrania
                        </option>
                        <option value="AE">
                          Emiratos Árabes Unidos
                        </option>
                        <option value="GB">
                          Reino Unido
                        </option>
                        <option value="US">
                          Estados Unidos
                        </option>
                        <option value="UM">
                          Islas menores alejadas de los Estados Unidos
                        </option>
                        <option value="UY">
                          Uruguay
                        </option>
                        <option value="UZ">
                          Uzbekistán
                        </option>
                        <option value="VU">
                          Vanuatu
                        </option>
                        <option value="VA">
                          Ciudad del Vaticano
                        </option>
                        <option value="VE">
                          Venezuela
                        </option>
                        <option value="VN">
                          Viet Nam
                        </option>
                        <option value="VI">
                          Islas Vírgenes de EE.UU
                        </option>
                        <option value="WF">
                          Wallis y Futuna
                        </option>
                        <option value="EH">
                          Sahara Occidental
                        </option>
                        <option value="YE">
                          Yemen
                        </option>
                        <option value="ZM">
                          Zambia
                        </option>
                        <option value="ZW">
                          Zimbabue
                        </option>
                      </select>
                      @error('pais')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="col-sm-6">
                    <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password" placeholder="Repite tu Contraseña">
                  </div>
                  <div class="row ml-3 mt-4">
                    <label for=""><input name="terminos" id="terminos" type="checkbox" required checked>Al Registrarme acepto los <a href="{{route ('terminos')}}">Términos y Condiciones de MásFollows</a></label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    {{ __('Enviar') }}
                </button>
                <hr>
                {{-- <a href="#" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Registrarse con Google
                </a>
                <a href="{{ route('social.auth', 'facebook') }}" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Registrarse con Facebook
                </a> --}}
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="{{ route('password.request') }}">Olvidaste tu Contraseña?</a>
              </div>
              <div class="text-center">
                <a class="small" href="{{ route('login') }}">Ya tenés una cuenta? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="backoffice/vendor/jquery/jquery.min.js"></script>
  <script src="backoffice/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="backoffice/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="backoffice/js/sb-admin-2.min.js"></script>

</body>

</html>
