<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

/**
* AdminBaseController
* Date: 11/2/2016 10:38:12 AM
* By: Liam Dang
*/
class AdminBaseController extends Controller
{
	protected $data = array();

	public function __construct()
	{
		$this->data['breadcrumb'] = array('home');
		$this->data['title'] = '';
	}
}
