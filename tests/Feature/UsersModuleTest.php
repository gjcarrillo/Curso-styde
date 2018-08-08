<?php

namespace tests\Feature;
use App\User;
use tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{

    /** @test */
    function it_show_the_users_list()
    {

        factory(User::class)->create([
            'name'=>'Joel'
        ]);

        factory(User::class)->create([
            'name'=>'Eliza'
        ]);

        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('usuarios')
        ->assertSee('Joel')
        ->assertSee('Eliza');
    }

    /** @test */
    function it_shows_a_default_message_if_the_users_list_is_empty()
    {
        DB:table('users')->truncate();
        $this->get('/usuarios')
        // $this->get('/usuarios?empty')
        ->assertStatus(200)
        ->assertSee('No hay Usuarios Regitrados');
    }

    // /** @test */
    // function it_loads_the_users_details_page()
    // {
    //     $this->get('/usuarios/5')
    //         ->assertStatus(200)
    //         ->assertSee('Mostrando detalles del usuario: 5');
    // }

    // /** @test */
    // function it_loads_the_news_users_page()
    // {
    //     $this->get('/usuarios/nuevo')
    //         ->assertStatus(200)
    //         ->assertSee('Crear Nuevo Usuario');
    // }


    // /** @test */
    // function it_loads_edit_users_page()
    // {
    //     $this->get('/usuarios/22/edit')
    //         ->assertStatus(200)
    //         ->assertSee('Editar Usuario: 22');
    //
    // }



}
