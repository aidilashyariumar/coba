<?php

namespace App\Http\Controllers;

use App\Models\tulisan;
use Illuminate\Http\Request;

class TulisanController extends Controller
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
    public function store(tulisan $tulisan,Request $request)
    {
        $tulisan = new $tulisan;

        $tulisan->id_penulis = $request->id_penulis;
        $tulisan->id_label = $request->id_label;
        $tulisan->judul = $request->judul;
        $tulisan->isi = $request->isi;
        $tulisan->gambar = $request->gambar;
        $tulisan->status = $request->status;

        $tulisan->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tulisan  $tulisan
     * @return \Illuminate\Http\Response
     */
    public function show(tulisan $tulisan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tulisan  $tulisan
     * @return \Illuminate\Http\Response
     */
    public function edit(tulisan $tulisan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tulisan  $tulisan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tulisan $tulisan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tulisan  $tulisan
     * @return \Illuminate\Http\Response
     */
    public function destroy(tulisan $tulisan)
    {
        //
    }
}
