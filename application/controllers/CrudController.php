<?php
defined('BASEPATH') OR exit('No direct script allowed');
class CrudController extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('crudmodel');
        $this->form_validation->set_error_delimiters('<div class="text-danger mt-2 mb-3">', '</div>');
    }

    public function index() {
        $this->load->view('insert');
    }

    public function add_data() {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('language', 'Language', 'required|trim');
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim');
        $this->form_validation->set_rules('qualification', 'Qualification', 'required|trim');
        if(empty($_FILES['image']['name'])){
            $this->form_validation->set_rules('image', 'Image', 'required|trim');
        }
        if($this->form_validation->run()){
            $post=$this->input->post();
            $config['upload_path']='./uploads/';
            $config['allowed_types']='jpg|png';
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('image')){
                $error=array('error'=>$this->upload->display_errors());
                $this->load->view('insert', $error);
            }
            else {
                $data=$this->upload->data();
                $post=$this->input->post();
                $post['image']=$data['file_name'];
                $this->load->model('crudmodel');
                $check=$this->crudmodel->add_data($post);
                if($check){
                    redirect('crudcontroller/all_data');
                }
                else {

                }
            }
        }
        else {
            $this->load->view('insert');
        }
    }

    public function all_data($id='') {
        if($id!='') {
            $data['arr']=$this->crudmodel->all_data($id);
            $this->load->view('insert', $data);
        }
        else {
            $data['arr']=$this->crudmodel->all_data();
            $this->load->view('all-data', $data);
        }
    }

    public function update_data() {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('language', 'Language', 'required|trim');
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim');
        $this->form_validation->set_rules('qualification', 'Qualification', 'required|trim');
        if($this->form_validation->run()){
            $post=$this->input->post();
            $config['upload_path']='./uploads/';
            $config['allowed_types']='jpg|png';
            $this->load->library('upload', $config);
            $this->upload->do_upload('image');
            $data=$this->upload->data();
            $post=$this->input->post();
            $post['image']=$data['file_name'];
            $check=$this->crudmodel->update_data($post);
            if($check){
                redirect('crudcontroller/all_data');
            }
        }
        else {
            $id=$this->input->post('id');
            $data['arr']=$this->crudmodel->all_data($id);
            $this->load->view('insert', $data);
        }
    }

    public function delete_data($id) {
        $check=$this->crudmodel->delete_data($id);
        if($check) {
            redirect('crudcontroller/all_data');
        }
    }
}
?>