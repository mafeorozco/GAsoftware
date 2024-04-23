<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entidad extends Model
{
    protected $table = 'entidad';
    protected $fillable = ['name'];
}
