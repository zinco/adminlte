
@extends('adminlte::page') 

<!--titudo que  aparece na aba do navegador -->
@section('title','Formulrio de Usuário')



@section('content_headr')
    <h1>Formulário de Usuário</h1>
@stop
@section('content')
 <!-- Conteudo da pagina --> 

   {{html()->form('POST')->route('user.store')->open()}}  

   <div class="row">
<div class="col-md-3">

</div>
<div class="col-md-6">

        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Formulário de cadastro de  usuário </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                    @if(session('mensagem'))
                            <div class="alert alert-success">
                                {{ session('mensagem')}}

                            </div>

                    @endif
                 
                   
      
            @include('user.form')

    {{ html()->form()->close()}}


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>console.log("HI!")</script>
@stop