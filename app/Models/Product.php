<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Product extends Authenticatable
{
    use HasFactory;

    protected $table = 'product';
    protected $primarykey = 'id';
    protected $fillable = ['nama','harga','deskripsi','image','link'];

    public function getAuthIdentifierName(){
        return 'id_user';
    }

    

}

