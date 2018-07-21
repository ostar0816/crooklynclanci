<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('EditorAd.php');

class Aboutus extends CI_Controller {

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

	public function index()
	{
		$editorAds = getEditorAds($this->api_root_url);
		$data['editorAds'] = $editorAds;
		// var_dump($editorAds);
		$this->load->view('aboutus_view', $data);
	}
}
