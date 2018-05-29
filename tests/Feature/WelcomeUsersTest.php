<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
  /** @test */
  function it_welcomes_users_with_nickname()
  {
      $this->get('/saludo/gerardo/g3r4rd2')
      ->assertStatus(200)
      ->assertSee('Bienvenido Gerardo, tu apodo es g3r4rd2 Ex:Doble index');
  }

  /** @test */
  function it_welcomes_users_without_nickname()
  {
      $this->get('/saludo/gerardo')
      ->assertStatus(200)
      ->assertSee('Bienvenido Gerardo ...No tienes apodo Ex:Doble index');
  }
}
