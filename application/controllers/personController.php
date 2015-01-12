<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');
	class personController extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
		//$this->load->model('personModel');
		//$data['person']=$this->personModel->get_data_person();
		//$this->load->view('viewPerson',$data);
		$this->viewPersonPaging();
	}

	function insertViewPerson(){
		$this->load->view('insertPerson');
	}

	function insertPerson(){
		$data=array(
		'name'=>$_POST['name'],
		'address'=>$_POST['address'],
		'age'=>$_POST['age'],
		);
		$this->load->model('personModel');
		$res=$this->personModel->insertPerson($data);
		if($res){
			redirect(site_url());
		}else{echo "Fail insert Data <br>";
			echo '<a href="'.site_url('personController/ insertViewPerson').'">Back</a>';
		}
	}

	function deletePerson(){
		$data=array('idPerson'=>$_GET['idPerson']);
		$this->load->model('personModel');
		$res=$this->personModel->deletePersonModel($data);
		if($res){
			redirect(site_url());
		}else{
			echo "Fail delete Data <br>";
			echo '<a href="'.site_url().'">Back</a>';
		}
	}

	function updateViewPerson(){
		$param=array('idPerson'=>$_GET['idPerson']);
		$this->load->model('personModel');
		$data['person']=$this->personModel->getDataPersonId($param);
		$data['detail']=$this->personModel->getDataDetailPersonId($param);
		$this->load->view('updatePerson',$data);
	}

	function updatePerson(){
		$data=array(
		'idPerson'=>$_POST['idPerson'],
		'name'=>$_POST['name'],
		'address'=>$_POST['address'],
		'age'=>$_POST['age'],
		);
		$this->load->model('personModel');
		$res=$this->personModel->updatePersonModel($data);
		if($res){
		redirect(site_url());
		}else{
			echo "Fail update Data <br>";
			echo '<a href="'.site_url('personController/index').'">Back</a>';
		}
	}

	function viewPersonPaging($id=0) {
		$this->load->model('personModel');
		$amount = $this->personModel->getAmountPerson2();
		//configure pagination
		$config['base_url'] = base_url() . 'index.php/personController/viewPersonPaging';
		$config['total_rows'] = $amount->num_rows();
		$config['per_page'] = '2';
		$config['first_page'] = 'First';
		$config['last_page'] = 'Last';
		$config['next_page'] = '&laquo;';
		$config['prev_page'] = '&raquo;';
		//inisialisasi config
		$this->pagination->initialize($config);
		//create pagination
		$data['pagePerson'] = $this->pagination->create_links();
		//view data
		$data['person'] = $this->personModel->get_data_personPaging2($config['per_page'], $id);
		$this->load->view('viewPerson', $data);
	}
}
?>