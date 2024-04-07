<?php

namespace App\Http\Controllers;

use App\Models\ShortLinks;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Hash;

class ShortLinkController extends Controller
{
    function GetShortLink($url){
        $https = "https://";
        
        $urlHasHttp = str_starts_with($url,$https);

        if(!$urlHasHttp)
            str_pad($url,8,$https,STR_PAD_LEFT);

        $origin_url = "origin_url";

        $link =  ShortLinks::where($origin_url,$url);

        $exists = $link->count() > 0;

        if($exists){
            $link = $link->first();

            return $link->origin_url;
        }

        $hash = $this->GenerateHash($url);
        $newShortname = $this->GenerateNewUrl($hash);
        $baseUrl = Env::get("APP_URL");

        try {
            $link = ShortLinks::create([
                "origin_url" => $url,
                "short_name" => $baseUrl.$newShortname,
                "hashed" => $hash,
                "created_at" => new DateTime(),
                "updated_at" => null
            ]);
    
        } catch (\Throwable $th) {
            throw $th;
        }

        return $baseUrl.$link->short_name;
    }
    public function GenerateHash($url){

        $randomNum = random_int(0,PHP_INT_MAX); 
        $urlHashed = Hash::make($url.$randomNum); 
        return $urlHashed;

    }
    public function GenerateNewUrl($hash){
  
        $arr = array_reverse(str_split($hash)); 
        $cutted = array_splice($arr,8);
        return join("",$arr) ;
    }
}
