<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Ucenec extends Model
{
    protected $table = 'ucenec';

    protected  $fillable = ['id', 'imeUcenec', 'priimekUcenc', 'spol', 'emailNaslov', 'naslov', 'datumRojstva', 'status', 'users_id', 'posta_postanStevilka', 'telefon', 'opisUcenca', 'fotografija' ];


    public function posta()
    {
        return $this->belongsTo('App\Model\Posta', 'posta_postanStevilka', 'postanStevilka');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'users_id', 'id');
    }

    public function selekcije()
    {
        return $this->belongsToMany('App\Model\Selekcije', 'selekcije_ucenec', 'ucenec_id', 'selekcije_id')->withTimestamps();;
    }

    public function userucenec()
    {
        return $this->belongsToMany('App\User', 'user_ucenec', 'ucenec_id', 'users_id');
    }
}
