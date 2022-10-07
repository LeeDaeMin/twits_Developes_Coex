<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class commentController extends Controller
{
    public function create(Request $Request)
    {
        try{
            $Request -> validate([
                'user_id' => 'required|integer',
                'message' => 'required|string',
                'tweet_id' => 'required|integer'
            ]);
            $comment = Comment::create([
                'user_id' => $Request->user_id,
                'message' => $Request->message,
                'tweet_id' => $Request->tweet_id
            ]);
            return response() -> json($comment,200);
    } catch(\Exception $e){
        return response() -> json([
            'error' => $e -> getMessage()
        ],404);
    }
    }

    public function index(){
        try{
            $comments = Comment::all();
            return response() -> json($comments,200);
    } catch(\Exception $e){
        return response() -> json([
            'error' => $e -> getMessage()
        ],404);
    }
    }

    public function show($id){
        try{
            $comment = Comment::find($id);
            return response() -> json($comment,200);
    } catch(\Exception $e){
        return response() -> json([
            'error' => $e -> getMessage()
        ],404);
    }
    }

    public function update(Request $Request, $id){
        try{
            $Request -> validate([
                'user_id' => 'required|integer',
                'message' => 'required|string',
                'tweet_id' => 'required|integer'
            ]);
            $comment = Comment::find($id);
            $comment -> update([
                'user_id' => $Request->user_id,
                'message' => $Request->message,
                'tweet_id' => $Request->tweet_id
            ]);
            return response() -> json($comment,200);
    } catch(\Exception $e){
        return response() -> json([
            'error' => $e -> getMessage()
        ],404);
    }
    }

}


