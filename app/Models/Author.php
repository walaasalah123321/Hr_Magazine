<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable=["image","approved","bio","description","User_id"];
    use HasFactory;
    function user(){

        return $this->morphMany(User::class,"userable");
    }
}
