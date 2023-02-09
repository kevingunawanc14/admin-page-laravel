<?php

namespace App\Models;



class coba 
{   
    private static $data =

    [
    ["angka" => 1
    ,"nama" => "a"],
    ["angka" => 2
    ,"nama" => "b"],
    ["angka" => 3
    ,"nama" => "c"]
    ];

    public static function all(){
        return self::$data;
    }

}
