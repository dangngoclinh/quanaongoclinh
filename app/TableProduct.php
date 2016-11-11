<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TableProduct extends Model
{
    protected $guarded = [
        'id'
    ];

    protected $table = 'table_product';

    protected $fillable = [
    	'id_list', 
    	'id_cat', 
    	'id_item', 
    	'noibat', 
    	'spbc', 
    	'photo', 
    	'thumb', 
    	'ten', 
    	'size',
    	'masp',
    	'tenkhongdau', 
    	'gia',
    	'mota', 
    	'noidung', 
    	'meta', 
    	'description', 
    	'photo', 
    	'thumb', 
    	'stt', 
    	'hienthi'
    ];
}