<?php
class User_model extends CI_Model {

    public function get_all_users() {
        return $this->db->get('users')->result_array();
    }

    public function insert_user() {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
        );
        return $this->db->insert('users', $data);
    }

    public function get_user($id) {
        return $this->db->get_where('users', ['id' => $id])->row_array();
    }

    public function update_user($id) {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
        );
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

    public function delete_user($id) {
        return $this->db->delete('users', ['id' => $id]);
    }
}
