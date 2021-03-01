<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = DB::table('comments')->get()->groupBy('parent_id');
        return view('comments.index' , ['comments' => $comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('comments.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!$request->parent_id){
            $request->parent_id = 0;
        }

        Comment::create([
                'body' => $request->body,
                'parent_id' => $request->parent_id
            ]);
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       $comments_body = DB::table('comments')
                            ->select('body')
                            ->where('id', $id)
                            ->get();

       return view('comments.edit', ['id' => $id, 'body' => $comments_body[0]->body]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       /* dump($request);
        dd($id);*/

         DB::table('comments')
            ->where('id', $id)
            ->update(['body' => $request->comment_body]);
         return redirect('/comments');

    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // сначала удалим все дочерние элементы
        DB::delete('delete from comments where parent_id =?', [$id]);
        DB::delete('delete from comments where id =?', [$id]);
        return back();
    }
}
