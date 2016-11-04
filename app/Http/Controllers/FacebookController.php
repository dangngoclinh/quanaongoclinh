<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\AdminBaseController;
use App\Library\MyFacebook;
use Redirect;

/**
* FacebookController
*/
class FacebookController extends AdminBaseController
{
	private $fb;

	public function __construct()
	{
		$this->fb = new MyFacebook();
	}

	public function index()
	{
		$helper = $this->fb->getRedirectLoginHelper();
		$permissions = ['email']; // Optional permissions
		$loginUrl = $helper->getLoginUrl(route('facebookinfo'), $permissions);
		return Redirect::to($loginUrl);
	}

	public function info()
	{
		$helper = $this->fb->getRedirectLoginHelper();
		try {

			$accessToken = $helper->getAccessToken();	
			echo 'cccccccccc';
		} catch(Facebook\Exceptions\FacebookResponseException $e) {
			// When Graph returns an error
						echo 'cccccccccc';
			echo 'Graph returned an error: ' . $e->getMessage();
			exit;
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
			// When validation fails or other local issues
						echo 'cccccccccc';
			echo 'Facebook SDK returned an error: ' . $e->getMessage();
			exit;			
		}

		if ($accessToken !== null) {
		    $oResponse = $this->fb->get('/me?fields=id,name,email', $accessToken);
		    print_r($oResponse->getGraphUser());
		}
		// Logged in
		echo '<h3>Access Token</h3>';
		var_dump($accessToken->getValue());
		
		$response = $this->fb->get('/me', $accessToken);
		print_r($response);
		echo "lamdang";
	}

	public function logout()
	{

	}
}