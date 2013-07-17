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


	public function write(){

		$this->load->view('head');
		
		$this->load->library('form_validation');
 
        $this->form_validation->set_rules('comp_name', 'Company Name', 'required');
        $this->form_validation->set_rules('comp_phone', 'Phone', 'required');
         
        if ($this->form_validation->run() == FALSE){
             
             $this->load->view('/board/mwrite');
       
        } else {
        	
            $comp_id = $this->board_model->createCompany($this->input->post('comp_name'),
            											 $this->input->post('comp_phone'),
            											 $this->input->post('comp_fax'),
            											 $this->input->post('comp_addr'));
            $this->load->helper('url');
            redirect('/board/read/'.$comp_id);
        }	

		$this->load->view('bottom');
	}

}
	
?>