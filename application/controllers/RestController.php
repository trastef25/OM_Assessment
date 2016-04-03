<?php

class RestController extends Base_Controller_BaseController
{

    public function init()
    {
    	parent::init();
        $this->_helper->layout->disableLayout();
        $this->_response->setHeader('Content-Type', 'text/plain');
        $this->_helper->viewRenderer->setNoRender(true);
        $this->restModel = new Application_Model_RestModel();
    }

    public function indexAction()
    {

    }

}

