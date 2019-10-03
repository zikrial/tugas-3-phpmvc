<?php

class About extends Controller{

    public function index($nama = 'Zikri ', $pekerjaan = 'Mahasiswa')
    {
        $this->view('about/index');
    }
    public function page()
    {
        $this->view('about/page');
    }
}