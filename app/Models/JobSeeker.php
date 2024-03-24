<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    protected $fillable=["User_id","cv"];
    use HasFactory;
    function user(){
        return $this->morphOne(User::class,"userable");
    }
}
