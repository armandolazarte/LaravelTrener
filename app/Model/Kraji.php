<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kraji extends Model
{
    protected $table = 'kraji';

    protected  $fillable = ['id', 'nazivKraja'];

    public $timestamps = false;
}
