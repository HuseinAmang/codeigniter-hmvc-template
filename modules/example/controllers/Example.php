<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Example extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->template->set_template('cpanel/main.php');
        $this->load->model('Example_model', 'Example');
	}

	public function index()
	{
		/**Add breadcrumbs list */
		$this->breadcrumbs->push(lang('menu-dashboard'), '/dashboard');
        $this->breadcrumbs->push('example', '/dashboard/example');

		$this->data['breadcrumbs']  = $this->breadcrumbs->show();
		$this->data['title'] 		= 'Example';
		$this->data['bahasa'] 		= $this->idiom;
		$this->data['message']		= $this->session->flashdata('message');

		$this->template->render('example_view', $this->data);
	}
}
