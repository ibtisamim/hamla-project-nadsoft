<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscribenewsletter extends Model
{
    protected $table = "subscribenewsletters";
    protected $fillable = [
        'name',
        'email'
    ];
}
