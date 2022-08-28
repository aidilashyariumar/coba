<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\ResponseController as Reply;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = admin::all();
        return $admin;
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
    public function store(admin $admin , Request $request )
    {
        // return $request;
        
        $admin = new admin;

        $admin->id_useraccess = $request->id_useraccess;
        $admin->name = $request->name;
        $admin->foto = $request->file('foto')->store('blog-photo');
        $admin->telepon = $request->telepon;

        $admin->save();


       return response()->json($admin);
        // return Reply::reply(200, true, $admin, 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $admin = admin::find($id);
        
        $old_img = $admin->foto;
        Storage::delete($old_img);
        $admin->id_useraccess = $request->id_useraccess;
        $admin->name = $request->name;
        $admin->foto = $request->file('foto')->store('blog-photo');
        $admin->telepon = $request->telepon;

        $admin->update();

        return response()->json($admin);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $admin = admin::find($id);
    
        if(!$admin){
            return response()->json(['message' => "The user with {$id} doesn't exist"], 404);
        }
        
        $admin->delete();

        return response()->json(['data' => "The user with with id {$id} has been deleted"], 200);
    
    }
}
