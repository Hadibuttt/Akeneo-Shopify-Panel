<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_images extends Model
{
    use HasFactory;
    protected $table='product_images';
    protected $primaryKey = 'pro_id';
    public $timestamps = false;
}
