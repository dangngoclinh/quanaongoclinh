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
		$data['title'] = "Trang Chủ";

		return view('admin.index', $data);
	}

	public function login()
	{
		return view('admin.login');
	}
}