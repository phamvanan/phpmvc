<?php
class categorycontroller extends basecontroller
{
    var $cateModel = null;
    function __construct()
    {
        parent::__construct();
        $this->cateModel  = new category();
    }
    function index()
    {
        $data = $this->cateModel->laydanhsach();

        $this->render("view/category/danhsach", $data);
    }
}
