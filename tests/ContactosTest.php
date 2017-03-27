<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ContactosTest extends TestCase
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
             ->visit('/contacto');
             ->visit('/contactosSys');
        
    }
     public function testNewMesage()
    {
        $this->visit('/contacto')
             ->type('gerardo', 'nombre')
             ->type('ger95@gmail.com', 'correo')
             ->type('consultoras AC', 'empresa')
             ->type('hola', 'comentario')
             ->press('RegistrarMensaje')
             ->seePageIs('/contacto');
    }
}