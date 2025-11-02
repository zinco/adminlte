
@extends('adminlte::page') 

<!--titudo que  aparece na aba do navegador -->
@section('title','Cadastro Usuário')



@section('content_headr')
    <h1>Cadastro Usuário</h1>
@stop
@section('content')
 <!-- Conteudo da pagina --> 

<h1>Lista de usuários</h1>



<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th> 
                         <div class="col-md-4"></div>
                         <div class="col-md-4">
                             {!!html()->a(route('user.create'), 'Novo Usuário' )->class('btn btn-block bg-gradient-success btn-sm' ) !!}
                              Usuários excluidos {{$usuariosExcluidos->count()}}
                         </div>
                         <div class="col-md-4"></div>
                        
                    </tr>
                  </thead>
                  <tbody>
                   
                     @forelse($usuarios as $user)

                      <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->created_at}}</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>
                        <div class="row">
                            <div class="col-md-4">
                             {{html()->a( route('user.show', ['id' => $user->id]), 'ver')->class('btn btn-block bg-gradient-primary btn-sm')}}
                            </div>
                            <div class="col-md-4">
                                 {{html()->a( route('user.edit', ['id' => $user->id]), 'Editar')->class('btn btn-block bg-gradient-info btn-sm')}}
                            </div>
                            <div class="col-md-4">
                                @include('user.formExcluir')
                               
                            </div>
                        </div>


                      </td>
                    </tr>

                    @empty

                        <h1>Nenhum usuário cadastrado.</h1>

                    @endforelse



                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>








   
   

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>console.log("HI!")</script>
@stop