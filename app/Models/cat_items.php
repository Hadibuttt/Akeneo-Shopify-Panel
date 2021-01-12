<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cat_items extends Model
{
    use HasFactory;
    protected $table='cat_items';
    protected $primaryKey = 'cat_item_id';
}
