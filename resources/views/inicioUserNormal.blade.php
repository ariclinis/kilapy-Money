
@extends('vendacompra/templete/templete')
@section('conteudo')
<br>
<ol class="breadcrumb" >
  <li><a href="/">Início</a></li>
  <li class="active">...</li>
</ol>
  <div class="row content">

    <div class="col-sm-2 sidenav">

      <div class="list-group">
  <a href="#" class="list-group-item active">
    <i class="fa fa-university" aria-hidden="true"></i> Minha conta
  </a>
  <a href="#" class="list-group-item"><i class="fa fa-money" aria-hidden="true"></i> Conta Corrente</a>
  <a href="#" class="list-group-item"><i class="fa fa-pie-chart" aria-hidden="true"></i> Extracto de Conta</a>
  <a href="#" class="list-group-item"><i class="fa fa-sitemap" aria-hidden="true"></i></a>
  <a href="#" class="list-group-item"><i class="fa fa-balance-scale" aria-hidden="true"></i>Nossos Socios</a>
</div>
      <div class="list-group">
  <a href="#" class="list-group-item active">
    <i class="fa fa-university" aria-hidden="true"></i> Minha conta
  </a>
  <a href="#" class="list-group-item"><i class="fa fa-money" aria-hidden="true"></i> Investidores</a>
  <a href="#" class="list-group-item"><i class="fa fa-pie-chart" aria-hidden="true"></i> Emprestimos</a>
  <a href="#" class="list-group-item"><i class="fa fa-sitemap" aria-hidden="true"></i>
 A tua rede</a>
  <a href="#" class="list-group-item"><i class="fa fa-balance-scale" aria-hidden="true"></i>Nossos Socios</a>
</div>
    </div>
    <div class="col-sm-8 text-left">
      <!--- Menu do meio -->
      <div class="row">
  <div class="col-xs-12 col-sm-6">
    <div class="panel panel-info" >
      <div class="panel-heading" style="background-color: #2c3e50;">
        <div class="row">
          <div class="col-xs-6">
            <i class="fa  fa-users fa-5x"></i>
          </div>
          <div class="col-xs-6 text-right">
            <h1 class="announcement-heading">0</h1>
            <p class="announcement-text">Conta de Devedor</p>
          </div>
        </div>
      </div>
      <a href="#">
        <div class="panel-footer announcement-bottom">
          <div class="row">
            <div class="col-xs-8">
              <font color="red">Concluir activação da conta.</font>
            </div>
            <div class="col-xs-4 text-right">
              <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            </div>
          </div>
        </div>
</a>    </div>
    </div>

    <div class="col-xs-12 col-sm-6">
    <div class="panel panel-info">
      <div class="panel-heading" style="background-color: #2c3e50;">
        <div class="row">
          <div class="col-xs-6">
            <i class="fa fa-user-secret fa-5x"></i>
          </div>
          <div class="col-xs-6 text-right">
            <h1 class="announcement-heading">0</h1>
            <p class="announcement-text">Conta de Credor</p>
          </div>
        </div>
      </div>
      <a href="#">
        <div class="panel-footer announcement-bottom">
          <div class="row">
            <div class="col-xs-8">
             <font color="red"> Concluir activação da conta.</font>
            </div>
            <div class="col-xs-4 text-right">
              <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            </div>
          </div>
        </div>
</a>    </div>
    </div>

</div>

<!-- inicio da Listagem de emprestadores -->

<div class="panel panel-default">

  <div class="panel-heading">Encontra emprestimos proximo de ti</div>
  <div class="panel-body">
    <p>...</p>
  </div>


  <table class="table">
    ...
  </table>
</div>

<!--- Termina Listagem de emprestadores -->
      <!--- Termina Agora -->
    </div>
    <div class="col-sm-2 sidenav">

    <div class="thumbnail">
      <img src="./img/user.PNG" alt="...">
      <div class="caption">
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Carregue sua foto</a></p>
      </div>
    </div>

      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>
@endsection