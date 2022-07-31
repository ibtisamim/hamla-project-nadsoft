<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Getinvolved extends Model
{
    use Translatable;
    protected $translatable = [
        'description','excerpt'
    ];
    protected $table = "getinvolveds";
    protected $fillable = [
        'description',
        'excerpt',
        'images'
    ];
}
