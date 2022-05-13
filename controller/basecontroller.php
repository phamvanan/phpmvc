<?php
class basecontroller
{
    public function __construct()
    {
        if (!$this->islogin()) {
            chuyentrang(href("auth", "login"));
        }
    }
    function islogin()
    {
        return isset($_SESSION['status_login']) && $_SESSION['status_login'];
    }
    //$data : bat buoc phai 1 cai mang va phan tu cua no la co key tu dat
    function render($path, $data = [], $layout = 'master')
    {
        if (is_array($data)) {
            extract($data);
        }
        $path = $path . '.php';
        //$path = 'view/home/trangchu.php';
        include 'view/' . $layout . '.php'; //??path # url
    }
    function _404()
    {
        //$path = 'view/home/404.php';
        //include 'view/empty.php';//??path # url
        $this->render('view/home/404', [], 'empty');
    }
    function _403()
    {
        //$path = 'view/home/404.php';
        //include 'view/empty.php';//??path # url
        $this->render('view/home/403', [], 'empty');
    }
}
