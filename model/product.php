<?php
class product
{
    var $db = null;
    function __construct()
    {
        $this->db = new Database();
    }
    function getAllProducts()
    {
        $this->db->setSql('select * from products');
        $rs = $this->db->loadRows();
        return $rs;
    }
    function them($params = [])
    {
        $this->db->setSql("INSERT INTO `products`( `category_id`, `name`, `price`, `qty`, `image`, `content`, `status`, `summary`) VALUES (?,?,?,?,?,?,?,?)");
        $this->db->executeSql($params);
        $id = $this->db->getConnection()->lastInsertId();
        return $id;
    }
    function getproduct($id)
    {
        $this->db->setSql('select * from products where id=?');
        $rs = $this->db->loadRow([$id]);
        return $rs;
    }
    function sua($params = [])
    {
        $sql = "UPDATE products SET `category_id`=?,`name`=?,`price`=?,`qty`=?,`image`=?,`content`=?,`status`=?,`summary`=? WHERE `id`=?";
        $this->db->setSql($sql);
        return $this->db->executeSql($params);
    }
    function xoa($params = [])
    {
        $sql = "DELETE FROM products WHERE `id`=?";
        $this->db->setSql($sql);
        return $this->db->executeSql($params);
    }
    function login($productname, $password)
    {
        $password = md5($password);
        $sql = "select * from products where productname =? and  password =?  and status !=0 ";
        $this->db->setSql($sql);
        return $this->db->loadRow([$productname, $password]);
    }
}
