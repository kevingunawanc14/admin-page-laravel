<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $primarykey = 'id_user';
    protected $fillable = ['nama','alamat','email','status','password'];

}

