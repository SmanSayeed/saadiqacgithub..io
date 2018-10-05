<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider_model extends CI_Model {


	public function save_slider(){
		$data=array();
		$data['created_at']=date('y-m-d h:m:s');
		$data['title']=$this->input->post('title',true);
		$sdata = array();
			/*IMAGE PART*/
			$error="";
			$config['upload_path']		='image/slider/';
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
		
		$this->db->insert('slider',$data);
		$sdata['message'] = 'Slider added successfully';
		$this->session->set_userdata($sdata);
		redirect('add-slider');
	}
	
		public function show_all_sliders(){
			$this->db->select('*');
		$this->db->from('slider');
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;

	}

		public function all_slider_info_by_id($slider_id){
		$this->db->select('*');
		$this->db->from('slider');
		$this->db->where('id',$slider_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
}
	public function update_slider_info(){
		$data=array();
		$id=$this->input->post('id',true);

		$data['title']=$this->input->post('title',true);
	
	
		$data['created_at']=date('y-m-d h:m:s');
		$sdata=array();

			/*IMAGE PART*/
			$error="";
			$config['upload_path']		='image/slider/';
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
		$this->db->update('slider',$data);


		$sdata['message'] = 'Slider Updated successfully';
		$this->session->set_userdata($sdata);
		redirect('slider-list');
	}

		public function delete_slider_by_id($slider_id){
		
		$this->db->where('id',$slider_id);
		$this->db->delete('slider');


	}

	/*Home Part*/

		
		public function show_all_sliders_home(){
		$this->db->select('*');
		$this->db->from('slider');
	
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;

	}


}
