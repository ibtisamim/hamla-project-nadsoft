<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use TCG\Voyager\Traits\Translatable;

class Homeslider extends Model
{
    /*
    use Translatable;
    protected $translatable = [
        'description',
        'title',
        'image'
    ];*/
    protected $table = "homesliders";
    protected $fillable = [
        'title',
        'description',
        'active',
        'image',
        'lang'
    ];
}
