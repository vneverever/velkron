<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function domainName(){
        return $this->hasOne('App/Domain');
    }

    public function accountBalance(){
        return $this->hasOne('App/Balance');
    }

    public function accountPaid(){
        return $this->hasOne('App/Paid');
    }

    public function clicksMonth(){
        return $this->hasOne('App/Domain');
    }
}
