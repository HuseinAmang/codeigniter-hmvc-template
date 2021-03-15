<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->template->set_template('cpanel/main.php');
		$this->loginCheck();
	}

	public function index()
	{
		/**Add breadcrumbs list */
		$this->breadcrumbs->push(lang('menu-dashboard'), '/dashboard');

		$this->data['breadcrumbs']  = $this->breadcrumbs->show();
		$this->data['title'] 		= lang('menu-dashboard');
		$this->data['bahasa'] 		= $this->idiom;
		$this->data['message']		= $this->session->flashdata('message');

		$this->template->render('dashboard_view', $this->data);
	}
}
