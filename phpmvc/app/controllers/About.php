<?php

class About {
    public function index($nama = 'Kaka', $pekerjaan = 'Mahasiswa'){
        echo "Halo, nama saya $nama, Saya adalah seorang $pekerjaan." ;
    }

    public function page(){
        echo 'About/page';
    }
}