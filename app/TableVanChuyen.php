<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TableVanChuyen extends Model
{
    protected $table = 'table_vanchuyen';

    protected $fillable = [
    	'id', 'ten', 'sdt', 'diachi'
    ]
}
