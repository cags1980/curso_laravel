<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUserTest extends TestCase
{
      /** @test*/
    public function it_welcome_users_with_nickname()
    {
        //$this->assertTrue(true);
        $this->get('/saludo/carlos/galeano')
        ->assertStatus(200)
        ->assertSee("Bienvenido Carlos, tu apodo es galeano");
    }

      /** @test*/
      public function it_welcome_users_without_nickname()
      {
          //$this->assertTrue(true);
          $this->get('/saludo/Carlos')
          ->assertStatus(200)
          ->assertSee("Bienvenido Carlos");
      }
}
