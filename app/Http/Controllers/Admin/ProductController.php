<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\TableProduct;
use Illuminate\Http\Request;

/**
* ProductController
* Date: 11/2/2016 12:34:05 PM
* By: Liam Dang
*/	
class ProductController extends AdminBaseController
{

	public function index(Request $request)
	{
		//If Search
		if($request->has('masp') || $request->has('ten'))
		{
			$where = array();
			if($request->has('masp'))
			{
				$where[] = ['masp', 'like', '%'.$request->get('masp').'%'];
			}
			if($request->has('ten'))
			{
				$where[] = ['ten', 'like', '%'.$request->get('ten').'%'];
			}
			if($request->has('gianhonhat'))
			{
				$where[] = ['gia', '>=', $request->get('gianhonhat')];
			}
			if($request->has('gialonnhat'))
			{
				$where[] = ['gia', '<=', $request->get('gialonnhat')];
			}
			$this->data['products'] = TableProduct::where($where)->orderBy('id', 'desc')->paginate($this->paginate);
			$this->data['products']->appends([
					'masp'       => $request->get('masp'),
					'ten'        => $request->get('ten'),
					'gianhonhat' => $request->get('gianhonhat'),
					'gialonhat'  => $request->get('gialonnhat')
				]);
		}
		else
		{
			$this->data['products'] = TableProduct::orderBy('id', 'desc')->paginate($this->paginate);
		}
		$this->data['title']     = 'Quan Ly Product';
		$this->data['pagetitle'] = 'Quan Ly San Pham';
		return view('admin.product.index', $this->data);
	}

	public function edit($id)
	{
		return view('admin.product.edit', $this->data);

	}

	public function delete($id)
	{
		return view('admin.product.delete', $this->data);
	}

	public function add()
	{
		//$this->data['id'] = 2;
		return view('admin.product.add', $this->data);
	}

	public function action(Request $request)
	{
		$product = TableProduct::find($request->id);
		switch($request->action)
		{
			case "noibat":
				$value = 0;
				if($product->noibat == 0) {
					$value = 1;
				}
				$product->noibat = 1;
				$product->save();
				return response()->json(['action' => 'noibat', 'value' => $value]);
			break;
			case "banchay":

			break;
			case "conhang":

			break;
			case "giamgia":

			break;
			case "hienthi":

			break;
		}
	}
}