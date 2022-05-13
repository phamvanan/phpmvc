<?php
class usercontroller extends basecontroller
{
    var $userModel = null;
    public function __construct()
    {
        parent::__construct();
        $this->userModel  = new user();
    }
    function index()
    {
        $data = $this->userModel->getAllUsers();

        $this->render("view/user/index", $data);
    }
    function formthem()
    {
        $this->render("view/user/them");
    }
    function themuser()
    {
        $username = $_POST["username"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $status = $_POST["status"];
        $role = $_POST["role"];
        $pass = md5($_POST["password"]);
        $imageName = $_FILES["image"]["name"];
        $imagePath = $_FILES["image"]["tmp_name"];
        $idUser = $this->userModel->them([$username, $pass, $name, $email, $phone, $imageName, $role, $status]);
        if ($idUser && $idUser > 0) {
            move_uploaded_file($imagePath, "upload/" . $imageName);
        }
        chuyentrang(href("user", "index", ["id" => $idUser]));
        // header("Location: ?controller=user&action=index&id=".$idUser."name=".$name);
    }
    function updateform()
    {
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $user = $this->userModel->getUser($id);
            $this->render("view/user/update", $user);
        }
    }
    function suauser()
    {
        $id = $_POST['id'];
        $username = $_POST["username"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $status = $_POST["status"];
        $role = $_POST["role"];
        $imageName = $_FILES["image"]["name"];
        $imagePath = $_FILES["image"]["tmp_name"];
        $idUser = $this->userModel->sua([$username, $name, $email, $phone, $imageName, $status, $role, $id]);
        if ($idUser && $idUser > 0) {
            move_uploaded_file($imagePath, "upload/" . $imageName);
        }
        chuyentrang(href("user", "index", ["id" => $idUser]));
    }
    function xoauser()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $kq = $this->userModel->xoa([$id]);
        }
        chuyentrang(href("user", "index", ["id" => $kq]));
    }
}
