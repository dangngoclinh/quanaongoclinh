<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\TableProductCat;
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
				'keyword' => 'keyword'
			);

		$this->data['cats'] = TableProductCat::where('parent_id', 0)->get();
		$this->data['title'] = 'Quản Lý Category';
		$this->data['pagetitle'] = 'Quản lý Categories';
		return view('admin.category.index', $this->data);
	}

	public function store(TableProductCatPost $request)
	{
		$cat              = new TableProductCat();
		$cat->parent_id   = $request->id_list;
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
		$cat = TableProductCat::find($id);
		if(  empty($cat) )
		{
			return response()->view('errors.503', [], 503);
		}
		$this->data['cat'] = $cat;
		$this->data['cats'] = TableProductCat::where('parent_id', 0)->get();
		return view('admin.category.edit', $this->data);
	}

	public function editAction(Request $request)
	{
		$this->validate($request, [
				'id' => 'required',
				'ten'         => 'required',
				'tenkhongdau' => 'required',
				'parent_id'   => 'required'
			]);

		$cat = TableProductCat::find($request->id);
		$cat->ten = $request->ten;
		$cat->tenkhongdau = str_slug($request->tenkhongdau);
		$cat->parent_id = $request->parent_id;
		$cat->save();
		
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