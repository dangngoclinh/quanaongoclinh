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
		$data['id'] = $id;
		return view('admin.order.edit', $data);

	}

	public function delete($id)
	{
		$data['id'] = $id;
		return view('admin.order.delete', $data);
	}

	public function view($id) 
	{
		$data['id'] = $id;
		return view('admin.order.view', $data);
	}
}