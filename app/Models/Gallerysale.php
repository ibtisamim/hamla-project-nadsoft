<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Gallerysale extends Model
{
    use Translatable;
    protected $translatable = [
        'description'
    ];
    protected $table = "gallerysales";
    protected $fillable = [
        'image',
        'description',
        'active'
    ];
}
