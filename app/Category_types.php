<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categorys;

class Category_types extends Model
{
    protected $table = "category_types";

    public function category()
    {
        return $this->hasMany(Categorys::class, 'categorys_id', 'id');
    }
}
