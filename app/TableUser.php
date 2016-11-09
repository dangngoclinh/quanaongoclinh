<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TableUser extends Model
{
    protected $table = 'table_user';

    protected $fillable = [
    	'username', 'password', 'ten', 'dienthoai', 'email', 'diachi', 'congtry', 'country', 'city', 'role'
    ]

    protected $hidden = [
    	'password'
    ]
}
