<?php
defined('BASEPATH') or exit('No direct script access allowed');

$this->router->addRoute(new Route('default','helloworld', 'HelloWorld', 'index'));
