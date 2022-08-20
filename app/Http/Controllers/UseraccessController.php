<?php

namespace App\Http\Controllers;

use App\Models\useraccess;
use Illuminate\Http\Request;
use App\Http\Controllers\ResponseController as Reply;

class UseraccessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(useraccess $user,Request $request)
    {
        $user = new useraccess;

        $user->username = $request->username;
        $user->password = $request->password;
        $user->tipe_user = $request->tipe_user;

        $user->save();


        return Reply::reply(200, true, $user, 'Data berhasil ditambahkan');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\useraccess  $useraccess
     * @return \Illuminate\Http\Response
     */
    public function show(useraccess $useraccess)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\useraccess  $useraccess
     * @return \Illuminate\Http\Response
     */
    public function edit(useraccess $useraccess)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\useraccess  $useraccess
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, useraccess $useraccess)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\useraccess  $useraccess
     * @return \Illuminate\Http\Response
     */
    public function destroy(useraccess $useraccess)
    {
        //
    }
}
