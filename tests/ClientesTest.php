<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ClientesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);

        $this->withSession(['foo' => 'bar'])
            ->visit('/clientesSys');
            ->visit('/clientesSys/create');
            ->visit('/clientesSys/edit');
         
    }
    public function testNewClient()
    {
        $this->visit('//clientesSys/create')
             ->type('gerardo', 'nombre')
             ->type('garcia', 'apellidoP')
             ->type('sanchez', 'apellidoM')
             ->type('ger95@gmail.com', 'correo')
             ->type('7201532', 'telefono')
             ->type('avenida Mexico #513', 'direccion')
             ->type('', 'rfc')
             ->press('RegistrarMensaje')
             ->seePageIs('//clientesSys/create');
    }
}
