<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    /**
     * Retorna o usuário dono deste documento
     * 
     * @return  \App\User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
