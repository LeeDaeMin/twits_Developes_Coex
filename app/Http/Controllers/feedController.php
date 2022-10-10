<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;

class feedController extends Controller
{

    
    public function create(Request $request){


        try{

            
            $request -> validate([
                
                'user_id' => 'integer'

                
            ]);
            
            $feed = Feed::create([
                
                'user_id' => $request->user_id
                
            ]);
        
            return response() -> json($feed,200);
    
        }catch(\Exception $e){

            return response() -> json([
                'error' => $e -> getMessage()
            ],404);

        }

    }

    public function index(){

        try{

            $feeds = Feed::all();
            
            return response() -> json($feeds,200); 

        }catch(\Exception $e){

            return response() -> json([
                'error' => $e -> getMessage()
            ],404);

        }

    }

    public function show($id){

        try{

            $feed = Feed::find($id);

            return response() -> json($feed,200);

        }catch(\Exception $e){

            return response() -> json([
                'error' => $e -> getMessage()
            ],404);

        }

    }

    public function update(Request $request, $id){

        try{

            $request = $request -> all();

            $feed = Feed::find($id) ;

            if(!$feed){

                return 'Feed Not Found';

            }else{

                $feed -> update($request);

            }
            
            return response() -> json($feed,200);

        }catch(\Exception $e){

            return response() -> json([
                'error' => $e -> getMessage()
            ],404);

        }

    }

    public function delete($id){
        
        try{

            $feed = Feed::find($id) ;

            if(!$feed){

                return 'Feed Not Found';

            }else{

                $feed -> destroy($id);
                return $feed;

            }
            
            return response() -> json($feed,200);

        }catch(\Exception $e){

            return response() -> json([
                'error' => $e -> getMessage()
            ],404);

        }


    }




}
