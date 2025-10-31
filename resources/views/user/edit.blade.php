
@extends('adminlte::page') 

<!--titudo que  aparece na aba do navegador -->
@section('title','Cadastro Usuário')



@section('content_headr')
    <h1>Cadastro Usuário</h1>
@stop
@section('content')
 <!-- Conteudo da pagina --> 



   {!! html()->form('PUT', route('user.update',$usuario->id))->open()   !!}

        <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">

        <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Formulário de edição de usuário </h3>
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
    {!! html()->form()->close()  !!}



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>console.log("HI!")</script>
@stop