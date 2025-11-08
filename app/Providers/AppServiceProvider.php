<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\Facades\Schema;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(Dispatcher $events): void
    {
        
 $events->listen(BuildingMenu::class, function (BuildingMenu $event) {

        $event->menu->add([//Titulo menu
            
            'header' => "ADMINISTRADOR"


        ]);
        //pagina inicial
         $event->menu->add([
            'text' => 'Site',
            'url'  => '/',  
            'icon' => 'fas fa-home',      


        ]);
        //botao usuario
         $event->menu->add([

            'text'   => "USUÁRiOS",
            'icon'   =>  'fa fa-user',
           
            'submenu' => 
            [

                [
                'text' => 'Listar',
                'route'  => 'user.index'

                ],
               [
                'text' => 'Cadastrar',
                'route'  => 'user.create'

                ],
            ],
          


        ]);


        //botao produto

          $event->menu->add([
            'text'   => "PRODUTOS",
         
           
            'submenu' => 
            [

                [
                'text' => 'Listar',
                'url'  => '#'

                ],
               [
                'text' => 'Cadastrar',
                'url'  => '#'

                ],
            ],



          ]);


          //vendas

           $event->menu->add([
            'text' => 'Vendas',
            'url'  => '#',        


        ]);
 });


    }
}
