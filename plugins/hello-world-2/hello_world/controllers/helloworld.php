<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelloWorld extends Controller {
        public function index()
        {
          $this->assign('text','Hello World People');
        }
}
