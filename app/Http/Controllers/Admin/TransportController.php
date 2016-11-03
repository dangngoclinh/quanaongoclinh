<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;

/**
* TransportController
*/
class TransportController extends AdminBaseController
{
	public function index()
	{
		return view('admin.transport.index', $this->data);
	}

	public function add()
	{
		return view('admin.transport.add', $this->data);
	}
}