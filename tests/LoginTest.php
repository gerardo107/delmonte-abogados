<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class LoginTest extends TestCase
{
    /**
     * Test para checar si se hace un correcto ingreso de credenciales en el 
     * login. 
     * la primera funcion es un test que es valido las demas son test de error.
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    //valid test
    public function testSuccessLogin()
    {
        $this->visit('/login')
             ->type('gerchez93@gmail.com', 'email')
             ->type('141993gg', 'password')
             ->press('Login')
             ->seePageIs('/home');
    }
     //invalid test
    public function testBadLogin()
    {
        $this->visit('/login')
             ->type('', 'email')
             ->type('', 'password')
             ->press('Login')
             ->see('The email field is required')
             ->see('The password field is required');
    }
     //invalid test
    public function testBadEmailLogin()
    {
        $this->visit('/login')
             ->type('hola@hotmail.com', 'email')
             ->type('Assassin4', 'password')
             ->press('Login')
             ->see('These credentials do not match our records');
    }
     //invalid test
    public function testBadPassLogin()
    {
        $this->visit('/login')
             ->type('adita0898@gmail.com', 'email')
             ->type('asdfadsf', 'password')
             ->press('Login')
             ->see('These credentials do not match our records');
    }
}