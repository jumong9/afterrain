<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Board extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->database();
		$this->load->model('board_model');

	}

	public function index(){
		$list_data = $this->board_model->getList();
		
		$this->load->view('head');
		//$this->load->view('left');
		$this->load->view('/board/mlist', array('list_data'=>$list_data));
		$this->load->view('bottom');
	}

	public function lists(){
		$list_data = $this->board_model->getList();
		
		$this->load->view('head');
		//$this->load->view('left');
		$this->load->view('/board/mlist', array('list_data'=>$list_data));
		$this->load->view('bottom');
	}

	public function read($comp_id){

		$read_data = $this->board_model->getDetail($comp_id);
		$list_data = $this->board_model->getList();

		$this->load->view('head');
		//$this->load->view('left');
		$this->load->view('/board/mread', array('read_data'=>$read_data));
		$this->load->view('/board/mlist', array('list_data'=>$list_data));
		$this->load->view('bottom');
	}


}
	
?>