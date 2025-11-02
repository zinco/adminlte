{!! html()->form('post',route('user.destroy', $user->id))->open() !!}

    @csrf 
    @method('DELETE')

     {!! html()->button('Excluir')->class('btn btn-danger')->attribute('onclick', "return confirm('Tem certeza que deseja excluir?');")->type('submit')  !!}

     
     

    {!! html()->form()->close() !!}