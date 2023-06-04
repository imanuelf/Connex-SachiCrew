<?php

namespace App\Controllers;

use App\Libraries\Template;
use App\Libraries\Google;
use CodeIgniter\Controller;



class Integration extends App_Controller {

    public function __construct() {
        //main template to make frame of this app
        $this->template = new Template();
    }
    
    public function index(){
        return $this->template->rander('integration/integration');
    }

}

