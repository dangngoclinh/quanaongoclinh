<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\MyBaseController;

/**
* NewsController
* Date: 11/2/2016 12:35:38 PM
* By: Liam Dang
*/	
class NewsController extends MyBaseController
{
	public function index()
	{
		return view('admin.news.index');
	}

	public function edit($id)
	{
		$data['id'] = $id;
		return view('admin.news.edit', $data);

	}

	public function delete($id)
	{
		$data['id'] = $id;
	}

	public function add()
	{
		$data['id'] = $id;
		return view('admin.news.add', $data);
	}
}