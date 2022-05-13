<?php
class user
{
    var $db = null;
    function __construct()
    {
        $this->db = new Database();
    }
    function getAllUsers()
    {
        $this->db->setSql('select * from users');
        $rs = $this->db->loadRows();
        return $rs;
    }
    function them($params = [])
    {
        $this->db->setSql("INSERT INTO `users`( `username`, `password`, `name`, `email`, `phone`, `image`, `role_id`, `status`) VALUES (?,?,?,?,?,?,?,?)");
        $this->db->executeSql($params);
        $id = $this->db->getConnection()->lastInsertId();
        return $id;
    }
    function getUser($id)
    {
        $this->db->setSql('select * from users where id=?');
        $rs = $this->db->loadRow([$id]);
        return $rs;
    }
    function sua($params = [])
    {
        $sql = "UPDATE Users SET `username`=?,`name`=?,`email`=?,`phone`=?,`image`=?,`status`=?,`role_id`=? WHERE `id`=?";
        $this->db->setSql($sql);
        return $this->db->executeSql($params);
    }
    function xoa($params = [])
    {
        $sql = "DELETE FROM Users WHERE `id`=?";
        $this->db->setSql($sql);
        return $this->db->executeSql($params);
    }
    function login($username, $password)
    {
        $password = md5($password);
        $sql = "select * from users where username =? and  password =?  and status !=0 ";
        $this->db->setSql($sql);
        return $this->db->loadRow([$username, $password]);
    }
}
