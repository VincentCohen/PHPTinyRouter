<?php

require ('PHPTinyRouter.php');

// Example routes that should match
$routes = array(
    '/' => array('controller' => 'Home'),
    '/product' => array('controller' => 'Product'),
    '/product/[s:slug]' => array('controller' => 'Product', 'action' => 'Detail'),
    '/user/[i:id]/[delete|update]' => array('controller' => 'User', 'action' => 'Do'),
    '/category/[s:parent]' => array('controller' => 'Category', 'action' => 'Category'),
    '/category/[s:parent]/[s:sub]' => array('controller' => 'Category', 'action' => 'Category'),
);

$tinyRouter = new TinyRouter();