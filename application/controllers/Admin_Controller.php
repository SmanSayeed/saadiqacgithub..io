<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

	public function admin_login()
	{	
				$username= $this->input->post('username',true);
				$password = $this->input->post('password',true);

				$this->load->model('Admin_model');
				$result = $this->Admin_model->admin_model_info($username,$password);


				$sdata=array();

				if($result){

					$data=array(
						'username'=>$this->input->post('username'),
						'password'=>$this->input->post('password'),
						'role'=>$result->admin_role,
						'is_logged_in'=>1
						);
					$this->session->set_userdata($data);


					$sdata['admin_id']=$result->admin_id;
					$sdata['admin_name']=$result->admin_name;
					$sdata['admin_role']=$result->admin_role;
					$this->session->set_userdata($sdata);

					redirect('dashboard');
				}else{
					$sdata['message']="Invalid Username or Password";
					$this->session->set_userdata($sdata);
					redirect('backend');
				}

	}
	public function backend()
	{	
		if($this->session->userdata('is_logged_in')){
			$data=array();
		$data['admin_main_content']=$this->load->view('admin_part/admin_pages/admin_index','',true);
		$this->load->view('admin_part/dashboard',$data);
			}else{
					$this->load->view('admin_part/login');
			}
	}


	public function dashboard()
	{	
				if($this->session->userdata('is_logged_in')){
					$data=array();
				$data['admin_main_content']=$this->load->view('admin_part/admin_pages/admin_index','',true);
				$this->load->view('admin_part/dashboard',$data);
			}else{
				redirect('backend');
			}
		
	}
		public function logout()
	{	
		$this->session->sess_destroy();

		$this->session->unset_userdata('admin_id');
		$this->session->unset_userdata('admin_name');
		$sdata['message']='logout successfully';
		$this->session->set_userdata($sdata);
		redirect('backend');
	}

	public function add_admin()
	{	
					
		$data=array();
		$data['admin_main_content']=$this->load->view('admin_part/admin_pages/add_admin','',true);
		$this->load->view('admin_part/dashboard',$data);
	
	}

	public function save_admin()
	{	
		$this->load->model('Admin_model');

		$this->Admin_model->save_admin_info();
	}

		public function manage_admin()
	{	
		$data=array();
		$data['all_admin_info']=$this->Admin_model->all_admin_info();
		
		$data['admin_main_content']=$this->load->view('admin_part/admin_pages/admin_list',$data,true);
		$this->load->view('admin_part/dashboard',$data);
	}

	public function edit_admin($admin_id)
	{	

		$data=array();
		$data['all_admin_info_by_id']=$this->Admin_model->all_admin_info_by_id($admin_id);
		

		$data['admin_main_content']=$this->load->view('admin_part/admin_pages/edit_admin',$data,true);
		$this->load->view('admin_part/dashboard',$data);
	}
		public function update_admin()
	{	

		$this->Admin_model->update_admin_info();
		$sdata['message']='updated successfully';
		$this->session->set_useradata($sdata);
		redirect('manage-admin');
	}
		public function delete_admin($admin_id)
	{	

		$this->Admin_model->delete_admin_by_id($admin_id);
		$sdata['message']='Deleted successfully';
		$this->session->set_userdata($sdata);
		redirect('admin-list');
	}


}
