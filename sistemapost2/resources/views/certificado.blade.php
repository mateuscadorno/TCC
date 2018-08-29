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
                    
                    @guest
                    <li><a href="{{url('/entrar')}}">Login</a></li>
                    @else





                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                          @endguest
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

   <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Certificação de Competencias</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
              <li><a href="#">Secretaria</a> <i class="icon-angle-right"></i></li>
              <li class="active">Certificação</li>
            </ul>
          </div>
        </div>
      </div>
    </section>


    <section id="content">
      <div class="container">
        <div class="row">

          
           
          
            <h7>
             A LDB 9394/96, em seu Artigo 41 afirma: “O conhecimento adquirido na educação profissional, inclusive no trabalho, poderá  ser objeto de avaliação, reconhecimento e certificação para prosseguimento ou conclusão de estudos”.  A partir da publicação da Deliberação CEE 107/2011, a avaliação de competências para fins de expedição de diploma abrange:  “os conhecimentos e competências adquiridos na educação escolar em experiências extraescolar, em práticas sociais ou no trabalho poderão ser objeto de avaliação para fins de diplomação, nos termos do art.41 da LDB (...)”.  Parágrafo  único  –  A  avaliação  de  competências  para  fins  de  expedição  de  diploma,  será  feita  por  estabelecimentos  previamente credenciados pelo Conselho Estadual de Educação.  O Centro Paula Souza é uma das instituições credenciadas. 
               <br/>   </h7> 
<br/>

            
            <p>
             1. Etapas do processo: O processo de Avaliação de Competências para fins de expedição de diploma na educação profissional técnica de Nível Médio está organizado em 04 (quatro) etapas, a saber:<br/>

               1.1. Inscrição: feita pelo interessado em qualquer Escola Técnica Estadual (Etec), nos meses de Abril a Junho e Setembro a Novembro. IMPORTANTE: O requerimento somente poderá ser protocolado se todos os documentos originais necessários forem apresentados e acompanhados de uma cópia simples para conferência e autenticação (ver Item 2);<br/>
              
              1.2. Análise e Deferimento do requerimento: feita pela equipe de Supervisão Educacional do Centro Paula Souza;<br/>
              
              1.3. Avaliação: A solicitação será encaminhada à Unidade Avaliadora, com previsão de 06 (seis) meses para o desenvolvimento do processo e será composto por: entrevista, avaliação teórica, avaliação prática e outros instrumentos que a comissão docente julgar oportuno. IMPORTANTE: Todas as etapas do processo de avaliação deverão considerar as competências previstas no perfil de conclusão da habilitação profissional objeto da avaliação; <br/>

                1.4. Divulgação do parecer conclusivo: Após o período das avaliações a Comissão Avaliadora divulgará ao interessado o parecer conclusivo, que contemplará uma das seguintes possibilidades:<br/>
           
            1.4.1. Candidato apto à diplomação no curso objeto do processo. <br/>

             1.4.2. Candidato apto à continuidade de estudos na habilitação desejada a partir do processo de vagas remanescentes para o prosseguimento nos estudos, devendo receber indicação de itinerário formativo.<br/>

             1.4.3. Candidato inapto para diplomação e continuidade de estudos, podendo ser orientado a participar do Processo Seletivo – Vestibulinho.
        <br/>
             <br/>
             2. Documentação necessária para a inscrição:
             <br/>
               2.1. Documentos Pessoais: Identificação (RG e/ou RNE), comprovante de residência, CPF.
               <br/>
                 2.2. Documentos Acadêmicos: Histórico, com certificado de conclusão do Ensino Médio. ATENÇÃO: A continuidade do processo estará vinculada à confirmação de autenticidade, em conformidade com a Portaria CGEB, de 25-10-2012, que dispõe sobre a verificação de documentos e atos escolares.
                 <br/>
                  2.3. Certificado de cursos de atualização profissional
                  <br/>
                   2.4. Comprovante de esperiência laboral: Carteira Profissional, declaração do empregador relatando as atividades desenvolvidas, portfólio de atividades desenvolvidas: fotos, cartazes, entre outros.
                   <br/>
                   <br/>
                   3. Somente 1 (um) requerimento poderá ser protocolado.Caso o candidato tenha interesse, conhecimento e experiência em mais de uma área profissional, deverá priorizar uma, efetuar o requerimento e aguardar a finalização do mesmo antes de protocolar novo requerimento! <br/><br/>
                   4. Encaminhamento para as Unidades Avaliadoras: A Unidade Avaliadora será designada pela Supervisão Educacional do Centro Paula Souza que, após análise da documentação e deferimento da solicitação, encaminhará à Unidade nos seguintes períodos:<br/>
                   4.1. Para as inscrições realizadas entre os meses de abril e junho, os requerimentos serão encaminhados para as Unidades Avaliadoras nos meses de Julho e Agosto;<br/>
                   4.2. Para as inscrições realizadas entre os meses de setembro e novembro, os requerimentos serão encaminhados para as Unidades Avaliadoras nos meses de Janeiro e Fevereiro.<br/><br/>
                   5. Período de interstício (tempo de espera): Caso o interessado tenha interesse de protocolar novo requerimento, deverá ficar atento ao período de interstício (6 meses) existente. O período de “interstício” ocorre nos casos em que o interessado tenha desistido de algum processo em andamento ou não tenha conseguido a diplomação.
                     <br/>
                     <br/>
                     Vizualize aqui:<li><a href="http://www.pfalves.com.br/images/pdf/Certificao-de-Competncias-requerimento.pdf">Requerimento de Certificação de Competência 2017</a></li>
            </p>

          </div>
        </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <div class="footer_logo">
                <h3><a href="index.html"><i class="icon-tint"></i> Remember</a></h3>
              </div>
              <address>
							  <strong>Remember company Inc.</strong><br>
  							Somestreet KW 101, Park Village W.01<br>
  							Jakarta 13426 Indonesia
  						</address>
              <p>
                <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                <i class="icon-envelope-alt"></i> email@domainname.com
              </p>
            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Browse pages</h5>
              <ul class="link-list">
                <li><a href="#">Our company</a></li>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Press release</a></li>
                <li><a href="#">What we have done</a></li>
                <li><a href="#">Our support forum</a></li>
              </ul>

            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">From flickr</h5>
              <div class="flickr_badge">
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
              </div>
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
                <p><span>&copy; Remember Inc. All right reserved</span></p>
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
                Created by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
  <script src="{{ asset ('js/jquery.js')}}"></script>
  <script src="{{ asset ('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset ('js/bootstrap.js')}}"></script>
  <script src="{{ asset ('js/modernizr.custom.js')}}"></script>
  <script src="{{ asset ('js/toucheffects.js')}}"></script>
  <script src="{{ asset ('js/google-code-prettify/prettify.js')}}"></script>
  <script src="{{ asset ('js/jquery.prettyPhoto.js')}}"></script>
  <script src="{{ asset ('js/portfolio/jquery.quicksand.js')}}"></script>
  <script src="{{ asset ('js/portfolio/setting.js')}}"></script>
  <script src="{{ asset ('js/animate.js')}}"></script>

  <!-- Template Custom JavaScript File -->
  <script src="{{ asset ('js/custom.js')}}"></script>

</body>

</html>
