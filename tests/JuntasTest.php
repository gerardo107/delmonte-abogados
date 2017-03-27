<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GastosTest extends TestCase
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
            ->visit('/juntasSys');
            ->visit('/juntasSys/create');
            ->visit('/juntasSys/edit');
         
    }
}
