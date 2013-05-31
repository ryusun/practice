<?php
require_once 'Zend/Controller/Front.php';
$front=Zend_Controller_Front::getInstance();
$front->setControllerDirectory('../zendapps/controllers');

//$front->setDefaultControllerName('wings');
//$front->setDefaultAction('codezine');

$front->dispatch();
