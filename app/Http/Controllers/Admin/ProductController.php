<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;

/**
* ProductController
* Date: 11/2/2016 12:34:05 PM
* By: Liam Dang
*/	
class ProductController extends AdminBaseController
{

	public function index()
	{
		return view('admin.product.index', $this->data);
	}

	public function edit($id)
	{
		return view('admin.product.edit', $this->data);

	}

	public function delete($id)
	{
		return view('admin.product.delete', $this->data);
	}

	public function add()
	{
		//$this->data['id'] = 2;
		return view('admin.product.add', $this->data);
	}
}