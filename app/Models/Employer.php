<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $fillable=["Company_name","address","logo","Phone","User_id"];

    use HasFactory;
    function user(){
        return $this->morphMany(User::class,"userable");
    }
}
