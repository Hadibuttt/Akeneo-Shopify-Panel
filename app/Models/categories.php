<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $table='categories';
    protected $primaryKey = 'cat_id';
    use HasFactory;
}