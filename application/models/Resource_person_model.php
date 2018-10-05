<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resource_person_model extends CI_Model {


	public function save_resource_person(){
		$data=array();
		//$data['created_at']=$this->input->post('created_at',true);
		$data['name']=$this->input->post('name',true);
		$data['company']=$this->input->post('company',true);
		$data['quote']=$this->input->post('quote',true);
		$data['created_at']=date('y-m-d h:m:s');
			if($this->input->post('hide_key',true)==null){
			$data['hide_key']=0;
		}else
		$data['hide_key']=$this->input->post('hide_key',true);
		$sdata = array();
			/*IMAGE PART*/
			$error="";
			$config['upload_path']		='image/resource_person/';
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
		
		$this->db->insert('resource_person',$data);
		$sdata['message'] = 'Image added successfully';
		$this->session->set_userdata($sdata);
		redirect('add-resource_person');
	}
	
		public function show_all_resource_persons(){
			$this->db->select('*');
		$this->db->from('resource_person');
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;

	}

		public function all_resource_person_info_by_id($resource_person_id){
		$this->db->select('*');
		$this->db->from('resource_person');
		$this->db->where('id',$resource_person_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
}
	public function update_resource_person_info(){
		$data=array();
		$id=$this->input->post('id',true);

		$data['name']=$this->input->post('name',true);
			$data['company']=$this->input->post('company',true);
		$data['quote']=$this->input->post('quote',true);
	
		$data['created_at']=date('y-m-d h:m:s');
		if($this->input->post('hide_key',true)==null){
			$data['hide_key']=0;
		}else
		$data['hide_key']=$this->input->post('hide_key',true);
		$sdata=array();

			/*IMAGE PART*/
			$error="";
			$config['upload_path']		='image/resource_person/';
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
		$this->db->update('resource_person',$data);


		$sdata['message'] = 'Resource_person Updated successfully';
		$this->session->set_userdata($sdata);
		redirect('resource_person-list');
	}

		public function delete_resource_person_by_id($resource_person_id){
		
		$this->db->where('id',$resource_person_id);
		$this->db->delete('resource_person');


	}

	public function hide_resource_person_info($resource_person_id){

		/*
		$this->db->select('*');
		$this->db->from('resource_person');
		$this->db->where('id',$resource_person_id);
		$q=$this->db->get();
		$r=$q->row();*/
		
		$query = $this->db->query("select * from resource_person where id='$resource_person_id'");
		$r = $query->row();


				$data=array();
		if($r->hide_key==1){
				$data['hide_key']=0;
		}else{ 	$data['hide_key']=1;}


		$this->db->where('id',$resource_person_id);
		$this->db->update('resource_person',$data);

		$sdata['message'] = 'Action done successfully';
		$this->session->set_userdata($sdata);
		redirect('resource_person-list');


	}

	/*Home Part*/

	

		public function show_resource_person(){
		$this->db->select('*');
		$this->db->from('resource_person');
	
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;

	}


}
