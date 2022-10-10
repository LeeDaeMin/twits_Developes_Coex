<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{

    public function index(){

        try{

            $user = User::all();
            
            return response() -> json($user,200); 

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

    public function create(Request $request ){

        

        $user = User::create([
            'name' =>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'phone'=>$request->phone,
        ]);
        return response()->json([
            'message' => 'User created successfully',
            'user' => $user
        ], 201);



    }

    public function update(Request $request, $id){

        try{

            $request = $request -> all();
            

            $user = User::find($id) ;

            if(!$user){

                return 'User Not Friend Not Found';

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



/* 

{
    public function create(Request $request){
        try{
            $request -> validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required'
            ]);
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]);
            return response() -> json($user,200);
    } catch(\Exception $e){
        return response() -> json([
            'Mal' => $e -> getMessage()
        ],404);
    }
    }

    public function index(){
        try{
            $users = User::all();
            return response() -> json($users,200);
    } catch(\Exception $e){
        return response() -> json([
            'error' => $e -> getMessage()
        ],404);
    }
    }

    public function show($id){
        try{
            $user = User::find($id);
            return response() -> json($user,200);
    } catch(\Exception $e){
        return response() -> json([
            'error' => $e -> getMessage()
        ],404);
    }
    }

    public function update(Request $request, $id){
        try{
            $request -> validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'password' => 'required|string'
            ]);
            $user = User::find($id);
            $user -> name = $request -> name;
            $user -> email = $request -> email;
            $user -> password = $request -> password;
            $user -> save();
            return response() -> json($user,200);
    } catch(\Exception $e){
        return response() -> json([
            'error' => $e -> getMessage()
        ],404);
    }
    }

    public function delete($id){
        try{
            $user = User::find($id);
            $user -> delete();
            return response() -> json($user,200);
    } catch(\Exception $e){
        return response() -> json([
            'error' => $e -> getMessage()
        ],404);
    }
    }
}
*/