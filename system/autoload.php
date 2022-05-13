<?php
//thu vien chung k phai la class  object
// include 'system/config/config.php';
include 'system/db/config.php';
include 'system/libs/funcs.php';
// include 'system/libs/funcs.php';
//xu dung cơ che tạo class cua php để load thu vien class lên
spl_autoload_register(function ($classname) { //$classname dùng để hứng tên class khi bạn new ở phần code sư dung 
    //xu ly load thu vien
    $pathcontroller = "controller/{$classname}.php";
    $pathmodel = "model/{$classname}.php";
    $pathdb = "system/db/{$classname}.php";
    $pathlibs = "system/libs/{$classname}.php";
    if (file_exists($pathcontroller))
        include $pathcontroller;
    if (file_exists($pathmodel))
        include $pathmodel;
    if (file_exists($pathdb))
        include $pathdb;
    if (file_exists($pathlibs))
        include $pathlibs;
});
