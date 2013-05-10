<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
	   $this->load->model('qlytacgiaModel','',TRUE);
	   $this->load->model('qlyadminModel','',TRUE);
	 }

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function admin_login()
	{
		$this->load->view('form_login');
		// $this->load->view('body');
	}
	
	public function check_admin(){
		
			$User_Name=$_POST['User_Name'];
			$Password=$_POST['Password'];
			$admin = array(
			'User_Name'=>$User_Name,
			'Password'=>$Password
			);
		$this->qlyadminModel->checkAdmin($admin);
	}
	
	
	public function add_user()
	{
		$this->load->view('formnhap');
	}
	
	public function save_user(){
		try{
			$User_Name=$_POST['User_Name'];
			$Password=$_POST['Password'];
				$insert_data = array(
				'Name' => $User_Name,
				'Password' => $Password
			);
			$this->db->insert('qlytacgia',$insert_data);
			
			$this->load->view('create_user_success');
		}
		catch(Exception $e){
			$this->load->view('create_user_fail');
		}
	}
	public function edit_user(){
		$this->db->select('Name, Password');
		$this->db->from('qlytacgia');
 		$query = $this->db->get();
 
	}
}
?>