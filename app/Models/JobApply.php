<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApply extends Model
{
    protected $fillable=["job_detail_id","job_Seeker_id"];

    use HasFactory;
    
}
