<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;

use App\Models\Post;

class Category extends Model
{
    use Translatable;

    protected $translatable = ['slug', 'name'];

    protected $table = 'categories';

    protected $fillable = ['slug', 'name' ,'id'];


/*
    public function posts()
    {
        return $this->hasMany(Voyager::modelClass('Post'))
            ->published()
            ->orderBy('created_at', 'DESC');
    }*/

    public function parentId()
    {
        return $this->belongsTo(self::class);
    }

   public function posts(){
     /*   return $this->belongsToMany('App\Models\Post','categories_posts','category_id','post_id');*/

       return $this->belongsToMany('App\Models\Post')->latest();
    }

  
}
