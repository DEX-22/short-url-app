<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RedirectUrl extends Controller
{
    function redirect($url){
        try {
            return redirect()->away("https://".$url); 
        } catch (\Throwable $th) { 
            Log::info($th);
        }
    }
}
