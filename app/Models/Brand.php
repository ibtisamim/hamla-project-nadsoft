<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Brand extends Model
{
    use Translatable;
    protected $translatable = [
        'description'
    ];
    protected $table = "brands";
    protected $fillable = [
        'image',
        'description',
        'active'
    ];
}
