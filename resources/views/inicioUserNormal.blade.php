
@extends('vendacompra/templete/templete')
@section('conteudo')
<br>
<ol class="breadcrumb">
  <li><a href="/">Início</a></li>
  <li class="active">...</li>
</ol>
  <div class="row content">
    <div class="col-sm-2 sidenav">
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
      <a href="http://mwonowaha.herokuapp.com/ajudas">
        <div class="panel-footer announcement-bottom">
          <div class="row">
            <div class="col-xs-6">
              <font color="red">Concluir activação da conta.</font>
            </div>
            <div class="col-xs-6 text-right">
              <i class="fa fa-arrow-circle-right"></i>
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
      <a href="http://mwonowaha.herokuapp.com/ajudas">
        <div class="panel-footer announcement-bottom">
          <div class="row">
            <div class="col-xs-6">
             <font color="red"> Concluir activação da conta.</font>
            </div>
            <div class="col-xs-6 text-right">
              <i class="fa fa-arrow-circle-right"></i>
            </div>
          </div>
        </div>
</a>    </div>
    </div>

</div>



      <!--- Termina Agora -->
    </div>
    <div class="col-sm-2 sidenav">
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