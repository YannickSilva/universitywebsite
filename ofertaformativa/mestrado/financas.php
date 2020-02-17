<!DOCTYPE html>
<html lang="pt">
<head>
	<title>Universidade Gregório Semedo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icon.png">
    <meta name="description" content="Universidade Gregório Semedo, é uma melhores existentes em Angola e que tem formado muitos quadros ao longo dos anos em diversas áreas de actuação.">
	<meta name="keywords" content="Universidade, Ensino Superior, Cursos Ensino Superior">
	<meta name="robots" content="index, follow">
	<meta name="author" content="Yannick Silva">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
    <meta charset="utf-8">          
</head>
<body style="background-color: white;">

<!-- HEADER -->
<nav>
      <div class="nav-wrapper white">
        <div class="">
            <a href="#" class="brand-logo header "><img class="responsive-img logo" src="../../assets/img/ugs.png"></a>
            <!-- Menu mobile-->
          <a href="#" data-target="mobile-demo" class="sidenav-trigger black-text"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="../../index.php" class="black-text">Página Inicial</a></li>
              <li><a class="dropdown-trigger black-text" href="#!" data-target="universidade">A Universidade<i class="material-icons right">arrow_drop_down</i></a></li>
              <li><a class="dropdown-trigger black-text" href="#!" data-target="academica">Informações Acadêmicas<i class="material-icons right">arrow_drop_down</i></a></li>
              <li><a class="dropdown-trigger black-text" href="#!" data-target="oferta">Ofertas Formativa<i class="material-icons right">arrow_drop_down</i></a></li>
              <li><a class="dropdown-trigger black-text" href="#!" data-target="estudantil">Informações e Serviços Estudantil<i class="material-icons right">arrow_drop_down</i></a></li>
          </ul>
        </div>
        
      </div>
</nav>

    <!-- Menu da parte mobile-->
    <ul class="sidenav collapsible" id="mobile-demo">

      <li>
        <div class="collapsible-header"><a href="../../index.php" class="black-text">Página Inicial</a></div>
      </li>

      <li>
        <div class="collapsible-header">A Universidade</div>
        <div class="collapsible-body">
          <ul>
            <li><a href="../../universidade/historiaemissao.php" class="black-text">História e Missão</a></li>
            <li><a href="../../universidade/mensagemreitor.php" class="black-text">Mensagem do Reitor</a></li>
            <li><a href="../../universidade/campus.php" class="black-text">Campus da UGS</a></li>
            <li><a href="../../universidade/video.php" class="black-text">Video Institucional</a></li>
            <li><a href="../../assets/Organograma_UGS_.pdf" download="Organograma_UGS_.pdf" class="black-text">Organograma</a></li>
          </ul>  
        </div>
      </li>

      <li>
        <div class="collapsible-header">Informações Acadêmicas</div>
        <div class="collapsible-body">
          <ul>
            <li><a class="dropdown-cand black-text" href="../../infoacademica/candidatura.php" data-target="candidatura">Candidaturas</a></li>
          </ul>
        </div>
      </li>

      <li>
        <div class="collapsible-header">Ofertas Formativa</div>
        <div class="collapsible-body">
          <ul>
            <li><a href="../../ofertaformativa/especializacao.php" class="black-text">Cursos de Especialização</a></li>
            <li><a href="../../ofertaformativa/licenciatura.php" class="black-text">Cursos de Licenciatura</a></li>
            <li><a href="../../ofertaformativa/mestrado.php" class="black-text">Cursos de Mestrado</a></li>
            <li><a href="../../ofertaformativa/acesso.php" class="black-text">Curso de Acesso</a></li>
          </ul>
        </div>
      </li>

      <li>
        <div class="collapsible-header">Informações e Serviços Estudantil</div>
        <div class="collapsible-body">
          <ul>
            <li><a href="#!" class="black-text">Associação de Estudantes</a></li>
            <li><a href="#!" class="black-text">Avisos e Comunicados</a></li>
            <li><a href="#!" class="black-text">Notícias e Eventos</a></li>
            <li><a href="#!" class="black-text">Depoimento de Alunos</a></li>
            <li><a href="#!" class="black-text">Calendário Escolar</a></li>
          </ul>
        </div>
      </li>

    </ul>
    <!-- -->

    <!-- Dropdown da Universidade -->
  <ul id="universidade" class="dropdown-content">
    <li><a href="../../universidade/historiaemissao.php" class="black-text">História e Missão</a></li>
    <li><a href="../../universidade/mensagemreitor.php" class="black-text">Mensagem do Reitor</a></li>
    <li><a href="../../universidade/campus.php" class="black-text">Campus da UGS</a></li>
    <li><a href="../../universidade/video.php" class="black-text">Video Institucional</a></li>
    <li><a href="../../assets/Organograma_UGS_.pdf" download="Organograma_UGS_.pdf" class="black-text">Organograma</a></li>
  </ul>

  <!-- Dropdown da Informações Acadêmicas -->
  <ul id="academica" class="dropdown-content">
    <li><a class="dropdown-cand black-text" href="../../infoacademica/candidatura.php" data-target="candidatura">Candidaturas</a></li>
  </ul>

  <!-- Dropdown da Oferta Formativa-->
  <ul id="oferta" class="dropdown-content">
    <li><a href="../especializacao.php" class="black-text">Cursos de Pôs-Graduação ou Especialização</a></li>
    <li><a href="../licenciatura.php" class="black-text">Cursos de Licenciatura</a></li>
    <li><a href="../mestrado.php" class="black-text">Cursos de Mestrado</a></li>
    <li><a href="../acesso.php" class="black-text">Curso de Acesso ao Ensino Superior</a></li>
  </ul>

  <!-- Dropdown da Informações e Serviços Estudantil -->
  <ul id="estudantil" class="dropdown-content">
    <li><a href="#!" class="black-text">Associação de Estudantes</a></li>
    <li><a href="#!" class="black-text">Avisos e Comunicados</a></li>
    <li><a href="#!" class="black-text">Notícias e Eventos</a></li>
    <li><a href="#!" class="black-text">Depoimento de Alunos</a></li>
    <li><a href="#!" class="black-text">Calendário Escolar</a></li>
  </ul>
<!-- -->

<!-- Section Escolher a UGS-->
<div class="section container z-depth-0" style="padding-bottom: 68px; margin-top: 15px;">
  <div class="center-align">
      <h5 style="text-transform: uppercase;">Mestrado em Finanças e Mercados Financeiros</h5> 
  </div>
  <div class="center" style="margin-top: 50px; margin-bottom: 50px;">
    <img class="circle" src="../../assets/img/messani.jpg" style="width: 120px; height: 120px; border: 3px solid teal;">
    <h5>Carlos Messani</h5>
    <p>Decano da FCEE</p>
  </div>
  <!-- Conteúdo -->
  <div>

    <div>
      <h5 class="center-align">Regime de Admissão</h5>
      <blockquote>Poderão inscrever-se no Mestrado em Gestão de Empresas, na especialidade de Finanças e Mercados Financeiros ministrado pela UGS os candidatos detentores de licenciatura em Gestão Comercial e Marketing, Organização e Gestão de Empresas, Economia ou Gestão de Empresas, e licenciatura em Ciências Tecnológicas.
      Dá-se preferência a candidatos com formação de nível superior nos domínios da gestão, economia e outras áreas científicas afins, factor que pode facultar uma formação avançada e fortemente profissionalizante.
      </blockquote>  
    </div>

    <div>
      <h5 class="center-align">Saídas Profissionais</h5>
      <blockquote>As competências científicas e técnicas fornecidas pelo Mestrado Gestão de Empresas na especialidade de Finanças e Mercados Financeiros, habilitam os quadros que completem com sucesso esta formação, a desempenhar funções especializadas nas seguintes áreas:
                  <br><br>
                  Banca;<br>
                  Seguros;<br>
                  Organismos Económicos e Financeiros nacionais e internacionais;<br>
                  Gabinetes de Estudos Económicos e Operadores nacionais e internacionais nos Mercados Financeiros;<br>
                  Gabinetes e Serviços de Consultoria Financeira e de Investimentos;<br>
                  Ensino e investigação.
      </blockquote>  
    </div>

    <div>
      <h5 class="center-align">Apresentação</h5>
      <blockquote>
        O Mestrado em Gestão de Empresas na especialidade de Finanças e Mercados Financeiros, desenvolve-se na sequência da Licenciatura em Organização e Gestão de Empresas e visa completar a formação académica correspondente ao primeiro ciclo de graduação, aprofundando e alargando conhecimentos adquiridos na área das finanças empresariais que influenciam e condicionam decisivamente as actividades económicas exercidas pelas organizações.     
      </blockquote>  
    </div>
    
    <div>
      <h5 class="center-align">Objectivos</h5>
      <blockquote>
        O Mestrado em Gestão de Empresas na especialidade de Finanças e Mercados Financeiros ministrado pela Universidade Gregório Semedo, desenvolve-se na sequência da Licenciatura em Organização e Gestão de Empresas que esta Universidade oferece desde 2004 e visa completar a formação académica correspondente ao primeiro ciclo de graduação, aprofundando e alargando conhecimentos adquiridos na área das finanças empresariais que influenciam e condicionam decisivamente as actividades económicas exercidas pelas organizações.
        <br><br>
        Centrando-se no aprofundamento de conhecimentos sobre as principais características dos mercados financeiros internacionais e sobre como estas características se adaptam à realidade angolana, os participantes deste curso irão adquirir conhecimentos abrangentes sobre as mais importantes ferramentas e conceitos relacionados com a avaliação de investimentos e a gestão de portfólios, e de como estes processos se integram nos códigos de ética e no tecido legal existentes.
        <br><br>
        Durante o curso proporcionar-se-á aos participantes uma formação sólida nos domínios da análise financeira e da gestão de investimentos, com uma dimensão nacional e internacional, através de sessões presenciais em sala, de aulas práticas e de períodos alargados de estudo dirigido, investigação efectuada a título individual e elaboração de trabalhos para avaliação. Estas três vertentes formativas irão constituir a principal fonte de conhecimento formal e combinarão um conjunto de metodologias pedagógicas que assegurem o equilíbrio ideal entre a aquisição de conceitos e a aplicação dos mesmos à realidade.
        <br><br>
        De salientar que constitui uma das características do presente curso, a introdução de uma componente dominantemente prática de formação através da participação de responsáveis do sector financeiro em seminários especializados a realizar durante o período de formação. A formação diferenciada que se pretende conceder em domínios complementares aos que integram a Licenciatura, abrem possibilidades de carreira profissional em áreas empresariais em franca expansão e que exigem alta diferenciação.
        <br><br>
        A UGS dispõe de um corpo docente próprio qualificado nas diversas áreas científicas, que alia o rigor científico e profissionalismo a uma vasta experiência de gestão e consultoria de empresas, fazendo com que este curso constitua um programa de sólida preparação técnica e de valorização profissional.
        <br><br>
        Complementarmente, a UGS conta com a colaboração de docentes de outras Instituições de Ensino Superior e quadros superiores de instituições e empresas, o que lhe permite garantir um elevado nível de qualidade do curso.
      </blockquote>  
    </div>

    <div>
      <h5 class="center-align">Planos de Estudo</h5>

      <!-- 1 ano-->
      <div class="row">

        <!-- 1 semestre-->
        <div class="col s12 m6 l6">
          <table class="highlight">
            <thead>
              <tr class="blue white-text">
                  <th>1º Ano</th>
                  <th>Semestre</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Economia de Empresa</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Introdução às Organizações e a Gestão</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Novas Tecnologias na Gestão</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Introdução aos Métodos Financeiros</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Contabilidade Financeira</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Noções de Cálculo Financeiro e Estatísitca para Finanças</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Finanças Corporativas</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Metodologia de Investigação Científica</td>
                <td>1º Semestre</td>
              </tr>
            </tbody>
          </table>  
        </div>

        <!-- 2 semestre-->
        <div class="col s12 m6 l6">
          <table class="highlight">
            <thead>
              <tr class="blue white-text">
                  <th>1º Ano</th>
                  <th>Semestre</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Introdução ao Direito dos Valores Mobiliários</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Finanças Comportamenitais</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Instrumentos de Dívida</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Instrumentos de Capital Próprio</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Derivados Financeiros</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Gestão de Carteiras</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Corporate Governance</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Ética e Regulação dos Mercados Financeiros</td>
                <td>2º Semestre</td>
              </tr>
            </tbody>
          </table>  
        </div>
      </div>
      <!-- -->

      <!-- 2 ano-->
      <div class="row">

        <!-- 1 semestre-->
        <div class="col s12 m6 l6">
          <table class="highlight">
            <thead>
              <tr class="blue white-text">
                  <th>2º Ano</th>
                  <th>Semestre</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Elaboração do Projecto de Dissertação</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Desenvolvimento da Investigação Orientada</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Estágio</td>
                <td>1º Semestre</td>
              </tr>
            </tbody>
          </table>  
        </div>

        <!-- 2 semestre-->
        <div class="col s12 m6 l6">
          <table class="highlight">
            <thead>
              <tr class="blue white-text">
                  <th>2º Ano</th>
                  <th>Semestre</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Desenvolvimento da Investigação Orientada</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Divulgação dos Resultados</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Elaboração e Defesa da Dissertação</td>
                <td>2º Semestre</td>
              </tr>
            </tbody>
          </table>  
        </div>
      </div>
      <!-- -->

    </div>

  </div>
</div>

<!-- Footer -->
<footer class="page-footer cyan darken-3">
          <div class="container">
            <div class="row">
              <div class="col l12 s12 center">
                <a href=""><i class="fa fa-facebook small white-text"></i></a>
        <a href=""><i class="fa fa-whatsapp small white-text"></i></a>
        <a href=""><i class="fa fa-google small white-text"></i></a>
        <a href=""><i class="fa fa-instagram small white-text"></i></a>
        <a href=""><i class="fa fa-envelope small white-text"></i></a>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container white-text center">
            Copyright © Garcia Tandela 2019. Todos os direitos reservados.
            </div>
          </div>
</footer>




<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/76eb4f9ef1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="../../assets/js/ugs.js"></script>
</body>
</html>