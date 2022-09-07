<?php


class Crud extends CI_Controller{
    public function index(){
        // $data['product_details'] = $this->load->model("crud-model");

        $data['product_details'] = $this->crud_model->getAllProducts();
        $this->load->view("crud-view",$data);
    }
}
?>