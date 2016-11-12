<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TableNewsCats extends Model
{
	protected $guarded = [
		'id'
	];

    protected $fillable = [
    	'ten', 'slug', 'parent_id', 'keyword', 'description', 'noidung'
    ];

    protected function cat()
    {
    	return $this->belongTo('App\TableNewsCats', 'parent_id', 'id')
    }
}
