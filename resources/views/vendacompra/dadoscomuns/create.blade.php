@extends('vendacompra.templete.templetevenda')
@section('conteudo')
<br>

<form>
<div class="row">
<div class="col-xs-12 col-sm-4">
<div class="panel panel-default">

  <div class="panel-heading">Dados Pessoais</div>

  <div class="panel-body">
                 <div class="input-group input-sm">
    <span class="input-group-addon">Nome Completo</span>
    <input id="mome" type="text" class="form-control" name="mone" placeholder="Obrigatório">
            </div>
            <div class="input-group input-sm">
    <span class="input-group-addon">Género</span>
    <select class="form-control input-sm" id="genero" name="genero">
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
            </select>
            </div>
            <div class="input-group input-sm">
        <span class="input-group-addon">Data Nascimento</span>
       <div class='input-group date' id='datetimepicker1'>
                    <input type='date' id="data_nasc" name="data_nasc" class="form-control input-sm" />

            </div>
</div>
            <div class="input-group input-sm">
                <span class="input-group-addon">Estado Civil</span>
                <select class="form-control input-sm" id="estado_civil">
                        <option value="Solteiro/a">Solteiro/a</option>
                        <option value="Casado/a">Casado/a</option>
                        <option value="Divorciado/a">Divorciado/a</option>
                        <option value="Viuvu/a">Viuvu/a</option>

                 </select>
            </div>

    <div class="input-group input-sm">
    <span class="input-group-addon">Nacionalidade</span>
    <select class="form-control input-sm" id="nacionalidade" name="nacionalidade">
                        <option value="Angolana">Angolana</option>
                        <option value="Outra">Outra</option>
    </select>
    </div>

    <div class="input-group input-sm">
        <span class="input-group-addon">Nº de identificação</span>
        <input type="text" class="form-control input-sm" id="n_bi" name="n_bi" placeholder="BI ou Passaporte">
    </div>
    <div class="input-group input-sm">
        <span class="input-group-addon">Data Emissão</span>
       <div class='input-group date' id='datetimepicker1'>
                    <input type='date' id="data_emissao" class="form-control input-sm" />

            </div>
</div>
    <div class="input-group input-sm">
        <span class="input-group-addon">NIF</span>
        <input type="text" class="form-control input-sm" id="nif" name="nif" placeholder="Nº de identificação fiscal">
    </div>
       <div class="input-group input-sm">
        <span class="input-group-addon">Provincia de Nascimento</span>
       <select class="form-control input-sm" id="provincia">
                         @foreach($provincias as $provincia)
                            <option value="{{$provincia->id}}">{{$provincia->des_provincia}}</option>
                            @endforeach
                 </select>
    </div>



    </div>
    </div>
    </div>
<div class="col-xs-12 col-sm-4">
<div class="panel panel-default">

  <div class="panel-heading">Dados Pessoais</div>

  <div class="panel-body">

  <div class="input-group input-sm">
    <span class="input-group-addon">Nº de Telemovel</span>
        <input type="text" class="form-control small input-sm" id="nome" name="nome" placeholder="Ex: 9XXXXXXXX">
            </div>
<div class="input-group input-sm">
    <span class="input-group-addon">Fixo</span>
        <input type="text" class="form-control small input-sm" id="fixo" name="fixo" placeholder="Opcional">
            </div>

            <div class="input-group input-sm">
    <span class="input-group-addon">E-mail</span>
        <input type="email" class="form-control input-sm" id="fax" name="fax" placeholder="Ex: kilapymoney@gmail.com">
            </div>

            <div class="input-group input-sm">
    <span class="input-group-addon">Provincia</span>
<select class="form-control input-sm" id="provincia" name="provincia">
                         @foreach($provincias as $provincia)
                            <option value="{{$provincia->id}}">{{$provincia->des_provincia}}</option>
                            @endforeach
                 </select>
                             </div>
                             <div class="input-group input-sm">
    <span class="input-group-addon">Bairro</span>
<select class="form-control input-sm" id="bairro" name="bairro">
                         @foreach($provincias as $provincia)
                            <option value="{{$provincia->id}}">{{$provincia->des_provincia}}</option>
                            @endforeach
                 </select>
                             </div>

                             <div class="input-group input-sm">
    <span class="input-group-addon">Municipio</span>
<select class="form-control input-sm" id="municipio" name="municipio">
                         @foreach($provincias as $provincia)
                            <option value="{{$provincia->id}}">{{$provincia->des_provincia}}</option>
                            @endforeach
                 </select>
                             </div>
</div>
  </div>
  </div>
  </div>
</div>



<div class="row">
<div class="col-xs-12 col-sm-4">

</div>
</div>


</form>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>


@endsection