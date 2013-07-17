<?php

class Board_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}


	function getList(){
		return $this->db->query("select a.comp_id, a.comp_name, a.comp_phone, a.comp_fax, a.comp_addr, b.usr_name, a.crt_date
								 from tb_comp_bas a, tb_user_bas b 
								 where a.gen_usr_no=b.usr_no order by comp_id desc")->result();
	}


	function getDetail($comp_id){
		return $this->db->query("select a.comp_id, a.comp_name, a.comp_phone, a.comp_fax, a.comp_addr, b.usr_name, a.crt_date
								 from tb_comp_bas a, tb_user_bas b 
								 where a.gen_usr_no=b.usr_no and a.comp_id=$comp_id")->row();

	}

	function createCompany($comp_name, $comp_phone, $comp_fax, $comp_addr){

		$this->db->set('crt_date', 'now()', false);
		$this->db->set('chg_date', 'now()', false);
		$this->db->insert('tb_comp_bas', array( 
											'comp_name'=>$comp_name,
											'comp_phone'=>$comp_phone,
											'comp_fax'=>$comp_fax,
											'comp_addr'=>$comp_addr,
											'gen_usr_no'=>'1',
											'chg_usr_no'=>'1'
											));
		//echo "query=" . $this->db->last_query();
		return $this->db->insert_id();
	}
	
}

?>