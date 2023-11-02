<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Students;

class Student extends Model
{

    use HasFactory;

    // define model attributes to make mass assignable
    protected $fillable = ['nama', 'nim', 'email', 'jurusan'];
    
}


