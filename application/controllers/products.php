<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Products extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('product');
	}
	public function index(){
		$products = $this->product->get_all();
		$this->load->view('index', array('products'=>$products));
	}
	public function show($id){
		$product = $this->product->get_by_id($id);
		$this->load->view('info', $product);
	}
	public function edit($id){
		if(!$this->input->post()){
		$product = $this->product->get_by_id($id);
		$this->load->view('edit',$product);
		}
		else{
		$name = $this->input->post('name');
		$description = $this->input->post('description');
		$price = $this->input->post('price');
		$this->product->update($name, $description, $price, $id);
		redirect("/");	
		}
	}
	public function add(){
		if (!$this->input->post()){
			$this->load->view('add');
		}
		else{
		$name = $this->input->post('name');
		$description = $this->input->post('description');
		$price = $this->input->post('price');
		$this->product->add($name, $description, $price);
		redirect("/");
		}
	}
	public function remove($id){
		$this->product->remove($id);
		redirect("/");
	}
}