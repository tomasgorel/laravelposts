<?php

namespace Tests\Unit;

use Tests\TestCase; //pakeist del get

class CheckPathTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
       $response =  $this->get('/register');
       $response->assertStatus(200);
    }
}
