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
	var $api_root_url = "";

	var $og_title = "Welcome To The Crooklyn Clan Vault 2.0!";
	var $og_description = "While we are in beta please use the Google Chrome browser.";
	var $og_image = "https://daks2k3a4ib2z.cloudfront.net/58cad0536f26f255683f2ebf/59fc0c4a015c8e0001b68a85_59ea4f0379b8c2000147adb6_withthe2r.jpg";
	var $og_url = "";

	function __construct() {
		parent::__construct();	
		$this->api_root_url = config_item('api_root_url');
	}

    function checkRedirectUrl($currency_slug = null, $stagename = null, $ad_type = null) {
        if (!$currency_slug || !$stagename) {
            return null;
		}
		$redirect_url = null;
		if ($stagename) {
			$url = $this->api_root_url . "api/v1/members/editors/" . $stagename . "/getEditorByStageName";
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
				if (isset(json_decode($response)->Editor)) {
					$editor = json_decode($response)->Editor;
					
					if (isset($editor->stageName)) {
						$this->og_title = $editor->stageName;
					}
					if (isset($editor->biography) && strlen($editor->biography) > 0) {
						$description = $editor->biography;
						$description = str_replace("<p>", "", $description);
						$description = str_replace("</p>", "", $description);
						$this->og_description = str_replace("\"", "'", $description);
					}
					if (isset($editor->logoSquare)) {
						$this->og_image = "https:" . $editor->logoSquare->url;
					}
					$redirect_url = $this->api_root_url . "editors/" . $stagename . "/" . $currency_slug;					
				} else {
					$redirect_url = null;                
				}
			}
		}
		if ($redirect_url && $ad_type) {
			$url = $this->api_root_url . "api/v1/members/account/editorads/" . $currency_slug . "/" . $stagename . "/" . $ad_type . "/getByStagenameAndType";
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
			if (!$err && json_decode($response) != "not found") {
				if (isset(json_decode($response)->EditorAd)) {
					$editorAd = json_decode($response)->EditorAd;
					
					// var_dump($editorAd);
					if (isset($editorAd->adTitle) && strlen($editorAd->adTitle) > 0) {
						$this->og_title = $editorAd->adTitle;
					}
					if (isset($editorAd->adDescription) && strlen($editorAd->adDescription) > 0) {
						$this->og_description = $editorAd->adDescription;
					}
					if (isset($editorAd->adMainImageFullUrl)) {
						// $this->og_image = $editorAd->adMainImageFullUrl; //Disable showing an ad image until we have good ones
					}					
					$redirect_url = $this->api_root_url . "tracks/ads/" . $editorAd->_id;      					
				} else {
					$redirect_url = null;
				}
			} else {
				$redirect_url = null;				
			}
		}
		
        return $redirect_url;
    }

	public function index($currency_slug = null, $stagename = null, $ad_type = null)
	{
		$stagename = str_replace("&", rawurlencode("&"), $stagename);
		$ad_type = str_replace("&", rawurlencode("&"), $ad_type);
		
		$this->og_url = current_url();
		$redirect_url = $this->checkRedirectUrl($currency_slug, $stagename, $ad_type);

		$data['og_title'] = $this->og_title;
		$data['og_description'] = $this->og_description;
		$data['og_url'] = $this->og_url;
		$data['og_image'] = $this->og_image;
		$data['redirect_url'] = $redirect_url;
        $this->load->view('home_view', $data);
    }
    
}
