<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = ['usuario','password','rol'];

    protected $hidden = ['password'];

    public function getAuthPassword()
    {
        return $this->password;
    }

    public $timestamps = false;
}
