<?php

class WebController
{
    public $loadView;

    function __construct() {
        $this->loadView = new Load();
    }

    public function index()
    {
        return $this->loadView->view('web/index',null);
    }

}


?>