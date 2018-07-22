<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('EditorAd.php');

class Hottracks extends CI_Controller {

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

	function __construct() {
		parent::__construct();	

		$this->api_root_url = config_item('api_root_url');
	}

	function getTopTracks() {
		$url = $this->api_root_url . "api/v1/members/track/getTopTracks";
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
			if (isset(json_decode($response)->Tracks)) {
				$tracks = json_decode($response)->Tracks;
				return $tracks;
			}
		}
		return [];
	}

	public function index()
	{
		$editorAds = getEditorAds($this->api_root_url);
		$data['editorAds'] = $editorAds;

		$tracks = $this->getTopTracks();
		$data['tracks'] = $tracks;
		$this->load->view('hottracks_view', $data);
	}
}
