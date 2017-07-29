<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo','kilapy Money')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="stylesheet" href="{{ asset('./css/bootstrap.css')}}" media="screen">
    <link rel="stylesheet" href="{{ asset('../assets/css/custom.min.css')}}">
    <link rel="stylesheet" href="{{ asset('./css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('./css/kilapy.css')}}">
    <link rel="stylesheet" href="{{ asset('./css/datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('./css/datepicker.css')}}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="navbar navbar-default navbar-fixed-top">
    <div style="padding: 0;margin: 0;width: 200px;height: 40px;float: left;"><img src=".././img/logo.PNG" style="float: left;margin-top: 6px;" width="40">
    <a href="../" class="navbar-brand" style="float: left;"><b>Kilapy Money</b> </a>
    </div>

      <div class="container" style="margin-right: 0;">
        <div class="navbar-header">

          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li>
              <a href="#"> <i class="fa fa-street-view"></i> Simulação</a>
            </li>
                         <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="fa fa-calendar-o"></i> Requisitos <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                <li><a href="#">Investimento</a></li>
                <li class="divider"></li>
                <li><a href="#">Emprestimo</a></li>

              </ul>
            </li>
             <li>
              <a href="#"> <i class="fa fa-street-view"></i>Dicas de Investimento</a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="fa fa-eye"></i> Sobre <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                <li><a href="{{ route('sobre')}}">Plataforma</a></li>
                <li class="divider"></li>
                <li><a href="#">Sociedade M2G investimento</a></li>

              </ul>
            </li>
           <!--- <li>
              <a href="#/"> <i class="fa fa-handshake-o"></i> Proposta para Investimento</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-random"></i> Trocais Cambias</a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="fa fa-calendar-o"></i> Soluções <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                <li><a href="#"> Soluções</a></li>
                <li class="divider"></li>
                <li><a href="#">Pedidos</a></li>
                <li><a href="#">Publicidade</a></li>

              </ul>
            </li> -->
          </ul>

          <ul class="nav navbar-nav navbar-right" >
<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Conta <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                <li><a href="{{ route('sobre')}}">Minha conta</a></li>
                <li class="divider"></li>
                <li><a href="#">Sair</a></li>

              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>


    <div class="container container-fluid text-center" style="min-height: 100%;margin: 0;width: 98.5%; padding: 0;">



      <div class="page-header" id="banner" style="min-height: 100%;" >

      @yield('conteudo')

    </div>
    </div>
    <footer class="navbar-default footer" style="position: relative;bottom: 0;margin: 0;width: 100%; padding: 0;" >
      <div class="container">
<p>nada</p>

</div>
    </footer>


    <script src="{{ asset('./js/jquery-1.10.2.min.js')}}"></script>
    <script src="{{ asset('./js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('./js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ asset('../assets/js/custom.js')}}"></script>

    <script>/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/\>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body>
</html>