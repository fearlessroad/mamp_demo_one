<?php 
class Product extends CI_Model{
	function get_all(){
         return $this->db->query("SELECT * FROM products")->result_array();
	}
	function get_by_id($id){
		return $this->db->query("SELECT * FROM products WHERE id=?", array($id))->row_array();
	}
	function add($name, $description, $price){
		$query = "INSERT INTO products (name, description, price) VALUES (?,?,?)";
		$values = array($name, $description, $price);
		return $this->db->query($query, $values);
	}
	function update($name, $description, $price, $id){
		$query = "UPDATE products SET name = ?, description = ?, price = ? WHERE id = ?";
		$values = array($name, $description, $price, $id);
		return $this->db->query($query, $values);
	}
	function remove($id){
		$query = "DELETE from products WHERE id=?";
		return $this->db->query($query, $id);
	}
}