<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{


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
        $meeting=[
            'title'=>'title',
            'description'=>'description',
            'time'=>'time',
            'user_id'=>'user_id',
            'view_meeting'=>[
                'href'=>'api/v1/meeting/1',
                'method'=>'GET'
            ]
        ];

        $user=[
            'first_name'=>'first_name'
        ];


        /***********Response*******/

        $response=[
            'msg'=>'User Registered to the Meeting',
            'meeting'=>$meeting,
            'user'=>$user,
            'unregister'=>[
                'href'=>'api/v1/meeting/registration/1',
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

        /***********validate input*******/


        /***********Extract Data*******/
        

        /***********apply business logic*******/
        $meeting=[
            'title'=>'title',
            'description'=>'description',
            'time'=>'time',
            'user_id'=>'user_id',
            'view_meeting'=>[
                'href'=>'api/v1/meeting/1',
                'method'=>'GET'
            ]
        ];

        $user=[
            'first_name'=>'first_name'
        ];


        /***********Response*******/

        $response=[
            'msg'=>'User Registered to the Meeting',
            'meeting'=>$meeting,
            'user'=>$user,
            'register'=>[
                'href'=>'api/v1/meeting/registration/1',
                'method'=>'POST'
            ]

        ];



        return response()->json($response,200);
    }
}
