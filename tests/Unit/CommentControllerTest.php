<?php

namespace Tests\Unit;

use App\Comment;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentControllerTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testIndex()
    {

        $this->comment_id = Comment::create([
            'body' => 'test2 ',
            'parent_id' => 0
        ])->id;

        $response = $this->get('/comments');


        $response->assertStatus(200);

       DB::delete('delete from comments where id =?', [$this->comment_id]);
    }

    /**
     * тест создание страницы и редиректа
     */

    public function testStore()
    {
        $response = $this->call('POST', 'comments', array(
            '_token' => csrf_token(),
            'body' => 'test body'
        ));

        DB::table('comments')
            ->orderBy('id', 'desc')
            ->limit(1)->delete();

        $response->assertStatus(302);
    }

    /**
     * Тестирование наличия создания
     */
    public function testCreate()
    {
        $response = $this->get('/comments');
        $response->assertSee('class="form-control exampleFormControlTextarea1"');
    }


    /**
     * Тестирование отображение страницы с редактированием
     *
     */

    public function testEdit()
    {
        $comment_id = Comment::create([
            'body' => 'test ',
            'parent_id' => 0
        ])->id;

        $response = $this->get("/comments/$comment_id/edit");

        DB::delete('delete from comments where id =?', [$comment_id]);

        $response->assertStatus(200);
    }

    /**
     * тестирование обновления
     */

    public function testUpdate()
    {
        $comment_id = Comment::create([
            'body' => 'test ',
            'parent_id' => 0
        ])->id;

        /*$response = $this->call('PUT', "/comments/$comment_id" , array(
            'request' => 'request',
            'id' => $comment_id
        ));*/

        DB::table('comments')
            ->where('id', $comment_id)
            ->update(['body' => Str::random(40)]);


        DB::delete('delete from comments where id =?', [$comment_id]);

       // $response->assertRedirect('/comments');

        $this->json('put', "comments/$comment_id", array(
            'request' => 'request',
            'id' => $comment_id
        ))->assertRedirect('/comments');


    }

    /**
     *
     * Тестирование удаления
     */

    public function testDelete()
    {
        $this->comment_id = Comment::create([
            'body' => 'test ',
            'parent_id' => 0
        ])->id;

        $this->json('delete', "comments/$this->comment_id", array(
            'id' => $this->comment_id
        ))->assertStatus(302);

    }
}
