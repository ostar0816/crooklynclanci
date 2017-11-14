<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	var $root_url = "";
	const API_ROOT_URL = "https://v2-beta.crooklynclan.net";
	var $og_title = "Welcome To The Crooklyn Clan Vault 2.0!";
	var $og_description = "While we are in beta please use the Google Chrome browser.";
	var $og_image = "https://daks2k3a4ib2z.cloudfront.net/58cad0536f26f255683f2ebf/59fc0c4a015c8e0001b68a85_59ea4f0379b8c2000147adb6_withthe2r.jpg";
	var $og_url = "";

	function __construct() {
		parent::__construct();	
		
	}

    function checkRedirectUrl($ad_param = null) {
        if (!$ad_param) {
            return null;
		}
		$redirect_url = null;
		if ($ad_param) {
			$url = self::API_ROOT_URL . "/api/v1/members/account/editorads/" . $ad_param . "/get";
			$options = array(
				CURLOPT_RETURNTRANSFER => true,     // return web page
				CURLOPT_HEADER         => false,    // don't return headers
				CURLOPT_FOLLOWLOCATION => true,     // follow redirects
				CURLOPT_ENCODING       => "",       // handle all encodings
				CURLOPT_USERAGENT      => "spider", // who am i
				CURLOPT_AUTOREFERER    => true,     // set referer on redirect
				CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
				CURLOPT_TIMEOUT        => 120,      // timeout on response
				CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
				CURLOPT_SSL_VERIFYPEER => false     // Disabled SSL Cert checks
			);
		
			$ch      = curl_init( $url );
			curl_setopt_array( $ch, $options );
			$response = curl_exec( $ch );
			$err     = curl_errno( $ch );
			$errmsg  = curl_error( $ch );
			$header  = curl_getinfo( $ch );
			curl_close( $ch );
			// echo "<br>response = " . $response;
			if (!$err && json_decode($response) != "invalid id") {
				$editorAd = json_decode($response)->EditorAd;
				
				if ($editorAd) {
					// var_dump($editorAd);
					if (isset($editorAd->adTitle)) {
						$this->og_title = $editorAd->adTitle;
					}
					if (isset($editorAd->adDescription)) {
						$this->og_description = $editorAd->adDescription;
					}
					if ($editorAd->adMainImageFullUrl) {
						$this->og_image = $editorAd->adMainImageFullUrl;                    
					}
					$redirect_url = self::API_ROOT_URL . "/#/pages/tracks/ads/" . $ad_param;      					
				} else {
					$redirect_url = null;
				}
			}
		}
		if (!$redirect_url) {
			$url = self::API_ROOT_URL . "/api/v1/members/editors/" . $ad_param . "/getEditorByStageName";
			$options = array(
				CURLOPT_RETURNTRANSFER => true,     // return web page
				CURLOPT_HEADER         => false,    // don't return headers
				CURLOPT_FOLLOWLOCATION => true,     // follow redirects
				CURLOPT_ENCODING       => "",       // handle all encodings
				CURLOPT_USERAGENT      => "spider", // who am i
				CURLOPT_AUTOREFERER    => true,     // set referer on redirect
				CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
				CURLOPT_TIMEOUT        => 120,      // timeout on response
				CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
				CURLOPT_SSL_VERIFYPEER => false     // Disabled SSL Cert checks
			);
		
			$ch      = curl_init( $url );
			curl_setopt_array( $ch, $options );
			$response = curl_exec( $ch );
			$err     = curl_errno( $ch );
			$errmsg  = curl_error( $ch );
			$header  = curl_getinfo( $ch );
			curl_close( $ch );
			//  echo "<br>response = " . $response;
			if (!$err && json_decode($response) != "not found") {
				$editor = json_decode($response)->Editor;
				
				if ($editor) {
					$this->og_title = $editor->stageName;
					if (isset($editor->biography) && strlen($editor->biography) > 0) {
						$description = $editor->biography;
						$description = str_replace("<p>", "", $description);
						$description = str_replace("</p>", "", $description);
						$this->og_description = str_replace("\"", "'", $description);
					}
					if ($editor->logoSquare) {
						$this->og_image = "https:" . $editor->logoSquare->url;
					}
					$redirect_url = self::API_ROOT_URL . "/#/pages/tracks/ads/" . $ad_param;					
				} else {
					$redirect_url = null;                
				}
			}
		}
		
        return $redirect_url;
    }

	public function index($ad_param = null)
	{
		$ad_param = str_replace("&", rawurlencode("&"), $ad_param);
		// echo $ad_param;

		$this->root_url = base_url();
		$this->og_url = $ad_param ? $this->root_url . $ad_param : $this->root_url;
		$redirect_url = $this->checkRedirectUrl($ad_param);
		
		$data['og_title'] = $this->og_title;
		$data['og_description'] = $this->og_description;
		$data['og_url'] = $this->og_url;
		$data['og_image'] = $this->og_image;
		$data['redirect_url'] = $redirect_url;
        $this->load->view('home_view', $data);
    }
    
}
