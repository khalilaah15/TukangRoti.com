<?php
class Partner_model extends CI_Model {

    public function insert_partner($data) {
        if($this->db->insert('partners', $data)) {
            return $this->db->insert_id();
        } else {
            log_message('error', 'Failed to insert partner: '. $this->db->_error_message());
            return false;
        }
    }

    public function get_all() {
        return $this->db->order_by('created_at', 'DESC')->get('partners')->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('partners', ['id' => $id])->row();
    }

    public function update_partner($id, $data) {
        $this->db->where('id', $id);
        if ($this->db->update('partners', $data)) {
            return $this->db->affected_rows();
        } else {
            log_message('error', 'Failed to update partner with ID '.$id.': '. $this->db->_error_message());
            return false;
        }
    }

    public function delete_partner($id) {
        $this->db->where('id', $id);
        if ($this->db->delete('partners')) {
            return $this->db->affected_rows();
        } else {
            log_message('error', 'Failed to delete partner with ID '.$id.': '. $this->db->_error_message());
            return false;
        }
    }
}
