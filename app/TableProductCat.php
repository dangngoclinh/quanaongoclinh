<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TableProductCat extends Model
{
	const CREATED_AT = 'ngaytao';
	const UPDATED_AT = 'ngaysua';

    protected $table = 'table_product_cat';

    protected $fillable = [
    	'id_list', 'ten', 'tenkhongdau', 'photo', 'thumb', 'stt', 'hienthi', 'keyword', 'description'
    ];

    public function tableproductlist()
    {
    	return $this->belongsTo('App\TableProductList', 'id_list');
    }
}