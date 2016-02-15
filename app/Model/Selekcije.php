<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Selekcije extends Model
{
    protected $table = 'selekcije';

    protected  $fillable = ['id', 'nazivSelekcije', 'obrazlozitev', 'starostSelekcije', 'klub_id', 'statusSelekcije', 'racun_id' ];

    public function klub()
    {
        return $this->belongsTo('App\Model\Klub');
    }


    public function ucitelj()
    {
        return $this->belongsToMany('App\Model\Ucitelj', 'selekcija_ucitelj','selekcije_id', 'ucitelj_id');
    }

    public function ucenec()
    {
        return $this->belongsToMany('App\Model\Ucenec', 'selekcije_ucenec','selekcije_id', 'ucenec_id');
    }

    public function racun()
    {
        return $this->belongsTo('App\Model\Tekociracun');
    }

}
