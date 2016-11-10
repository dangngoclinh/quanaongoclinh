<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TableProductList extends Model
{
	const CREATED_AT = 'ngaytao';
	const UPDATED_AT = 'ngaysua';

    protected $table = 'table_product_list';

    protected $fillable = [
    	'ten', 'tenkhongdau', 'photo', 'thumb', 'stt', 'hienthi', 'keyword', 'description'
    ];    

    public function tableproductcat()
    {
    	return $this->hasMany('App\TableProductCat');
    }
}
