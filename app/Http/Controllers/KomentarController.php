<?php

namespace App\Http\Controllers;

use App\Models\komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
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
    public function store(komentar $komentar,Request $request)
    {
        $komentar = new komentar;

        $komentar->id_tulisan = $request->id_tulisan;
        $komentar->id_pembaca = $request->id_pembaca;
        $komentar->isi = $request->isi;

        $komentar->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function show(komentar $komentar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function edit(komentar $komentar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $komentar = komentar::find($id);

        
        $komentar->id_tulisan = $request->id_tulisan;
        $komentar->id_pembaca = $request->id_pembaca;
        $komentar->isi = $request->isi;

        $komentar->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function destroy(komentar $id)
    {
        $komentar = komentar::find($id);
    
        if(!$komentar){
            return response()->json(['message' => "The user with {$id} doesn't exist"], 404);
        }
        
        $komentar->delete();

        return response()->json(['data' => "The user with with id {$id} has been deleted"], 200);
    }
}
