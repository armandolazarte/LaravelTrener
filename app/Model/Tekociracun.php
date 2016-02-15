<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tekociracun extends Model
{
    protected $table = 'racun';

    protected  $fillable = ['id', 'stevilka', 'bic', 'iban', 'nazivBanke', 'naslovBanke', 'posta_postanStevilka','aktiven', 'naziv' ];

    public function posta()
    {
        return $this->belongsTo('App\Model\Posta', 'posta_postanStevilka', 'postanStevilka');
    }

}
