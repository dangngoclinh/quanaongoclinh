<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminBaseController;

/**
* EmailController
* Date: 11/2/2016 7:51:30 PM
* By: Liam Dang
*/
class EmailController extends AdminBaseController
{
  public function index()
  {
    return view('admin.email.index', $this->data);
  }
}