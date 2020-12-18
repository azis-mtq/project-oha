<?php

class Errors extends Controller {
    public function not_found() {
        $data['judul'] = '404 : Not Found';
        $this->view('templates/header', $data);
        $this->view('error/404');
        $this->view('templates/footer');
    }
}