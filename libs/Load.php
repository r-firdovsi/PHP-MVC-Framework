<?php

class Load
{
    public function view($fileName)
    {
        include 'app/view/'. $fileName .'_v.php';
    }

    public function model($fileName)
    {
        include 'app/models/'. $fileName .'.php';

    }
}

?>
