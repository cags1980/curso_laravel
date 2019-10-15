<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test*/
   function it_loads_the_users_list_page()
    {
      $this->get('/usuarios')
          ->assertStatus(200)
          ->assertSee('Listado de usuarios')
          ->assertSee('Carlos')
          ->assertSee('Anabel')
          ;
    }
        /** @test*/
        function it_loads_the_users_list_page_empty()
        {
        $this->get('/usuarios?empty')
            ->assertStatus(200)
            ->assertSee('No hay Usuarios Registrados.') ;
        }
            
    
    /** @test*/
   function it_loads_the_users_details_page() {

    $this->get('/usuarios/5')
    ->assertStatus(200)
    ->assertSee("Mostrando detalle del usuario: 5");

   }
   
     /** @test*/
     function it_loads_the_new_users_page(){
        $this->withoutExceptionHandling();

         $this->get('usuarios/nuevo')
         ->assertStatus(200)
         ->assertSee("Crear nuevo usuario");
     }

}
