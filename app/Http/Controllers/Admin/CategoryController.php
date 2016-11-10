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
		$this->data['cats']  = TableProductCat::all();
		$this->data['lists'] = TableProductList::all();
		return view('admin.category.index', $this->data);
	}

	public function store(TableProductCatPost $request)
	{
		$cat              = new TableProductCat();
		$cat->id_list     = $request->get('id_list');
		$cat->ten         = $request->get('ten');
		$cat->keyword     = $request->get('keyword');
		$cat->description = $request->get('description');
		if($request->has('tenkhongdau'))
		{
			$cat->tenkhongdau = $request->get('tenkhongdau');
		}
		else 
		{
			$cat->tenkhongdau = str_slug($cat->ten);
		}
		$cat->save();
		return redirect('admincategoryindex');
	}

	public function edit($id)
	{
		return view('admin.category.edit', $this->data);
	}

	public function delete($id)
	{
		return view('admin.category.delete', $this->data);
	}
}