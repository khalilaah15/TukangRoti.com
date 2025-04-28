<?php
class Partner_model extends CI_Model {

    // Menyimpan mitra baru ke dalam database
    public function insert_partner($data) {
        // Cek jika data valid sebelum insert
        if($this->db->insert('partners', $data)) {
            return $this->db->insert_id(); // Mengembalikan ID mitra yang baru ditambahkan
        } else {
            // Jika terjadi error saat insert
            log_message('error', 'Failed to insert partner: '. $this->db->_error_message());
            return false;
        }
    }

    // Mengambil semua mitra, diurutkan berdasarkan tanggal dibuat
    public function get_all() {
        return $this->db->order_by('created_at', 'DESC')->get('partners')->result();
    }

    // Mengambil mitra berdasarkan ID
    public function get_by_id($id) {
        return $this->db->get_where('partners', ['id' => $id])->row();
    }

    // Memperbarui data mitra
    public function update_partner($id, $data) {
        $this->db->where('id', $id);
        if ($this->db->update('partners', $data)) {
            return $this->db->affected_rows(); // Mengembalikan jumlah baris yang terpengaruh
        } else {
            log_message('error', 'Failed to update partner with ID '.$id.': '. $this->db->_error_message());
            return false;
        }
    }

    // Menghapus mitra berdasarkan ID
    public function delete_partner($id) {
        $this->db->where('id', $id);
        if ($this->db->delete('partners')) {
            return $this->db->affected_rows(); // Mengembalikan jumlah baris yang terpengaruh
        } else {
            log_message('error', 'Failed to delete partner with ID '.$id.': '. $this->db->_error_message());
            return false;
        }
    }
}
