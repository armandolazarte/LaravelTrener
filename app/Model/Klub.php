<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Klub extends Model
{
    protected $table = 'klub';


    public function posta()
    {
        return $this->belongsTo('App\Model\Posta', 'posta_postanStevilka', 'postanStevilka');
    }

    public function selekcijes(){
        return $this->hasMany('App\Model\Selekcije');
    }
}
