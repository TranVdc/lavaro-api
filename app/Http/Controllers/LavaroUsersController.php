<?php

namespace App\Http\Controllers;

use App\Models\LavaroUsers;
use App\Http\Requests\StoreLavaroUsersRequest;
use App\Http\Requests\UpdateLavaroUsersRequest;
use Illuminate\Http\Request;

class LavaroUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLavaroUsersRequest $request)
    {
        $laravo_user = new LavaroUsers;
        $laravo_user->first_name = $request->first_name;
        $laravo_user->last_name = $request->last_name;
        $laravo_user->email = $request->email;
        $laravo_user->password = $request->password;
        $laravo_user->role = $request->role;
        $laravo_user->save();
        return response()->json(['message' => 'User added'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(LavaroUsers $lavaroUsers)
    {
        //
    }


    /**
     * Display the specified resource.
     */
    public function getByEmail($email)
    {
        $user = LavaroUsers::where('email', $email)->first();
        $json = ['status' => 0, 'message' => 'user not found'];
        if($user) {
            $json = ['status' => 1, 'message' => 'user found'];
        }
        return response()->json($json, 200);
    }

    public function getByEmailandPassword(Request $request) {
        $user = LavaroUsers::where('email', $request->email)->where('password', $request->password)->first();
        $json = ['status' => 0, 'data' => [], 'message' => 'user not found'];
        if($user) {
            $json = ['status' => 1, 'data' => $user, 'message' => 'user found'];
        }
        return response()->json($json, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LavaroUsers $lavaroUsers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLavaroUsersRequest $request, LavaroUsers $lavaroUsers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LavaroUsers $lavaroUsers)
    {
        //
    }
}
