<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class KkTest extends TestCase
{ 
    public function testRegisterSuccess(){
        $this->post('api/Kk', [
            'kk_id' => 1108012008980001,
            'alamat' => 'KEBUN BARU',
        ])->assertStatus(201)
        ->assertJson([
            "data" => [
                'kk_id' => 1108012008980001,
                'alamat' => 'KEBUN BARU', 
            ]
            ]);
        
    }
    public function testRegisterFailed(){

    }
    public function testRegisterAlreadyExists(){

    }
}
