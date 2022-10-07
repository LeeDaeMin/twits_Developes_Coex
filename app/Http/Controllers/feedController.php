<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;

class feedController extends Controller
{
    
    public function create(Request $request){

        $request -> validate([

            'user_id' => 'required|integer'

        ]);

        $feed = Feed::create([

            'user_id' => $request->user_id

        ]);

        return response() -> json($feed);

    }

}
