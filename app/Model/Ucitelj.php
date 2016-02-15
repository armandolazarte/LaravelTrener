<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Ucitelj extends Model
{
    protected $table = 'ucitelj';

    protected  $fillable = ['id', 'imeUcitelj', 'priimekUcitelj', 'emailUcitelj', 'datumRojstva', 'naslov', 'telefon', 'posta_postanStevilka', 'opis_trener', 'licenca', 'fotografija', 'statusAktiven' ];

    public function orderbySername($query)
    {
        $query->orderBy('priimekUcitelj', 'ASC');
    }

    public function posta()
    {
        return $this->belongsTo('App\Model\Posta', 'posta_postanStevilka', 'postanStevilka');
    }

    public function leta($datum)
    {
        return Carbon::createFromDate(date("Y", strtotime($datum)), date("n", strtotime($datum)), date("j", strtotime($datum)))->age;
    }

    public function selekcije()
    {
        return $this->belongsToMany('App\Model\Selekcije', 'selekcija_ucitelj','ucitelj_id', 'selekcije_id');
    }

}
