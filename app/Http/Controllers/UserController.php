<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::all();
        



       return view('user.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save = User::create($request->all());


        if($save){
                return redirect()
                ->back()
                ->with('mensagem','Cadassto realizado com sucesso');


        }else{

            return redirect()
                ->back()
                ->with('mensagem','Nao foi possivel cadastrar.');

        }



       
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = User::findOrFail($id);



        return view('user.show',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $usuario = User::findOrFail($id);
           
        
        return view('user.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = $request->all();
        $user  = User::findOrFail($id);


        

            if($dados['password']){
                 $save =   $user->update($dados);
           
            }else{

                 $save =   $user->update($request->except(['password']));
            }




            if($save){
                return redirect()
                ->back()
                ->with('mensagem','Cadastro  atualizado com sucesso');


        }else{

            return redirect()
                ->back()
                ->with('mensagem','Nao foi possivel atualizar o cadastro cadastrar.');

        }
    



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
