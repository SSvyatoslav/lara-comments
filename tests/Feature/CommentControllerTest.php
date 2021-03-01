<?php

namespace Tests\Feature;

use App\Comment;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    // тесты с базой данных

    public function testIndex()
    {
        $response = $this->get('/comments');


        $response
            ->assertOk()
            ->assertStatus(200);
    }

}
