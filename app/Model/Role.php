<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';

    protected  $fillable = ['id', 'roleName', 'roleValue' ];

    public $timestamps = false;
}
