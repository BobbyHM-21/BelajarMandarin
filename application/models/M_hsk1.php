<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hsk1 extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Memuat database jika belum dimuat
        $this->load->database();
    }

    // Fungsi untuk mengambil semua data dari tabel hsk1_data
    public function get_all_hsk1_data() {
        $query = $this->db->get('hsk1_data');
        return $query->result_array();
    }

    // Fungsi untuk menambahkan data baru
    public function insert_hsk1_data($data) {
        return $this->db->insert('hsk1_data', $data);
    }

    // Fungsi untuk mendapatkan data berdasarkan ID
    public function get_hsk1_data_by_id($id) {
        $query = $this->db->get_where('hsk1_data', array('id' => $id));
        return $query->row_array();
    }

    // Fungsi untuk memperbarui data berdasarkan ID
    public function update_hsk1_data($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('hsk1_data', $data);
    }

    // Fungsi untuk menghapus data berdasarkan ID
    public function delete_hsk1_data($id) {
        $this->db->where('id', $id);
        return $this->db->delete('hsk1_data');
    }

    public function get_random_questions($limit = 10) {
        $this->db->order_by('RAND()');
        $this->db->limit($limit);
        $query = $this->db->get('hsk1_data');
        return $query->result();
    }

    public function get_question_by_id($id) {
        return $this->db->get_where('hsk1_data', ['id' => $id])->row();
    }
    public function save_quiz_results($results) {
        // Hapus data hasil kuis sebelumnya jika ada
        $this->db->empty_table('quiz_results');
        
        // Simpan hasil kuis baru
        $this->db->insert_batch('quiz_results', $results);
    }

    // Tambahan fungsi untuk mendapatkan hasil kuis jika diperlukan
    public function get_quiz_results() {
        return $this->db->get('quiz_results')->result_array();
    }
    public function get_total_questions() {
        return $this->db->count_all('hsk1_data');
    }

    // Tambahan metode untuk mendapatkan skor jika disimpan di database
    public function get_score() {
        // Implementasikan logika untuk mendapatkan skor, misalnya dari session atau metode lain
        return $this->session->userdata('score');
    }
}
