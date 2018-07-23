<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dorm extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function test()
	{
	    $this->load->view('Head');
	    $this->load->view('content');
	    $this->load->view('foot');
	}
	/*public function customer()
	{
	    $this->load->model('Cus_model');
	   $res= $this->Cus_model->get_cus();
	   //var_dump ($res);
	   $data['show_res']=$res;
	   
	   $this->load->view('Head');
	   $this->load->view('qn/form_qn');
	   $this->load->view('foot');
	   
	   
	}*/
	public function signin()
	{
	    $this->load->view('sign-in');
	}
	public function form()
	{
	    $this->load->view('Head');
	    $this->load->view('qn/form_qn');
	    $this->load->view('foot');
	}
	public function chart1()
	{
	    $this->load->view('Head');
	    $this->load->view('qn/chart1');
	    $this->load->view('foot');
	}
	public function datamining_1()
	{
	    $this->load->view('Head');
	    $this->load->view('datamining_1');
	    $this->load->view('foot');
	}
	public function datamining_2()
	{
	    $this->load->view('Head');
	    $this->load->view('datamining_2');
	    $this->load->view('foot');
	}
	public function menu_happy()
	{
	    $this->load->view('Head');
	    $this->load->view('qn/menu_happy');
	    $this->load->view('foot');
	}
	public function other_social()
	{
	    $this->load->view('Head');
	    $this->load->view('qn/other_social');
	    $this->load->view('foot');
	}
	public function menu_learn()
	{
	    $this->load->view('Head');
	    $this->load->view('qn/menu_learn');
	    $this->load->view('foot');
	}
	public function other_heathy()
	{
	    $this->load->view('Head');
	    $this->load->view('qn/other_heathy');
	    $this->load->view('foot');
	}
	public function other_menheathy()
	{
	    $this->load->view('Head');
	    $this->load->view('qn/other_menheathy');
	    $this->load->view('foot');
	}
	public function dis()
	{
	    $this->load->model('Cus_model');
	    $res= $this->Cus_model->get_cus();
	    //var_dump ($res);
	    $data['show_res']=$res;
	    
	    $this->load->view('head');
	    $this->load->view('display', $data);
	    $this->load->view('foot');
	}
	public function ins() {

	    $this->load->view('head');
		$this->load->view('qn/form_qn');
	    $this->load->view('foot');
	}
	
	/*public function insertCus ()
	{
	    $data["id"] = $_POST["std"];
	   /* $data[""] = $_POST[""];
	    $data[""] = $_POST[""];
	    $data[""] = $_POST[""];
	    $data[""] = $_POST[""];
	    $data[""] = $_POST[""];
	    $data[""] = $_POST[""];
	    $data[""] = $_POST[""];
	    $data[""] = $_POST[""];
	    
	    $this->load->model('Cus_model');
	    $res = $this->Cus_model->insert_entry($data);
	}*/
}
