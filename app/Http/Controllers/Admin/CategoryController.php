<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\TableProductCat;
use Illuminate\Http\Request;

/**
* CategoryController
* Date: Wed Nov  2 04:37:02 2016
* By: Liam Dang
*/	
class CategoryController extends AdminBaseController
{
	public function index(Request $request)
	{
		if($request->isMethod('post'))
		{
			
		}
		$this->data['cats'] = TableProductCat::all();
		return view('admin.category.index', $this->data);
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