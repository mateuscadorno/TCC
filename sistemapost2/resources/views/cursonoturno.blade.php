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
              <h2>Cursos Técnicos Noturno</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
              <li><a href="#">cusos</a> <i class="icon-angle-right"></i></li>
              <li class="active">Cursos Tecnicos Noturnos</li>
            </ul>
          </div>
        </div>
      </div>
    </section>


    <section id="content">
      <div class="container">
        <div class="row">
          <br/>
          <br/>

         <div claas="container">
            <div class="row">
              <div class="span12">
              </div>


              


              <div class="span4">
                <div class="pricing-box-wrap">
                  <div class="pricing-terms">
                    <h6>Administração</h6>
                  </div>
                  <img src="img/administração.jpg" alt="" />
                  <div class="pricing-content">
                    <ul>
                      <li><i class="icon-book"><br></i>O Técnico em Administração executa atividades administrativas da organização
                        relacionadas aos processos de gestão de pessoas, de operações logísticas, gestão de materiais e patrimônio,
                        de marketing, de vendas e de finanças. Atua em organizações públicas e privadas de segmentos variados,
                        tais como das áreas de comércio, de serviços, da indústria, de consultoria, de ensino e pesquisa,
                        relacionando-se com equipes de diversos setores da organização, por meio da prestação de serviços
                        autônomos, temporários ou contrato efetivo </li>
                      <li><i class="icon-calendar"><br></i>duração: 3 Anos</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="span4">
                <div class="pricing-box-wrap">
                  <div class="pricing-terms">
                    <h6>Automação</h6>
                  </div>
                  <img src="img/automação.jpg" alt="" />
                  <div class="pricing-content">
                    <ul>
                      <li><i class="icon-book"><br></i>
                        <br> O curso Técnico de Automação Industrial<br> tem por objetivo habilitar profissionais <br>para
                        implantar e manter sistemas de instrumentação e controle em processos industriais<br> e elaborar
                        projetos desses sistemas, de acordo com normas técnicas, ambientais,<br> de saúde e segurança no
                        trabalho e de qualidade
                        <br>
                        <br>
                        <br>
                        <br>
                      </li>
                      <li><i class="icon-calendar"><br></i>duração: 3 Anos</li>
                    </ul>
                  </div>
                </div>
              </div>


              <div class="span4">
                <div class="pricing-box-wrap">
                  <div class="pricing-terms">
                    <h6>contabilidade</h6>
                  </div>
                  <img src="img/contabilidade.jpg" alt="" />
                  <div class="pricing-content">
                    <ul>
                      <li><i class="icon-book"><br></i> constitui e regulariza empresa, identifica documentos e informações,
                        <br>atende a fiscalização e procede consultoria empresarial. Executa a contabilidade geral,<br> operacionaliza
                        a contabilidade de custos e efetua contabilidade gerencial. Administra o departamento pessoal e realiza
                        controle patrimonial. Realiza atividades inerentes à contabilidade em empresas,<br> órgãos governamentais
                        e outras instituições públicas e privadas.
                        <br>
                        <br>
                      </li>
                      <li><i class="icon-calendar"><br></i>duração: 3 Anos</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="span12">
              </div>


              <div class="span4">
                <div class="pricing-box-wrap">
                  <div class="pricing-terms">
                    <h6>Enfermagem</h6>
                  </div>
                  <img src="img/enfermagen.jpg" alt="" />
                  <div class="pricing-content">
                    <ul>
                      <li><i class="icon-book"><br></i> Utiliza ferramentas de auxílio na análise e desenvolvimento de sistemas,
                        para construção de soluções que auxiliam<br> o processo de criação de interfaces e aplicativos, seguindo
                        os critérios de usabilidade e acessibilidade<br> na interação com o usuário final
                        <br>
                        <br>

                      </li>
                      <li><i class="icon-calendar"><br></i>duração: 3 Anos</li>
                    </ul>
                  </div>

                </div>
              </div>

              <div class="span4">
                <div class="pricing-box-wrap">
                  <div class="pricing-terms">
                    <h6>informática</h6>
                  </div>
                  <img src="img/informatica.jpg" alt="" />
                  <div class="pricing-content">
                    <ul>
                      <li><i class="icon-book"><br></i> profissional que desenvolve e opera sistemas, aplicações, interfaces
                        gráficas. Monta estruturas de banco de dados e codifica programas.Projeta, implanta e realiza manutenção
                        de sistemas e aplicações. Seleciona recursos de trabalho, linguagens de programação, ferramentas
                        e metodologias para o desenvolvimento de sistemas.</li>
                      <li><i class="icon-calendar"><br></i>duração: 3 Anos</li>
                    </ul>
                  </div>

                </div>
              </div>


              <div class="span4">
                <div class="pricing-box-wrap">
                  <div class="pricing-terms">
                    <h6>Informática para Internet</h6>
                  </div>
                  <img src="img/infomatica internet.jpg" alt="" />
                  <div class="pricing-content">
                    <ul>
                      <li><i class="icon-book"><br></i> Utiliza ferramentas de auxílio na análise e desenvolvimento de sistemas,
                        para construção de soluções que auxiliam o processo de criação de interfaces e aplicativos, seguindo
                        os critérios de usabilidade e acessibilidade na interação com o usuário final
                        <br>
                        <br>
                      </li>
                      <li><i class="icon-calendar"><br></i>duração: 3 Anos</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>


             <div class="row">
              <div class="span12">
              </div>


              <div class="span4">
                <div class="pricing-box-wrap">
                  <div class="pricing-terms">
                    <h6>logística</h6>
                  </div>
                  <img src="img/logistica.jpg" alt="" />
                  <div class="pricing-content">
                    <ul>
                      <li><i class="icon-book"><br></i> Utiliza ferramentas de auxílio na análise e desenvolvimento de sistemas,
                        para construção de soluções que auxiliam<br> o processo de criação de interfaces e aplicativos, seguindo
                        os critérios de usabilidade e acessibilidade<br> na interação com o usuário final
                        <br>
                        <br>

                      </li>
                      <li><i class="icon-calendar"><br></i>duração: 3 Anos</li>
                    </ul>
                  </div>

                </div>
              </div>

              <div class="span4">
                <div class="pricing-box-wrap">
                  <div class="pricing-terms">
                    <h6>mecânica</h6>
                  </div>
                  <img src="img/mecanica.jpg" alt="" />
                  <div class="pricing-content">
                    <ul>
                      <li><i class="icon-book"><br></i> profissional que desenvolve e opera sistemas, aplicações, interfaces
                        gráficas. Monta estruturas de banco de dados e codifica programas.Projeta, implanta e realiza manutenção
                        de sistemas e aplicações. Seleciona recursos de trabalho, linguagens de programação, ferramentas
                        e metodologias para o desenvolvimento de sistemas.</li>
                      <li><i class="icon-calendar"><br></i>duração: 3 Anos</li>
                    </ul>
                  </div>

                </div>
              </div>


              <div class="span4">
                <div class="pricing-box-wrap">
                  <div class="pricing-terms">
                    <h6>mecatrônica</h6>
                  </div>
                  <img src="img/mecatronica.jpg" alt="" />
                  <div class="pricing-content">
                    <ul>
                      <li><i class="icon-book"><br></i> Utiliza ferramentas de auxílio na análise e desenvolvimento de sistemas,
                        para construção de soluções que auxiliam o processo de criação de interfaces e aplicativos, seguindo
                        os critérios de usabilidade e acessibilidade na interação com o usuário final
                        <br>
                        <br>
                      </li>
                      <li><i class="icon-calendar"><br></i>duração: 3 Anos</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>



            <div class="row">
              <div class="span12">
              </div>


              <div class="span4">
                <div class="pricing-box-wrap">
                  <div class="pricing-terms">
                    <h6>redes de computadores</h6>
                  </div>
                  <img src="img/rede de computadores.jpg" alt="" />
                  <div class="pricing-content">
                    <ul>
                      <li><i class="icon-book"><br></i> Utiliza ferramentas de auxílio na análise e desenvolvimento de sistemas,
                        para construção de soluções que auxiliam<br> o processo de criação de interfaces e aplicativos, seguindo
                        os critérios de usabilidade e acessibilidade<br> na interação com o usuário final
                        <br>
                        <br>

                      </li>
                      <li><i class="icon-calendar"><br></i>duração: 3 Anos</li>
                    </ul>
                  </div>

                </div>
              </div>

              <div class="span4">
                <div class="pricing-box-wrap">
                  <div class="pricing-terms">
                    <h6>recursos humanos</h6>
                  </div>
                  <img src="img/recursos humanos.jpg" alt="" />
                  <div class="pricing-content">
                    <ul>
                      <li><i class="icon-book"><br></i> profissional que desenvolve e opera sistemas, aplicações, interfaces
                        gráficas. Monta estruturas de banco de dados e codifica programas.Projeta, implanta e realiza manutenção
                        de sistemas e aplicações. Seleciona recursos de trabalho, linguagens de programação, ferramentas
                        e metodologias para o desenvolvimento de sistemas.</li>
                      <li><i class="icon-calendar"><br></i>duração: 3 Anos</li>
                    </ul>
                  </div>

                </div>
              </div>
          </div>
</section>


              <footer>
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <div class="footer_logo">
                <h3><a href="index.html"> ETEC PFA </a></h3>
              </div>
              <address>
                <strong>Etec Pedro Ferreira Alves</strong><br> Rua Ariovaldo Silveira Franco, 237 - Mirante, Mogi Mirim -
                SP, 13801-005<br>


              </address>
              <p>
                <i class="icon-phone"></i> (19) 3862-0177<br> (19) 3862-0888<br>
                <i class="icon-envelope-alt"></i> diretoria.pfalves@etec.sp.gov.br<br> sec.academicapfalves@etec.sp.gov.br
                <br> diretoriaservicos.pfalves@etec.sp.gov.br <br>

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
                Created by <a href="https://bootstrapmade.com/">Em1ra M1l Gr4ul</a>
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