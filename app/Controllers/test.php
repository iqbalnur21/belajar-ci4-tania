<?php

namespace App\Controllers;

class test extends BaseController
{
    public function index()
    {
        echo 'Hello World'; 
    }
    
    public function coba($nama = "", $umur = 21)
    {
        echo "Hello Namaku, $nama, saya berumur $umur tahun"; 
    }
}
