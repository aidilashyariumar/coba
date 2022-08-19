<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
   
    static function reply($code, $success, $data, $msg = null){
        $reply = [
            'success' => $success,
            'message' => $msg,
            'code'  => $code,
            'data' => $data
        ];
        return $reply;
    }
}
