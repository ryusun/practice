<?php
require_once 'Zend/Controller/Action.php';
require_once 'Zend/Date.php';

class InitsampleController extends Zend_Controller_Action
{
    public function init()
    {
	    $this->view->assign('message','Initialize!!!');
	    $this->view->assign('test','warning!');

    }
    public function preDispatch()
    {
        $date = new Zend_Date();
        $this->view->assign('dt', $date->get(Zend_Date::TIMES));
        if(($date->compare('09:00:00', Zend_Date::TIMES) < 0)||($date->compare('17:00:00', Zend_Date::TIMES) > 0)) {
            $this->view->assign('message2', 'Open is Between From 9 to 17.');
            $this->_forward('index','index');
        } else {
        $this->view->assign('message2', 'Hello!');
        }
    }
    public function indexAction()
    {
        $this->view->assign('actionname', 'action of index1');
    }
    public function index2Action()
    {
        $this->view->assign('actionname', 'Action of INDEX2!');
    }
}
