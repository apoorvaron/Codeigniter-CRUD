<?php


class Crud extends CI_Controller{
    public function index(){
        // $data['product_details'] = $this->load->model("crud-model");

        $data['product_details'] = $this->crud_model->getAllProducts();
        $this->load->view("crud-view",$data);
    }
    public function addProduct(){
        echo "1";
        $this->form_validation->set_rules('name','Product Name','trim|required');
        $this->form_validation->set_rules('price','Product Price','trim|required');
        $this->form_validation->set_rules('quantity','Product Quantity','trim|required');




        if($this->form_validation->run()==false){
            // echo "2";
            $data_error = [

                'error'=> validation_errors()

            ];

            $this->session->set_flashdata($data_error);




        }else{
            // echo "3";

            $this->crud_model->insertProduct([
                'name'=>'Red',
                'price'=>55,
                'quantity'=>66
            ]);
        }
        // echo $this->form_validation->run();
        redirect('crud');


    }
}
?>