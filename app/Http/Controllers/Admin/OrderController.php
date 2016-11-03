<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\MyBaseController;

/**
* OrderController
* Date: 11/2/2016 12:33:47 PM
* By: Liam Dang
*/	
class OrderController extends MyBaseController
{
	public function index()
	{
		return view('admin.order.index');
	}

	public function edit($id)
	{
		return view('admin.order.edit', $this->data);

	}

	public function delete($id)
	{
	}

	public function view($id) 
	{
		return view('admin.order.view', $this->data);
	}
}