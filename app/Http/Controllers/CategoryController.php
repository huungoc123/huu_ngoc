<?php

namespace App\Http\Controllers;

use App\Categorys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public $validateRule = [
        'title' => 'required|min:3|max:191',
    ];

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $filter = [];
        $orderBy    = $request->input('_order_by', 'created_at');
        $orderType  = $request->input('_order_type', 'DESC');
        $keyword    = $request->input('keyword', '');

        if ($keyword) {
            $filter['keyword'] = $keyword;
        }

        $categorys = Categorys::search($filter, $orderBy, $orderType, false)->paginate(5);

        return view('categorys.index')
            ->with('category_counts', Categorys::categoryCount())
            ->with('orderBy', $orderBy)
            ->with('orderType', $orderType)
            ->with('categorys',$categorys);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id, Request $request)
    {
//        $this->authorize('edit', User::class);

        $category = Categorys::find($id);

        return view('categorys.edit')
            ->with('category', $category);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create(Request $request)
    {
//        $this->authorize('create', User::class);

        return view('categorys.form');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $category = new Categorys();
//        $this->authorize('store', User::class);

        $validator = Validator::make($request->all(), $this->validateRule);
        $category->fill($request->all());

        if ($validator->fails()) {
            return redirect('categorys/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            $category->save();
            return redirect('categorys/')->with('message', 'Thư mục tạo thành công');
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update($id, Request $request)
    {
        $category = Categorys::where('id', '=', $id)->first();

//        $this->authorize('update', User::class);
        $validator = Validator::make($request->all(), $this->validateRule);

        if ($validator->fails()) {
            return redirect('categorys/edit')
                ->withErrors($validator)
                ->withInput();
        } else {

            $category->update($request->all());
            return redirect('categorys/')->with('message', 'Thư mục sửa thành công');
        }
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function destroy($id, Request $request)
    {
        $item = Categorys::find($id);

        $item->delete();

        return response()->json([
            'success' => 'Tin xóa thành công!'
        ]);
    }
}
