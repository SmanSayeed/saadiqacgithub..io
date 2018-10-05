<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model {


	public function save_gallery(){
		$data=array();
		$data['created_at']=$this->input->post('created_at',true);
		$data['title']=$this->input->post('title',true);
		$data['description']=$this->input->post('description',true);
		$data['created_at']=date('y-m-d h:m:s');
		$sdata = array();
			/*IMAGE PART*/
			$error="";
			$config['upload_path']		='image/gallery/';
			$config['allowed_types']	='gif|jpg|png';
			$config['max_size']			=100000;
			$config['max_width']		=204832;
			$config['max_height']		=102432;
			$this->load->library('upload',$config);

			if(! $this->upload->do_upload('image')){
				$error = $this->upload->display_errors();
			}
			else{
				$sdata = $this->upload->data();
				$data['image'] = $config['upload_path'].$sdata['file_name'];
			}
			/*--------IMAGE PART END-----*/
		
		$this->db->insert('gallery',$data);
		$sdata['message'] = 'Image added successfully';
		$this->session->set_userdata($sdata);
		redirect('add-image');
	}
	
		public function show_all_images(){
			$this->db->select('*');
		$this->db->from('gallery');
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;

	}

		public function all_gallery_info_by_id($gallery_id){
		$this->db->select('*');
		$this->db->from('gallery');
		$this->db->where('id',$gallery_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
}
	public function update_gallery_info(){
		$data=array();
		$id=$this->input->post('id',true);

		$data['title']=$this->input->post('title',true);
		$data['description']=$this->input->post('description',true);
	
		$data['created_at']=date('y-m-d h:m:s');
		$sdata=array();

			/*IMAGE PART*/
			$error="";
			$config['upload_path']		='image/gallery/';
			$config['allowed_types']	='gif|jpg|png';
			$config['max_size']			=100000;
			$config['max_width']		=204832;
			$config['max_height']		=102432;
			$this->load->library('upload',$config);

			if(! $this->upload->do_upload('image')){
				$error = $this->upload->display_errors();
			}
			else{
				$sdata = $this->upload->data();
				$data['image'] = $config['upload_path'].$sdata['file_name'];
			}
			/*--------IMAGE PART END-----*/
		
		$this->db->where('id',$id);
		$this->db->update('gallery',$data);


		$sdata['message'] = 'Gallery Updated successfully';
		$this->session->set_userdata($sdata);
		redirect('gallery-list');
	}

		public function delete_gallery_by_id($gallery_id){
		
		$this->db->where('id',$gallery_id);
		$this->db->delete('gallery');


	}

	/*Home Part*/

		public function show_home_6_images(){
		$this->db->select('*');
		$this->db->from('gallery');
		$this->db->limit(6);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;

	}

		public function show_all_images_home(){
		$this->db->select('*');
		$this->db->from('gallery');
	
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;

	}


}
