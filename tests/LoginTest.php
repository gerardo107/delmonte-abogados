<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testSuccessLogin()
    {
        $this->visit('/login')
             ->type('gerchez93@gmail.com', 'email')
             ->type('141993gg', 'password')
             ->press('Login')
             ->seePageIs('/home');
    }
    public function testBadLogin()
    {
        $this->visit('/login')
             ->type('', 'email')
             ->type('', 'password')
             ->press('Login')
             ->see('The email field is required')
             ->see('The password field is required');
    }
    public function testBadEmailLogin()
    {
        $this->visit('/login')
             ->type('hola@hotmail.com', 'email')
             ->type('Assassin4', 'password')
             ->press('Login')
             ->see('These credentials do not match our records');
    }
    public function testBadPassLogin()
    {
        $this->visit('/login')
             ->type('adita0898@gmail.com', 'email')
             ->type('asdfadsf', 'password')
             ->press('Login')
             ->see('These credentials do not match our records');
    }
}