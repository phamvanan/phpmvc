<?php
class productcontroller extends basecontroller
{
    var $productModel = null;
    var $categoryModel = null;
    public function __construct()
    {
        parent::__construct();
        $this->productModel  = new product();
        $this->categoryModel  = new category();
    }
    function index()
    {
        $data = $this->productModel->getAllProducts();

        $this->render("view/product/index", $data);
    }
    function formthem()
    {
        $data = $this->categoryModel->laydanhsach();
        $this->render("view/product/them", $data);
    }
    function themproduct()
    {
        $categoryid = $_POST["categoryid"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $quality = $_POST["quality"];
        $status = $_POST["status"];
        $content = $_POST["content"];
        $summary = $_POST["summary"];
        $imageName = $_FILES["image"]["name"];
        $imagePath = $_FILES["image"]["tmp_name"];
        $idproduct = $this->productModel->them([$categoryid, $name, $price, $quality, $imageName, $content, $status, $summary]);
        if ($idproduct && $idproduct > 0) {
            move_uploaded_file($imagePath, "upload/" . $imageName);
        }
        chuyentrang(href("product", "index", ["id" => $idproduct]));
    }
    function updateform()
    {
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $product = $this->productModel->getproduct($id);
            $data = $this->categoryModel->laydanhsach();
            $this->render("view/product/update", ["product" => $product, "category" => $data]);
        }
    }
    function suaproduct()
    {
        $id = $_POST['id'];
        $categoryid = $_POST["categoryid"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $quality = $_POST["quality"];
        $status = $_POST["status"];
        $content = $_POST["content"];
        $summary = $_POST["summary"];
        $imageName = $_FILES["image"]["name"];
        $imagePath = $_FILES["image"]["tmp_name"];
        $idproduct = $this->productModel->sua([$categoryid, $name, $price, $quality, $imageName, $content, $status, $summary, $id]);
        if ($idproduct && $idproduct > 0) {
            move_uploaded_file($imagePath, "upload/" . $imageName);
        }
        chuyentrang(href("product", "index", ["id" => $idproduct]));
    }
    function xoaproduct()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $kq = $this->productModel->xoa([$id]);
        }
        chuyentrang(href("product", "index", ["id" => $kq]));
    }
}
