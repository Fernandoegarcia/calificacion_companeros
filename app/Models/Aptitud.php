<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aptitud extends Model
{
    use HasFactory;
    protected $fillable = ['aptitudes'];
    protected $table = 'aptitudes';

}
