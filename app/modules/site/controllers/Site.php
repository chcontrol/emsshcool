<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends MX_Controller {

    public function home() {
        $this->load->view('landing');
    }

    public function description() {
        $this->load->view('description');
    }

    public function objective() {
        $this->load->view('objective');
    }

    public function creator() {
        $this->load->view('creator');
    }

    public function recommendation() {
        $this->load->view('recommendation');
    }

    public function about_us() {
        $this->load->view('about-us');
    }

    public function contact_us() {
        $this->load->view('contact-us');
    }

    public function activity() {
        $this->load->view('activity');
    }

    // Activity_Createing 2
    public function activity_1() {
        $this->load->view('activity_1');
    }
    public function activity_2() {
        $this->load->view('activity_2');
    }

    public function sections() {
        $this->load->view('sections');
    }

}
