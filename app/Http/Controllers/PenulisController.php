<?php

namespace App\Http\Controllers;

use App\Models\penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
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
    public function store(penulis $penulis,Request $request)
    {
        $penulis = new penulis;

        $penulis->id_useraccess = $request->id_useraccess;
        $penulis->name = $request->name;
        $penulis->email = $request->email;
        $penulis->foto = $request->foto;
        $penulis->telepon = $request->telepon;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function show(penulis $penulis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function edit(penulis $penulis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penulis $penulis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function destroy(penulis $penulis)
    {
        //
    }
}
