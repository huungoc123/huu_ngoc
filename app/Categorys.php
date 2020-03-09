<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category_types;

class Categorys extends Model
{
    protected $table = "categorys";

    public function category_type()
    {
        return $this->belongsTo(Category_types::class, 'categorys_id', 'id');
    }}
