<?php

namespace App\Http\Controllers;

use App\Meeting;
use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    public function __construct()
    {
        $this->middleware('jwt.auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /***********validate input*******/


        /***********Extract Data*******/
        $meeting_id=$request->input("meeting_id");
        $user_id=$request->input("user_id");

        /***********apply business logic*******/

        $meeting=Meeting::findOrFail($meeting_id);
        $user=User::findOrFail($user_id);


        $message=[
            'msg'=>'User Already Registered to the Meeting',
            'meeting'=>$meeting,
            'user'=>$user,
            'unregister'=>[
                'href'=>'api/v1/meeting/registration/'.$meeting->id,
                'method'=>'DELETE'
            ]];

        if ($meeting->users()->where('user_id',$user_id)->first()){
             return response()->json($message,404);
        }

        $user->meetings()->attach($meeting_id);


        /***********Response*******/

        $response=[
            'msg'=>'User Registered to the Meeting',
            'meeting'=>$meeting,
            'user'=>$user,
            'unregister'=>[
                'href'=>'api/v1/meeting/registration/'.$meeting_id,
                'method'=>'DELETE'
            ]

        ];



       return response()->json($response,200);
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $meeting=Meeting::findOrFail($id);

        if(! $user=JWTAuth::parseToken()->authenticate()){
            return response()->json(['msg'=>'user not found'],404);
        }

        if (!$meeting->users()->where('user_id',$user->id)->first()){

            /***********Response 404 *******/
            return response()->json(['msg'=>'user not registered for meeting ,update not successful'],404);
        }
     $meeting->users()->detach($user->id);

        /***********apply business logic*******/



        /***********Response*******/

        $response=[
            'msg'=>'User UnRegistered from the Meeting',
            'meeting'=>$meeting,
            'user'=>$user,
            'register'=>[
                'href'=>'api/v1/meeting/registration/'.$id,
                'method'=>'POST'
            ]

        ];



        return response()->json($response,200);
    }
}
