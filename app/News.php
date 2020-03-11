<?php

namespace App;

use App\Categorys;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    protected $table = "category_types";

    protected $fillable = ['categorys_id', 'title', 'description'];

    public function category()
    {
        return $this->belongsTo(Categorys::class, 'categorys_id', 'id');
    }

    public static function newCount()
    {
        return DB::table('category_types')->count();
    }

    public static function getNews()
    {
        return DB::table('category_types')->get();
    }

    public static function getSelectCategory()
    {
        $categorys = DB::table('categorys')->get();

        return $categorys;
    }

    public static function search($filter = [], $orderBy = 'ID', $orderType = 'DESC')
    {
        $query = self::select('*')->orderBy($orderBy, $orderType);

        if (isset($filter['keyword']) && $filter['keyword']) {
            $query->where('title', 'LIKE', "%" . $filter['keyword'] . "%");
        }

        if (isset($filter['categorys_id'])) {
            $query->where('categorys_id', $filter['categorys_id']);
        }

        return $query;
    }
}
