<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;



class AuthController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request){
        /***********validate input*******/

        $this->validate($request,[
            'first_name'=>'required|max:120',
            'email'=>'required|email'
        ]);



        /***********Extract Data*******/
        $first_name=$request->input("first_name");
        $email=$request->input("email");
        $password=$request->input("password");

        /***********apply business logic*******/
        $user=new User([
            'name'=>$first_name,
            'email'=>$email,
            'password'=>bcrypt($password)
        ]);

        if($user->save()){ #save the user to the database

            $user->sigin=[
                'href'=>'api/v1/user/signin',
                'method'=>'POST',
                'params'=>'email,password'
            ];
            /***********Response OK *******/
            $response=[
                'msg'=>'User signed up successfully',
                'error'=>'0',
                'user'=>$user
            ];
            return response()->json($response,200);

        }



        /***********Response*******/
        $response=[
            'msg'=>'An Error occurred',
            'error'=>'1'
        ];


        return response()->json($response,404);

    }

    public function signin(Request $request){
        /***********validate input*******/
       $this->validate($request,[
           'email'=>'required|email',
           'password'=>'required'
       ]);

        /***********Extract Data*******/
        $credentials=$request->only('email','password');

        /***********apply business logic*******/
        try{
            if (!$token = JWTAuth::attempt($credentials)){
                return response()->json(['msg'=>'Invalid credentials'],401);
            }

        }catch (JWTException $e){
            return response()->json(['msg'=>'could not create token'],500);
        }


        /***********Response*******/


        return response()->json([
            "token"=>$token,
            "msg"=>'sign in successfully',
            "error"=>'0'
        ],200);


    }
}
