<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    use SoftDeletes;

    /*changed here */
    protected $fillable = [
        'name', 'detail'
    ];
    /*changed here */
}
