<?php
class authcontroller extends basecontroller
{
    var $userModel = null;
    public function __construct()
    {
        $this->userModel  = new user();
    }
    function login()
    {
        $this->render("", [], "auth/login");
    }
    function loginpost()
    {

        if (isset($_POST['username'], $_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = $this->userModel->login($username, $password);
            if ($user) {
                if ($user->status == 1) {
                    $_SESSION['name'] = $user->name;
                    $_SESSION['uid'] = $user->id;
                    $_SESSION['avt'] = $user->image;
                    $_SESSION['status_login'] = true;
                    //chuyen trang ve thong tin
                    chuyentrang(href("home", "index"));
                } else {
                    $msg = 'Tài khoản của bạn đang bị khóa bởi BQT, liên hệ để biết thêm thống tin';
                }
            } else {
                $msg = 'Thông tin đăng nhập không chính xác';
            }
        }
        chuyentrang(href('auth', 'login', [], ['type' => 'danger', 'msg' => $msg]));
    }
    function logout()
    {
        //huy het session
        session_destroy();
        chuyentrang(href('auth', 'login'));
    }
}
