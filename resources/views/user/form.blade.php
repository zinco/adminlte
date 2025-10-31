
                <div class="form-group">                   
                    {!! html()->label('Nome', 'name') !!}
                    {!! html()->text('name', $usuario->name ?? '' )->class('form-control')->placeholder('Digite um nome')  !!}

                  </div>  
                   <div class="form-group">                   
                    {!! html()->label('Email', 'email') !!}
                    {!! html()->text('email' , $usuario->email ?? '' )->class('form-control')->placeholder('email@email.com.br')  !!}

                  </div> 
                   <div class="form-group">                   
                    {!! html()->label('Senha', 'password') !!}
                    {!! html()->password('password')->class('form-control')->placeholder('Digite uma Senha')  !!}

                  </div>  
                  
                  <div class="form-group">                   
                    {!! html()->label('Descrição', 'description') !!}
                    {!! html()->textArea('description', $usuario->description ?? '' )->class('form-control')->placeholder('Digite um nome')  !!}

                  </div>  
              

                 

                    
                    
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">

                 

                  {!! html()->button('Enviar')->class('btn btn-primary')->type('submit')  !!}
                  {!! html()->button('Apagar')->class('btn btn-danger')->type('reset')  !!}
               
                </div>
              </form>
            </div>



</div>
<div class="col-md-3">


</div>


</div>