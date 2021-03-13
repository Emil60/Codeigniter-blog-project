<?php

class Dbase extends CI_Model
{
	function loginCheck($email,$password)
	{
		$result = $this->db->select('*')
		->from('admin')
		->where('email',$email)
		->where('password',$password)
		->get()
		->row();
		$q=array($result);
		if(count($q)!=1)
		{
			return false;
		}
		else
		{
			return $result;
		}
	}
	function addpost($data)
	{
		$result = $this->db->insert('shares',$data);
		return $result;
	}
	function getposts()
	{
		$result = $this->db->select('*')
		->from('shares')
		->order_by('id','desc')
		->get()
		->result();
		
		return $result;
		
	}
	function deletepost($id)
	{
		$result = $this->db->delete('shares',array('id'=>$id));
		return $result;
		
	}
	function infopost($id)
	{
		$result = $this->db->select('*')
		->from('shares')
		->where('id',$id)
		->get()
		->row();
		$q=array($result);
		if(count($q)!=1)
		{
			return false;
		}
		else
		{
			return $result;
		}
		
	}
	function updatepost($id,$datas)
	{
		$result = $this->db->update('shares',$datas,array('id'=>$id));
		return $result;
		
	}
	function insertmessage($data)
	{
		$result = $this->db->insert('messagetable',$data);
		return $result;
	}
	function getmessages()
	{
		$result = $this->db->count_all_results('messagetable');
		
		return $result;
		
	}
}
