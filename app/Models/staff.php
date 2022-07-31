<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class staff extends Model
{
        use Translatable;
    protected $translatable = [
        'name',
        'department',
        'description'
    ];
    protected $table = "staff";
    protected $fillable = [
        'name',
        'department',
        'description',
        'image',
        'active'
    ];
}
