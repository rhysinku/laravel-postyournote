<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = 
    ['username','role', 'email', 'password'];

    public function post(){
        return $this->hasMany(Post::class);
    }
}