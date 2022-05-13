<?php
class category{
    var $db = null;
     function __construct() {
        $this->db = new Database();
    }
    function laydanhsach()
    {
        $this->db->setSql('select * from categories');
        $rs = $this->db->loadRows();
        return $rs;
    }
}