<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Remember - Multipurpose bootstrap site template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/bootstrap-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet" />
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- Theme skin -->
  <link id="t-colors" href="{{ asset('color/blue.css') }}" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href a="{{asset('img/logoetec.jpg') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('img/logoetec.jpg') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('img/logoetec.jpg') }}" />
  <link rel="apple-touch-icon-precomposed" href="{{ asset('img/logoetec.jpg') }}" />
  <link rel="shortcut icon" href="{{ asset('img/logoetec.jpg') }}" />

  <!-- =======================================================
    Theme Name: Remember
    Theme URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="wrapper">
    <!-- start header -->
    <header>
      <div class="top">
        <div class="container">
          <div class="row">
            <div class="span6">
              <ul class="topmenu">
             
              </ul>
            </div>
            <div class="span6">

         
            </div>
          </div>
        </div>
      </div>
      <div class="container">


        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
              <h1><a href="{{url('/')}}"></i>Web Etec </a></h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="active">
                      <a href="{{url('')}}">Home</a>
                    </li>
                    <li class="dropdown">
                    
                      <a href="#">Cursos <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                      <li><a href="{{url('/cursotecnico')}}">Técnico Integrado ao Ensino Médio</a></li>
                      <li><a href="{{url('/cursonoturno')}}">Técnico Noturno</a></li>
                        
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Conhecendo a Etec <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{url('/quemsomos')}}">Quem Somos</a></li>  
                        <li><a href="{{asset('storage/calendario.pdf')}}">Calendário Escolar</a></li>
                        <li><a href="{{asset('storage/Conselho.pdf')}}">Conselho Escolar</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Eventos <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{url('/spf')}}">Semana Paulo Freire (SPF)</a></li>
                        <li><a href="{{url('/caipirete')}}">Caipirete</a></li>
                         <li><a href="{{url('/fec')}}">Festival de Expressão Corporal (FEC)</a></li>
                        <li><a href="{{url('/expoete')}}">EXPOETE</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Secretaria Acadêmica <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                          <li><a href="{{url('/horario')}}">Horário de Atendimento </a></li>
                        <li><a href="{{url('/certificado')}}">Certificado de Competencias</a></li>
                        <li><a href="{{asset('storage/normas.pdf')}}">Normas de Convivencia - 2017</a></li>
                        <li><a href="{{asset('storage/regimento.pdf')}}">Regimento Comum</a></li>
                        <li><a href="{{asset('storage/calendarioPP.pdf')}}">Calendário de Progressão Parcial</a></li>

                      </ul>
                    </li>
                  
                 
                  <li>
                    <a href="login.html">entrar </a>
                  </li>
                </ul>
              </nav>
            </div>
            <!-- end navigation -->
          </div>
        </div>
      </div>
    </div>
  </header>
    <!-- end header -->
      


<!-- login -->

<br>
    <form method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
        <fieldset>
        <br>
        <br>
        <center>
        <form>
        <div class="container">
          
          <div class="form-group">
          <label for="email">{{ __('E-Mail Address') }}</label>
          <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
          </div>
          <br>
          <div class="form-group">
          <label for="password">{{ __('Password') }}</label>
          <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
          </div>
          
                        <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
             
        </div>
        </form>
</center>

<br/>
<br/>

<footer>
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <div class="footer_logo">
                <h3><a href="index.html"> web Etec </a></h3>
              </div>
              <address>
							  <strong>Etec Pedro Ferreira Alves</strong><br>
  						Rua Ariovaldo Silveira Franco, 237 - Mirante, Mogi Mirim - SP, 13801-005<br>
  							
               
  						</address>
              <p>
                <i class="icon-phone"></i> 	(19) 3862-0177<br> 
                (19) 3862-0888<br>
                <i class="icon-envelope-alt"></i>  diretoria.pfalves@etec.sp.gov.br<br>
                sec.academicapfalves@etec.sp.gov.br<br>
                diretoriaservicos.pfalves@etec.sp.gov.br <br>
              
              </p>
            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Links Úteis</h5>
              <ul class="link-list">
                <li><a href="http://www.cps.sp.gov.br">Centro Paula Souza</a></li>
                <li><a href="http://www.fatec.sp.gov.br/view/Default.aspx">Email Institucional</a></li>
                <li><a href="https://nsa.cps.sp.gov.br/">NSA</a></li>
                <li><a href="https://www.classapp.com.br/">Class App</a></li>
             
              </ul>

            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Vestibulinho Etec</h5>
              <ul class="link-list">
                <li><a href="https://www.vestibulinhoetec.com.br/home/">Vestibulinho</a></li>
                </ul> 
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p><span>Etec 4.0 Todos os direitos reservados.</span></p>
              </div>

            </div>

            <div class="span6">
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Remember
                -->
                Created by Etec 4.0
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-rounded icon-bglight icon-2x"></i></a>

  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{asset ('js/jquery.js')}}"></script>
  <script src="{{asset ('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset ('js/bootstrap.js')}}"></script>
  <script src="{{asset ('js/modernizr.custom.js')}}"></script>
  <script src="{{asset ('js/toucheffects.js')}}"></script>
  <script src="{{asset ('js/google-code-prettify/prettify.js')}}"></script>
  <script src="{{asset ('js/jquery.prettyPhoto.js')}}"></script>
  <script src="{{asset ('js/portfolio/jquery.quicksand.js')}}"></script>
  <script src="{{asset ('js/portfolio/setting.js')}}"></script>
  <script src="{{asset ('js/animate.js')}}"></script>

  <!-- Template Custom JavaScript File -->
  <script src="{{ asset ('js/custom.js')}}"></script>

</body>


</html>
