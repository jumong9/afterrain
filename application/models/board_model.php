<?php

class Board_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}


	function getList(){
		return $this->db->query("select a.comp_id, a.comp_name, a.comp_phone, a.comp_fax, a.comp_addr, b.usr_name, a.crt_date
								 from tb_comp_bas a, tb_user_bas b 
								 where a.gen_usr_no=b.usr_no")->result();
	}


	function getDetail($comp_id){
		return $this->db->query("select a.comp_id, a.comp_name, a.comp_phone, a.comp_fax, a.comp_addr, b.usr_name, a.crt_date
								 from tb_comp_bas a, tb_user_bas b 
								 where a.gen_usr_no=b.usr_no and a.comp_id=$comp_id")->row();

	}
	
}

?>