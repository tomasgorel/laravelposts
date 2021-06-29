<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::factory()->create([
            'email' => 'don@don.lt',
        ]);
        $this->browse(function (Browser $browser) use ($user){
            $browser->visit('/login')
                   ->type('email', $user->email)
                    ->type('password', "password")
                    ->press('.btn')
                ->assertPathIs('/home');
            $browser->screenshot('login');
        });
    }
}
