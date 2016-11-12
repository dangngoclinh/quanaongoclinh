<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class TableProductCat extends Model
{
    protected $table = 'table_product_cat';

    protected $guarded = [
    	'id', 'parent_id'
    ];

    protected $fillable = [
    	'parent_id', 'ten', 'tenkhongdau', 'photo', 'thumb', 'stt', 'hienthi', 'keyword', 'description'
    ];

    public function cats()
    {
    	return $this->hasMany('App\TableProductCat', 'parent_id', 'id');
    }
}