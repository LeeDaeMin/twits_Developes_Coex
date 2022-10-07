<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    public function create(Request $request){


        try{

            
            $request -> validate([
                
                'email' => 'required|integer',
                'password' => 'required|integer',
                'name' => 'required|string',
                'phone' => 'required|string'
                
            ]);
            
            $user = User::create([
                
                'email' => $request->email,
                'password' => $request->password,
                'name' => $request->name,
                'phone' => $request->phone
                
            ]);
        
            return response() -> json($user,200);
    
        }catch(\Exception $e){

            return response() -> json([
                'error' => $e -> getMessage()
            ],404);

        }

    }

    public function index(){

        try{

            $users = User::all();
            
            return response() -> json($users,200); 

        }catch(\Exception $e){

            return response() -> json([
                'error' => $e -> getMessage()
            ],404);

        }

    }

    public function show($id){

        try{

            $user = User::find($id);

            return response() -> json($user,200);

        }catch(\Exception $e){

            return response() -> json([
                'error' => $e -> getMessage()
            ],404);

        }

    }

    public function update(Request $request, $id){

        try{

            $request = $request -> all();

            $user = User::find($id) ;

            if(!$user){

                return 'User Not Found';

            }else{

                $user -> update($request);

            }
            
            return response() -> json($user,200);

        }catch(\Exception $e){

            return response() -> json([
                'error' => $e -> getMessage()
            ],404);

        }

    }

    public function delete($id){
        
        try{

            $user = User::find($id) ;

            if(!$user){

                return 'User Not Found';

            }else{

                $user -> destroy($id);
                return $user;

            }
            
            return response() -> json($user,200);

        }catch(\Exception $e){

            return response() -> json([
                'error' => $e -> getMessage()
            ],404);

        }


    }
}
