<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelloWorld extends Controller {
        public function index()
        {
          $this->assign('text','Hello World People');
        }

        public function user($id)
        {
          echo "The id is $id";
          exit();
        }

        public function archive($name,$email)
        {
            echo "The name is $name, the email is $email";
            exit();
        }

}
