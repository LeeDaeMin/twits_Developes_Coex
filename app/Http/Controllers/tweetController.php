<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use App\Models\Tweet;
use Illuminate\Http\Request;

class tweetController extends Controller
{


    public function index(){
        try{
            $tweets = Tweet::all();
            return response() -> json($tweets,200);
    } catch(\Exception $e){
        return response() -> json([
            'error' => $e -> getMessage()
        ],404);
    }
    }

    public function show($id){
        try{
            $tweet = Tweet::find($id);
            return response() -> json($tweet,200);
    } catch(\Exception $e){
        return response() -> json([
            'error' => $e -> getMessage()
        ],404);
    }
    }

    public function create(Request $Request)
    {
        try
            {
                $Request -> validate([
                    'user_id' => 'required|integer',
                    'message' => 'required|string'
                ]);
                $tweet = Tweet::create([
                    'user_id' => $Request->user_id,
                    'message' => $Request->message
                ]);

                $feed = Feed::create([
                    'user_id' => $Request->user_id
                ]);

                return response() -> json($tweet,200);
            } 
                catch(\Exception $e)
            {
                return response() -> json([
                    'error' => $e -> getMessage()
                ],404);
            }   
    }

    public function update(Request $Request, $id){
        try{
            $Request -> validate([
                'user_id' => 'required|integer',
                'message' => 'required|string'
            ]);
            $tweet = Tweet::find($id);
            $tweet -> update([
                'user_id' => $Request->user_id,
                'message' => $Request->message
            ]);
            return response() -> json($tweet,200);

    } catch(\Exception $e){
        return response() -> json([
            'error' => $e -> getMessage()
        ],404);
    }
    }

    public function delete($id){
        try{
            $tweet = Tweet::find($id);
            $tweet -> delete();
            return response() -> json($tweet,200);
    } catch(\Exception $e){
        return response() -> json([
            'error' => $e -> getMessage()
        ],404);
    }
    }

    public function feed($id){
        try{
            $tweet = Tweet::find($id);
            $feed = $tweet -> feed;
            return response() -> json($feed,200);
    } catch(\Exception $e){
        return response() -> json([
            'error' => $e -> getMessage()
        ],404);
    }
    }

    public function comments($id){
        try{
            $tweet = Tweet::find($id);
            $comments = $tweet -> comments;
            return response() -> json($comments,200);
    } catch(\Exception $e){
        return response() -> json([
            'error' => $e -> getMessage()
        ],404);
    }
    }

    
}

