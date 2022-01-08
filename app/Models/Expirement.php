<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expirement extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','info','company','time'
    ];
}

