<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;

/**
* CategoryController
* Date: Wed Nov  2 04:37:02 2016
* By: Liam Dang
*/	
class CategoryController extends AdminBaseController
{
	public function index()
	{
		return view('admin.category.index');
	}

	public function edit($id)
	{
		$data['id'] = $id;
		return view('admin.category.edit', $data);

	}

	public function delete($id)
	{
		$data['id'] = $id;
		return view('admin.category.delete', $data);
	}
}