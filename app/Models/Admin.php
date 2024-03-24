<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable=["User_id"];
    use HasFactory;
    function user(){
        return $this->morphMany(User::class,"user");
    }
}
