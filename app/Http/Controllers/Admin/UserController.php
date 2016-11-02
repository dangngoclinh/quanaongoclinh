<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;

/**
* UserController
* Date: 11/2/2016 12:40:28 PM
* By: Liam Dang
*/	
class UserController extends AdminBaseController
{
	public function index()
	{
		return view('admin.user.index');
	}

	public function edit($id)
	{
		$data['id'] = $id;
		return view('admin.user.edit', $data);

	}

	public function delete($id)
	{
		$data['id'] = $id;
	}

	public function add()
	{
		$data['id'] = $id;
		return view('admin.user.add', $data);
	}
}