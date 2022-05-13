<?php
class homecontroller extends basecontroller
{
    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $this->render("view/home/index");
    }
}
