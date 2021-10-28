<?php
class lingkaran extends CI_Controller
{

    public function index()
    {

        // mengambil lingkaran model
        $this->load->model('lingkaran_model');

        // menangkap model yang telah dimuat oleh kontroller
        $model = $this->lingkaran_model;

        // menentukan nilai jari2
        $model->set_jarijari(3);

        // memuat view dan mengimkan $model ke view
        $this->load->view('lingkaranview', array('model' => $model));
    }
}
