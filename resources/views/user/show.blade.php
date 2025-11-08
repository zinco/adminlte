
@extends('adminlte::page') 

<!--titudo que  aparece na aba do navegador -->
@section('title','Usuário ')



@section('content_headr')
    <h1>Cadastro Usuário</h1>
@stop
@section('content')
 <!-- Conteudo da pagina --> 
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <table class="table">
           <tr>
             <th>id</th>
            <td>{{ $usuario->id}}</td>
           </tr>
            <tr>
             <th>Nome</th>
            <td>{{ $usuario->name}}</td>
           </tr>
           <tr>
             <th>Email</th>
            <td>{{ $usuario->email}}</td>
           </tr>
           <tr>
             <th>Status</th>
            <td>{{ $usuario->status}}</td>
           </tr>
           <tr>
             <th>Descrição</th>
            <td>{{ $usuario->description}}</td>
           </tr>
           <tr>
             <th></th>
            <td>
                   {{html()->a( route('user.edit', ['id' => $usuario->id]), 'Excluir')->class('btn btn-block bg-gradient-danger btn-sm')}}

            </td>
           </tr>



        </table>




    </div>
    <div class="col-md-3"></div>



  </div>

 

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>console.log("HI!")</script>
@stop