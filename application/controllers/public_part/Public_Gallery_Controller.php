<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_Gallery_Controller extends CI_Controller {

	
		public function show_gallery()
	{	
		$data=array();
			$data['show_all_images']=$this->Gallery_model->show_all_images();
			
			$data['admin_main_content']=$this->load->view('public_part/functions/gallery/gallery_list',$data,true);
			$this->load->view('public_part/index',$data);
	}

	public function edit_gallery($gallery_id)
	{	

		$data=array();
		$data['all_gallery_info_by_id']=$this->Gallery_model->all_gallery_info_by_id($gallery_id);
		

		$data['admin_main_content']=$this->load->view('admin_part/functions/gallery/edit_gallery',$data,true);
		$this->load->view('admin_part/dashboard',$data);
	}
		public function update_gallery()
	{	

		$this->Gallery_model->update_gallery_info();
		$sdata['message']='updated successfully';
		$this->session->set_useradata($sdata);
		redirect('gallery-list');
	}
		public function delete_gallery($gallery_id)
	{	

		$this->Gallery_model->delete_gallery_by_id($gallery_id);
		$sdata['message']='Deleted successfully';
		$this->session->set_userdata($sdata);
		redirect('gallery-list');
	}


}
