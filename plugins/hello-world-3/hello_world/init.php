<?php
defined('BASEPATH') or exit('No direct script access allowed');

$this->router->addRoute(new Route('default','helloworld', 'HelloWorld', 'index'));

$this->router->addRoute(new Route('user', 'user/:id', 'HelloWorld', 'user'));

$this->router->addRoute(new Route('archive', 'user/:name/:email', 'HelloWorld', 'archive'));
