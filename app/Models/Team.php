<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'team';
    protected $primarykey = 'id';
    protected $fillable = ['nama','jabatan','deskripsi','linkedin','facebook','instagram','status'];


}
