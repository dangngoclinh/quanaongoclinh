<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
/**
* AdminController
*/
class AdminController extends Controller
{
	
	function __construct()
	{
		# code...
	}

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