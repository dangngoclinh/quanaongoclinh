<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
/**
* AdminController
*/
class AdminController extends AdminBaseController
{
	public function index()
	{
		return view('admin.index', $this->data);
	}

	public function login()
	{
		return view('admin.login');
	}
}