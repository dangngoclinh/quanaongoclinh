<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;
use App\TableProduct;
use App\TableProductCat;
use App\TableProductList;
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
		if($request->has('masp') || $request->has('ten') || $request->has('gianhonhat') || $request->has('gialonnhat'))
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
		$this->data['title']     = 'Quản Lý Sản Phẩm';
		$this->data['pagetitle'] = 'Quản Lý Sản Phẩm';
		return view('admin.product.index', $this->data);
	}

	public function span(Request $request)
	{
		$this->data['products'] = TableProduct::where('hienthi', '=', 0)->orderBy('id', 'desc')->paginate($this->paginate);
		$this->data['title']     = 'Quản Lý Sản Phẩm';
		$this->data['pagetitle'] = 'Sản Phẩm Ẩn ';
		$this->data['boxtitle'] = 'Sản Phẩm Ẩn';
		return view('admin.product.index', $this->data);
	}

	public function spgiamgia(Request $request)
	{
		$this->data['products'] = TableProduct::where('giamgia', '=', 1)->orderBy('id', 'desc')->paginate($this->paginate);
		$this->data['title']     = 'Quản Lý Sản Phẩm';
		$this->data['pagetitle'] = 'Quản Lý Giảm Giá';
		return view('admin.product.index', $this->data);
	}

	public function sphethang(Request $request)
	{
		$this->data['products'] = TableProduct::where('hethang', '=', 0)->orderBy('id', 'desc')->paginate($this->paginate);
		$this->data['title']     = 'Quản Lý Sản Phẩm';
		$this->data['pagetitle'] = 'Quản Lý Sản Phẩm';
		return view('admin.product.index', $this->data);
	}

	public function edit($id)
	{
		return view('admin.product.edit', $this->data);

	}

	public function delete(Request $request)
	{
		if($request->has('id'))
		{
			$product = TableProduct::find($request->id);
			if($product->count() > 0)
			{
				$product->hienthi = 0;
				$product->save();
				return response()->json(['status' => true]);
			}
		}
		return response()->json(['status' => false]);
	}

	public function add()
	{
		$this->data['lists'] = TableProductList::all();
		return view('admin.product.add', $this->data);
	}

	public function getCats(Request $request)
	{
		$cats = TableProductCat::where('id_list', $request->id)->get();
		if($cats->count() > 0)
		{
			return response()->json(['status' => true, 'cats' => $cats]);
		}
		return response()->json(['status' => false]);
	}

	public function action(Request $request)
	{
		$product = TableProduct::find($request->id);

		switch($request->action)
		{
			case "noibat":
				//return $product->toJson();
				$value = 0;
				if($product->noibat == 0) {
					$value = 1;
				}
				$product->noibat = $value;
				$product->save();
				return response()->json(['result' => true, 'action' => 'noibat', 'value' => $value]);
			break;
			case "banchay":
				$value = 0;
				if($product->spbc == 0) {
					$value = 1;
				}
				$product->spbc = $value;
				$product->save();
				return response()->json(['result' => true, 'action' => 'banchay', 'value' => $value]);
			break;
			case "conhang":
				$value = 0;
				if($product->conhang == 0) {
					$value = 1;
				}
				$product->conhang = $value;
				$product->save();
				return response()->json(['result' => true, 'action' => 'conhang', 'value' => $value]);
			break;
			case "giamgia":
				$value = 0;
				if($product->giamgia == 0) {
					$value = 1;
				}
				$product->giamgia = $value;
				$product->save();
				return response()->json(['result' => true, 'action' => 'giamgia', 'value' => $value]);
			break;
			case "hienthi":
				$value = 0;
				if($product->hienthi == 0) {
					$value = 1;
				}
				$product->hienthi = $value;
				$product->save();
				return response()->json(['result' => true, 'action' => 'hienthi', 'value' => $value]);
			break;
		}
		return response()->json(['result' => false, 'id' => $request->id,  'action' => $request->action]);
	}
}