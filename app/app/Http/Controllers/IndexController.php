<?php

namespace App\Http\Controllers;

use App\Models\Stock;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $query = Stock::query();

        if(!empty($keyword))
        {
            $query->where('name','like','%'.$keyword.'%');
        }
        $data = $query->orderBy('name','desc')->paginate(6);
        return view('search')->with('data',$data)
        ->with('keyword',$keyword)
        ->with('message','検索結果');

    }
}
