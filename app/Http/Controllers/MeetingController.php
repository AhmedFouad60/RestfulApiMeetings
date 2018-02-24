<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetingController extends Controller
{

    public function __construct()
    {
       // $this->middleware('name');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "It works";
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

        $title=$request->input('title');
        $description=$request->input('description');
        $time=$request->input('time');
        $user_id=$request->input('user_id');

        /***********apply business logic*******/



        /***********Response*******/

        $meeting=[
            'title'=>$title,
            'description'=>$description,
            'time'=>$time,
            'user_id'=>$user_id,
            'view_meeting'=>[
                'href'=>'api/v1/meeting/1',
                'method'=>'GET'
            ]
        ];

        $response=[

        ];






        return "It works";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Request
        //validate input
        //Extract Data
        //apply business logic
        //Response



        return "It works";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Request
        //validate input
        //Extract Data
        //apply business logic
        //Response


        return "It works";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Request
        //validate input
        //Extract Data
        //apply business logic
        //Response



        return "It works";
    }
}
