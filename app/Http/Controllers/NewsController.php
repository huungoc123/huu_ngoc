<?php

namespace App\Http\Controllers;

use App\Categorys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\News;

class NewsController extends Controller
{
    public $validateRule = [
        'title' => 'required|min:3|max:191',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = [];
        $orderBy    = $request->input('orderBy', 'created_at');
        $orderType  = $request->input('orderType', 'DESC');
        $keyword    = $request->input('keyword', '');
        $category_id    = $request->input('categorys', 0);

        if ($keyword) {
            $filter['keyword'] = $keyword;
        }

        if ($category_id) {
            $filter['categorys_id'] = $category_id;
        }

        $news = News::search($filter, $orderBy, $orderType)->paginate(5);

        return view('news.index')
            ->with('news_count', News::newCount())
            ->with('orderBy', $orderBy)
            ->with('orderType', $orderType)
            ->with('categorys', News::getSelectCategory())
            ->with('categorySelected', $category_id)
            ->with('news', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //        $this->authorize('create', User::class);

        return view('news.form')
            ->with('categorys', News::getSelectCategory());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = new News();
//        $this->authorize('store', User::class);

        $validator = Validator::make($request->all(), $this->validateRule);
        $new->fill($request->all());

        if ($validator->fails()) {
            return redirect('news/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            $new->save();
            return redirect('news/')->with('message', 'Tin tạo thành công');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //        $this->authorize('edit', User::class);

        $new = News::find($id);

        return view('news.edit')
            ->with('categorys', News::getSelectCategory())
            ->with('new', $new);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $new = News::find($id);

//        $this->authorize('update', User::class);
        $validator = Validator::make($request->all(), $this->validateRule);

        if ($validator->fails()) {
            return redirect('news/edit')
                ->withErrors($validator)
                ->withInput();
        } else {

            $new->update($request->all());
            return redirect('news/')->with('message', 'Tin sửa thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = News::find($id);

        $item->delete();

        return response()->json([
            'success' => 'Tin xóa thành công!'
        ]);
    }
}
