
@extends('adminlte::page') 

<!--titudo que  aparece na aba do navegador -->
@section('title',$usuario->name)



@section('content_headr')
    <h1>Cadastro Usuário</h1>
@stop
@section('content')
 <!-- Conteudo da pagina --> 




<div class="row">

    <div class="col-md-3">

<div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                <!--  <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture"> -->
                </div>

                <h3 class="profile-username text-center">{{$usuario->name}}</h3>

                <p class="text-muted text-center">{{$usuario->email}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Data de registro</b> <a class="float-right">{{$usuario->created_at}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Ultima modificação</b> <a class="float-right">{{$usuario->updated_at}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

               
                 {{html()->a( route('user.index'), 'Usuários')->class('btn btn-block bg-gradient-primary btn-sm')}}
              </div>
              <!-- /.card-body -->
            </div>



    </div>

</div>





@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css"> 
@stop

@section('js')
<script>console.log("HI!")</script>
@stop