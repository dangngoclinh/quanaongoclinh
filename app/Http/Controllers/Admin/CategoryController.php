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