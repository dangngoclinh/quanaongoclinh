<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;

/**
* NewsController
* Date: 11/2/2016 12:35:38 PM
* By: Liam Dang
*/	
class NewsController extends AdminBaseController
{
	public function index()
	{
		$this->data['title'] = "Tin Tức";
		return view('admin.news.index', $this->data);
	}

	public function edit($id)
	{
		$data['id'] = $id;
		return view('admin.news.edit', $this->data);

	}

	public function delete($id)
	{
		$data['id'] = $id;
	}

	public function add()
	{
		$this->data['title'] = "Thêm Tin Mới";
		return view('admin.news.add', $this->data);
	}

	public function guide()
	{
		return view('admin.news.index', $this->data);
	}
}