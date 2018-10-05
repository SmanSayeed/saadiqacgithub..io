<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download_Controller extends CI_Controller {


	public function add_download()
	{	
					
		$data=array();
		$data['admin_main_content']=$this->load->view('admin_part/functions/download/add_download','',true);
		$this->load->view('admin_part/dashboard',$data);
	
	}
		public function save_download()
	{	
		$this->load->model('Download_model');

		$this->Download_model->save_download();
	}

		public function show_download()
	{	
		$data=array();
			$data['show_all_downloads']=$this->Download_model->show_all_downloads();
			
			$data['admin_main_content']=$this->load->view('admin_part/functions/download/download_list',$data,true);
			$this->load->view('admin_part/dashboard',$data);
	}

	public function edit_download($download_id)
	{	

		$data=array();
		$data['all_download_info_by_id']=$this->Download_model->all_download_info_by_id($download_id);
		

		$data['admin_main_content']=$this->load->view('admin_part/functions/download/edit_download',$data,true);
		$this->load->view('admin_part/dashboard',$data);
	}
		public function update_download()
	{	

		$this->Download_model->update_download_info();
		$sdata['message']='updated successfully';
		$this->session->set_useradata($sdata);
		redirect('download-list');
	}
		public function delete_download($download_id)
	{	

		$this->Download_model->delete_download_by_id($download_id);
		$sdata['message']='Deleted successfully';
		$this->session->set_userdata($sdata);
		redirect('download-list');
	}
		public function hide_download($download_id)
	{	
			
		$this->Download_model->hide_download_info($download_id);
		$sdata['message']='Action Done successfully';
		$this->session->set_useradata($sdata);
		redirect('download-list');
	}


}
