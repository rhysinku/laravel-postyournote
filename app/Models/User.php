<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;   

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = 
    ['username','role', 'email', 'password'];

    public function post(){
        return $this->hasMany(Post::class);
    }


    // Cast some attribute
    protected function casts(): array{
        return [
            'password' => 'hashed'
        ];
    }
}