<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\TableProductCat;
use App\TableProductList;
use Illuminate\Http\Request;
use App\Http\Requests\TableProductCatPost;

/**
* CategoryController
* Date: Wed Nov  2 04:37:02 2016
* By: Liam Dang
*/	
class CategoryController extends AdminBaseController
{
	public function index()
	{
		$this->data['value'] = array(
				'ten' => '',
				'tenkhongdau' => '',
				'keyword' => 'keywo'
			);
		$this->data['cats']  = TableProductCat::all();
		$this->data['lists'] = TableProductList::all();
		return view('admin.category.index', $this->data);
	}

	public function store(TableProductCatPost $request)
	{
		$cat              = new TableProductCat();
		$cat->id_list     = $request->id_list;
		$cat->ten         = $request->ten;
		$cat->keyword     = $request->keyword;
		$cat->description = $request->description;
		if($request->has('tenkhongdau'))
		{
			$cat->tenkhongdau = str_slug($request->tenkhongdau);
		}
		else 
		{
			$cat->tenkhongdau = str_slug($cat->ten);
		}
		$cat->save();
		return redirect()->route('admincategory');
	}

	public function edit($id)
	{
		return view('admin.category.edit', $this->data);
	}

	public function delete(Request $request)
	{
		if($request->has('id'))
		{
			$cat = TableProductCat::find($request->id);
			if($cat->count() > 0)
			{
				$cat->delete();
				return response()->json(['result' => true]);
			}
		}
		return response()->json(['result' => false]);
	}
}