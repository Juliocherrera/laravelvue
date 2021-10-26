<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;


class File extends Model
{
    

    public function users(){
        return $this->hasOne(User::class, 'id');
    }
}
