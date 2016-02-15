<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ucenecposebnosti extends Model
{
    protected $table = 'ucenecposebnosti';

    protected  $fillable = ['id', 'posebnost', 'statusPosebnosti', 'obrazlozitev', 'ucenec_id', 'users_id' ];

    public function ucenec()
    {
        return $this->belongsTo('App\Model\Ucenec', 'ucenec_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'users_id', 'id');
    }

}
