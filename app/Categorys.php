<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\News;
use Illuminate\Support\Facades\DB;

class Categorys extends Model
{
    protected $table = "categorys";

    protected $fillable = ['title','description'];

    public function news()
    {
        return $this->hasMany(News::class, 'categorys_id', 'id');
    }

    public static function categoryCount()
    {
        return DB::table('categorys')->count();
    }

    public static function getCategorys()
    {
        return DB::table('categorys')->get();
    }

    public static function search($filter = [], $orderBy = 'ID', $orderType = 'DESC')
    {
        $query = self::select('*')->orderBy($orderBy, $orderType);

        if (isset($filter['keyword']) && $filter['keyword']){
            $query->where('title', 'LIKE', "%".$filter['keyword']."%");
        }

        return $query;
    }
}
