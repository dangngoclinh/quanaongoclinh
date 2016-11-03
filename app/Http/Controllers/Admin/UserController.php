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
		return view('admin.user.index', $this->data);
	}

	public function edit($id)
	{
		return view('admin.user.edit', $this->data);
	}

	public function delete($id)
	{

	}

	public function add()
	{
		return view('admin.user.add', $this->data);
	}

	public function shop() 
	{
		return view('admin.user.index', $this->data);
	}

	public function partner() 
	{
		return view('admin.user.index', $this->data);
	}
}