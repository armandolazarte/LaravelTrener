<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Posta extends Model
{
    protected $table = 'posta';

    protected  $fillable = ['postanStevilka', 'nazivPoste'];

    public $timestamps = false;
}
