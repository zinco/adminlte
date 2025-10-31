               
               
                ANOTAÇÕES DAS AULAS



*********************************************************************************************

3 - Laravel 12 - Instalção e configuracao admintlte

comandos:
    npm install
    npm run dev


link para instalação do Adminlte:
    https://jeroennoten.github.io/Laravel-AdminLTE/sections/overview/installation.html

diretorio para adicionar o NPM as variaves de ambiente:
    C:\Program Files\nodejs\node_modules\npm

                <!-- codigo php da pagina exemplo:  -->

                @extends('adminlte::page') 

                @section('title','Cadastro Usuário')

                @section('content_headr')
                    <h1>Cadastro Usuário</h1>
                @stop
                @section('content')
                


                @stop

                @section('css')
                    <link rel="stylesheet" href="/css/admin_custom.css">
                @stop

                @section('js')
                <script>console.log("HI!")</script>
                @stop

*****************************************************************************************************

   4 - Laravel 12 - Lista formatada de usuários 
        Exbimos uma lista formatada dos usuários
        criamos os botoes com a extensão spatie html (comando para instalar: composer require spatie/laravel-html)




*****************************************************************************************************

5  - Laravel 12 - Restrição de acesso

        Restrigimos o acesso a apenas usuarios logados,

