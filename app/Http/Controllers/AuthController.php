<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function store(Request $request){
        /***********validate input*******/


        /***********Extract Data*******/
        $first_name=$request->input("first_name");
        $email=$request->input("email");
        $password=$request->input("password");

        /***********apply business logic*******/



        /***********Response*******/
        $response=[
            'msg'=>'User signed up successfully',
            'error'=>'0'
        ];


        return response()->json($response,200);

    }

    public function signin(Request $request){
        /***********validate input*******/


        /***********Extract Data*******/
        $email=$request->input("email");
        $password=$request->input("password");

        /***********apply business logic*******/



        /***********Response*******/


        return response()->json([
            "token"=>'foushToken',
            "msg"=>'sign in successfully',
            "error"=>'0'
        ],200);


    }
}
