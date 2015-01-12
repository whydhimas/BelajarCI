<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
		class hello extends CI_Controller{

		function __construct(){
				parent::__construct();
				$this->name="Abir";
				$this->color="red";
		}
		
		function you(){
				$this->load->view('youView');
		}

		function getYourName(){
				$data['name']=$this->name;
				$data['color']=$this->color;
				$this->load->view('youView2',$data);
		}

		function getYourName2(){
				$data['name']=$_GET['name'];
				$this->load->view('youView3',$data);
		}

	}
?>