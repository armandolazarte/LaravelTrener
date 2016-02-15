<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Words extends Model
{
    protected $table = 'words';

    protected  $fillable = ['id', 'words'];

    public $timestamps = false;
}
