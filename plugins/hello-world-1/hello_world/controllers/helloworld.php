<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelloWorld extends Controller {
        public function index()
        {
          echo("Hello World");
          die();
        }
}
