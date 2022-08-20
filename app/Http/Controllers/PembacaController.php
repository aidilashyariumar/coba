<?php

namespace App\Http\Controllers;

use App\Models\pembaca;
use Illuminate\Http\Request;
use App\Http\Controllers\ResponseController as Reply;

class PembacaController extends Controller
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
    public function store(pembaca $pembaca,Request $request)
    {
        $pembaca = new pembaca;

        $pembaca->id_useraccess = $request->id_useraccess;
        $pembaca->name = $request->name;
        $pembaca->email = $request->email;
        $pembaca->foto = $request->foto;
        $pembaca->telepon = $request->telepon;

        $pembaca->save();

        return Reply::reply(200, true, $pembaca, 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pembaca  $pembaca
     * @return \Illuminate\Http\Response
     */
    public function show(pembaca $pembaca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pembaca  $pembaca
     * @return \Illuminate\Http\Response
     */
    public function edit(pembaca $pembaca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pembaca  $pembaca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pembaca $pembaca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pembaca  $pembaca
     * @return \Illuminate\Http\Response
     */
    public function destroy(pembaca $pembaca)
    {
        //
    }
}
