<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentification extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//$this->load->database();
		$this->load->helper('url');
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		//$this->load->library('grocery_CRUD');
				// Load MongoDB library instead of native db driver if required
		$this->config->item('use_mongodb', 'ion_auth') ?
		$this->load->library('mongo_db') :

		$this->load->database();

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
		$this->load->helper('language');
	}



	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			redirect('login');
		}
	}

function login()
	{
		$this->data['title'] = "Authentification";

		//validate form input
		$this->form_validation->set_rules('identity', 'Identity', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == true)
		{
			//check to see if the user is logging in
			//check for "remember me"
			$remember = (bool) $this->input->post('remember');

			if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
			{
				//if the login is successful
				//redirect them back to the home page
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				redirect('dashboard/home_slider', 'refresh');
			}
			else
			{
				//if the login was un-successful
				//redirect them back to the login page
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('login', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
			}
		}
		else
		{
			//the user is not logging in so display the login page
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['identity'] = array('name' => 'identity',
				'id' => 'identity',
				'type' => 'text',
				'value' => $this->form_validation->set_value('identity'),
			);
			$this->data['password'] = array('name' => 'password',
				'id' => 'password',
				'type' => 'password',
			);

			$this->_render_page('login', $this->data);
		}
	}
function _get_csrf_nonce()
	{
		$this->load->helper('string');
		$key   = random_string('alnum', 8);
		$value = random_string('alnum', 20);
		$this->session->set_flashdata('csrfkey', $key);
		$this->session->set_flashdata('csrfvalue', $value);

		return array($key => $value);
	}

	function _valid_csrf_nonce()
	{
		if ($this->input->post($this->session->flashdata('csrfkey')) !== FALSE &&
			$this->input->post($this->session->flashdata('csrfkey')) == $this->session->flashdata('csrfvalue'))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	function _render_page($view, $data=null, $render=false)
	{

		$this->viewdata = (empty($data)) ? $this->data: $data;

		$view_html = $this->load->view($view, $this->viewdata, $render);

		if (!$render) return $view_html;
	}
	
	
	function logout()
	{
		$this->data['title'] = "Logout";

		//log the user out
		$logout = $this->ion_auth->logout();

		//redirect them to the login page
		$this->session->set_flashdata('message', $this->ion_auth->messages());
		redirect('login', 'refresh');
	}
/*
function reg () {
	$username="zakoura";
	$password="zakoura/123";
	$email="admin@zakoura.org";
	$additional_data="";
	$group_ids="2";
$this->ion_auth->register($username, $password, $email, $additional_data, $group_ids);
}*/
/*
function add() {
$username = 'jamal';
		$password = 'jamal123';
		$email = 'jamal@tribalddb.ma';
		$additional_data = array(
								'first_name' => 'Jamel',
								'last_name' => 'Nytsee',
								);
		$group = array('2'); // Sets user to admin. No need for array('1', '2') as user is always set to member by default

		$this->ion_auth->register($username, $password, $email, $additional_data, $group);

}

function add_admin() {
$username = 'Mounir';
		$password = 'mounir123';
		$email = 'mounir@tribalddb.ma';
		$additional_data = array(
								'first_name' => 'Mounir',
								'last_name' => 'Metlouf',
								);
		$group = array('1'); // Sets user to admin. No need for array('1', '2') as user is always set to member by default

		$this->ion_auth->register($username, $password, $email, $additional_data, $group);

}*/


}