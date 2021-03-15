<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->template->set_template('cpanel/main.php');
		$this->loginCheck();
	}

	public function switch_lang()
	{
		$lang = $this->input->post('idiom');
		
		$this->session->set_userdata('language', $lang);

		return TRUE;
	}
}
