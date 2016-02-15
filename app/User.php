<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'surname', 'email', 'password', 'status', 'role_id', 'ucitelj_id', 'words_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo('App\Model\Role');
    }

    public function ucenec()
    {
        return $this->belongsToMany('App\Model\Ucenec', 'selekcije_ucenec','ucenec_id', 'users_id');
    }

}
