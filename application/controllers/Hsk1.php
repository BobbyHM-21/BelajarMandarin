<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hsk1 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_hsk1');
        $this->load->library('session');
    }

    // Fungsi untuk menampilkan data HSK1
    public function index() {
        $data['hsk1_data'] = $this->M_hsk1->get_all_hsk1_data();
        $this->load->view('hsk1_view', $data);
    }

    // Fungsi untuk menambahkan data HSK1 (form dan proses)
    public function add() {
        if ($this->input->post()) {
            $data = array(
                'chinese_character' => $this->input->post('chinese_character'),
                'pinyin' => $this->input->post('pinyin'),
                'english' => $this->input->post('english'),
                'indonesian' => $this->input->post('indonesian')
            );
            $this->M_hsk1->insert_hsk1_data($data);
            redirect('hsk1');
        }
        $this->load->view('hsk1_add');
    }

    // Fungsi untuk mengedit data HSK1 (form dan proses)
    public function edit($id) {
        if ($this->input->post()) {
            $data = array(
                'chinese_character' => $this->input->post('chinese_character'),
                'pinyin' => $this->input->post('pinyin'),
                'english' => $this->input->post('english'),
                'indonesian' => $this->input->post('indonesian')
            );
            $this->M_hsk1->update_hsk1_data($id, $data);
            redirect('hsk1');
        }
        $data['hsk1_data'] = $this->M_hsk1->get_hsk1_data_by_id($id);
        $this->load->view('hsk1_edit', $data);
    }

    // Fungsi untuk menghapus data HSK1
    public function delete($id) {
        $this->M_hsk1->delete_hsk1_data($id);
        redirect('hsk1');
    }

    public function quiz() {
        $data['questions'] = $this->M_hsk1->get_random_questions();
        $this->load->view('quiz', $data);
    }

    public function submit() {
        $answers = $this->input->post('answers');
        $results = [];
        $score = 0;
    
        foreach ($answers as $id => $answer) {
            $question = $this->M_hsk1->get_question_by_id($id);
            if ($question) {
                $correct_answers = array_map('trim', explode(';', strtolower($question->indonesian)));
                $user_answer = strtolower(trim($answer));
                $is_correct = in_array($user_answer, $correct_answers);
    
                if ($is_correct) {
                    $score++;
                }
    
                // Simpan hasil penilaian
                $results[] = [
                    'question_id' => $id,
                    'chinese_character' => $question->chinese_character,
                    'pinyin' => $question->pinyin,
                    'user_answer' => $user_answer,
                    'correct_answers' => implode('; ', $correct_answers),
                    'is_correct' => $is_correct
                ];
            }
        }
    
        // Simpan hasil kuis ke database
        $this->M_hsk1->save_quiz_results($results);
    
        // Redirect ke halaman hasil kuis
        redirect('hsk1/quiz_result');
    }
    
    
    
    public function quiz_result() {
        // Ambil score dari session flashdata
        $data['score'] = $this->session->flashdata('score');
        
        // Ambil total jumlah soal dari session flashdata atau database
        $data['total_questions'] = $this->session->flashdata('total_questions'); 
    
        // Pastikan variabel ini ada dan dikirim
        if ($data['total_questions'] === NULL) {
            $data['total_questions'] = $this->db->count_all('hsk1_data'); // Mengambil jumlah soal dari database jika tidak ada di session
        }
    
        $this->load->view('quiz_result', $data);
    }
    
    
}


