<?php

require_once 'Lecture 22 OOP 22-04-2023/File31/Structure/globals.class.php';

use Structure\Globals;


$globals = new Globals();
$globals['post'] = ['name' => 'Hristo', 'email' => 'hristo@post.bg'];

var_dump($globals->post);

