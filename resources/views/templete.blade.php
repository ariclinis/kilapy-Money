<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo','Kilapy Money')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="{{ asset('./css/bootstrap.css')}}" media="screen">
    <link rel="stylesheet" href="{{ asset('../assets/css/custom.min.css')}}">
    <link rel="stylesheet" href="{{ asset('./css/font-awesome.min.css')}}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
    <div style="padding: 0;margin: 0;width: 200px;height: 40px;float: left;"><img src="./img/logo.PNG" style="float: left;margin-top: 6px;" width="40">
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
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download"> <i class="fa fa-street-view"></i> Simulação <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                <li><a href="#">Simulação de empréstimo.</a></li>
                <li class="divider"></li>
                <li><a href="#">Simulação de investimo</a></li>

              </ul>
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

          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('register') }}" target="_blank"><i class="fa fa-check-square-o"></i> Cadastre-se</a></li>
            <li><a href="{{ route('login') }}"><i class="fa fa-user"></i> Entrar</a></li>
          </ul>

        </div>
      </div>
    </div>


    <div class="container" style="min-height: 100%;margin: 0;width: 98.9%; padding: 0;">



      <div class="page-header" id="banner" style="min-height: 100%;" >

      @yield('conteudo')

    </div>
    </div>
    <footer class="navbar-default footer" style="position: relative;bottom: 0;margin: 0;width: 100%; padding: 0;" >
      <div class="container">


        <table class="table">
         <thead>
      <tr>
        <th> <span class="text-muted"><h3>Porquê Nós?</h3> </span>
        </th>
          <th>
          <span class="text-muted"><h3>Contactos</h3> </span>
          </th>
          <th>
            <span class="text-muted"><h3>Siga-nos</h3> </span>
          </th>
      </tr>
         </thead>
         <tbody>
      <tr>
        <td><span class="text-muted">Os melhores</span></td>
        <td><span class="text-muted">9xxxxxxx</span></td>
        <td><span class="text-muted"><i class="fa fa-facebook-official" aria-hidden="true"></i>
 Facebook</span></td>
      </tr>
      <tr>
        <td><span class="text-muted">sem medo</span></td>
        <td><span class="text-muted">norada</span></td>
        <td><span class="text-muted"><i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter</span></td>
      </tr>
      <tr>
        <td><span class="text-muted">blablabla</span></td>
        <td><span class="text-muted">mary@m2g.com</span></td>
        <td><span class="text-muted"><i class="fa fa-instagram" aria-hidden="true"></i> Instagrem</span></td>
      </tr>
    </tbody>
        </table>

    </footer>


    <script src="{{ asset('./js/jquery-1.10.2.min.js')}}"></script>
    <script src="{{ asset('./js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('../assets/js/custom.js')}}"></script>
    <script>/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/\>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body>
</html>