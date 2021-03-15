<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->idiom = $this->session->userdata('language') !== NULL ? $this->session->userdata('language') : 'english';
		$this->lang->load('index', $this->idiom);
		$this->data['lang_idiom'] = $this->idiom;

		if ($this->session->userdata('user_id')) {
			$this->user = $this->getUserInfo();
			$this->group = $this->getGroup();
			$this->data['group_id']	= $this->group->group_id;
			$this->data['firstName'] = $this->user->first_name;
			$this->data['lastName']	= $this->user->last_name;
		}
	}

	/**
	 * check login validation
	 * @return boolean true or false
	 */
	public function loginCheck()
	{
		if (!$this->session->userdata('user_id')) {
			redirect('auth');
		}
	}

	/**
	 * Display User Data 
	 * @return array row data user
	 */
	public function getUserInfo()
	{
		$id = $this->session->userdata('user_id');
		if ($id) {
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('id', $id);
			$query = $this->db->get();

			if (isset($query)) {
				return $query->row();
			}
		} else {
			return false;
		}
	}

	/**
	 * Display User Group
	 * @return array row data group
	 */
	public function getGroup()
	{
		$id = $this->session->userdata('user_id');
		if ($id) {
			$this->db->select('group_id');
			$this->db->from('users_groups');
			$this->db->where('user_id', $id);
			$query = $this->db->get();

			if (isset($query)) {
				return $query->row();
			}
		} else {
			return false;
		}
	}
}
