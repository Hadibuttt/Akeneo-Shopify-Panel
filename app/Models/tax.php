<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tax extends Model
{
    use HasFactory;
    protected $table='tax';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
