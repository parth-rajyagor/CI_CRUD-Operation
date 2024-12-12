<?php
defined('BASEPATH') OR exit('No direct access allowed');
class CrudModel extends CI_Model {
    public function add_data($post) {
        $post['added_on']=date('d M, Y');
        $q=$this->db->insert('register', $post);
        if($q){
            return true;
        }
        else {
            return false;
        }
    }

    public function all_data($id='') {
        if($id!='') {
            $q=$this->db->where('id',$id)->get('register');
            if($q->num_rows()){
                return $q->row();
            }
            else {
                return false;
            }
        }
        else {
            $q=$this->db->order_by('id', 'desc')->get('register');
            if($q->num_rows()){
                return $q->result();
            }
            else {
                return false;
            }
        }
    }

    public function update_data($post) {
        $post['updated_on']=date('Y-m-d h:i:s');
        if($post['image']!=''){
            $q=$this->db->where('id', $post['id'])->update('register', ['name'=>$post['name'], 'email'=>$post['email'], 'phone'=>$post['phone'], 'language'=>$post['language'], 'gender'=>$post['gender'], 'qualification'=>$post['qualification'], 'image'=>$post['image'], 'status'=>$post['status'], 'updated_on'=>$post['updated_on']]);
            if($q){
                return true;
            }
            else {
                return false;
            }
        }
        else {
            $q=$this->db->where('id', $post['id'])->update('register',['name'=>$post['name'], 'email'=>$post['email'], 'phone'=>$post['phone'], 'language'=>$post['language'], 'gender'=>$post['gender'], 'qualification'=>$post['qualification'], 'status'=>$post['status'], 'updated_on'=>$post['updated_on']]);
            if($q){
                return true;
            }
            else {
                return false;
            }
        }
    }

    public function delete_data($id) {
        $q=$this->db->where('id', $id)->delete('register');
        if($q) {
            return true;
        }
        else {
            return false;
        }
    }
}
?>