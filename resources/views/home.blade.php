@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Informação</div>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <link rel="stylesheet" href="{{ asset('./css/bootstrap.css')}}" media="screen">
                <link rel="stylesheet" href="{{ asset('../assets/css/custom.min.css')}}">
                <link rel="stylesheet" href="{{ asset('./css/font-awesome.min.css')}}">
                <div class="panel-body">
                    Já tem a sessão Inciada
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
