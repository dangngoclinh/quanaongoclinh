<?php 
namespace App\Library\Facebook;

use Facebook\Facebook;

/**
* MyFacebook
*/
class MyFacebook extends Facebook
{
	private $app_id = '717374085072369';
	private $app_secret = '5ac995a23e4387ce82d0c1c277be62c3';
	private $default_graph_version = 'v2.8';

	public function __construct()
	{
		parent::__construct(array('app_id' => $this->app_id, 
									'app_secret' => $this->app_secret,
									'default_graph_version' => $this->default_graph_version,
									'persistent_data_handler' => new MyPersistentDataHandler(),));
	}

	public static function getPermissions()
	{
		return array('email', 
			'public_profile', 
			'user_friends', 
			'user_birthday',
			'publish_actions',
			'publish_pages',
			'user_managed_groups');
	}
}