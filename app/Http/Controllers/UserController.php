<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return User::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = auth()->user();
        if(!empty($request->user_first_name)) {
            $user->user_first_name = $request->user_first_name;
        }
        if(!empty($request->user_last_name)) {
            $user->user_last_name = $request->user_last_name;
        }
        if(!empty($request->user_street)) {
            $user->user_street = $request->user_street;
        }
        if(!empty($request->user_pcode)) {
            $user->user_pcode = $request->user_pcode;
        }
        if(!empty($request->user_city)) {
            $user->user_city = $request->user_city;
        }
        if(!empty($request->user_birthdate)) {
            $user->user_birthdate = $request->user_birthdate;
        }
        $user->save();
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return User::destroy($id);
    } 
}
