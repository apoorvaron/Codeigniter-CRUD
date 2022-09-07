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

            $result = $this->crud_model->insertProduct([
                'name'=>$this->input->post('name'),
                'price'=>$this->input->post('price'),
                'quantity'=>$this->input->post('quantity')
            ]);
            if($result){
                $this->session->set_flashdata('Inserted','Your data has been successfully inserted');
            }
        }
        // echo $this->form_validation->run();
        redirect('crud');


    }
    public function editProduct($id){
        // echo $id; 

        $data['singleProduct']= $this->crud_model->getSingleProduct($id);

        $this->load->view('edit-view',$data);
    }
    public function update($id){
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

            $result = $this->crud_model->updateProduct([
                'name'=>$this->input->post('name'),
                'price'=>$this->input->post('price'),
                'quantity'=>$this->input->post('quantity')
            ],$id);
            if($result){
                $this->session->set_flashdata('Updated','Your data has been successfully Updated');
            }
        }
        // echo $this->form_validation->run();
        redirect('crud');
    }
}
?>