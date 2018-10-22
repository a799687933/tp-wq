<?php


namespace app\admin\controller;

use think\Request;
use think\Db;
//use app\common\adapter\AuthAdapter;
use app\common\controller\Common;
use think\Loader;


class Hello extends Common
{
    public function  index()
    {
        //Loader::import('weiqing\weiqing', EXTEND_PATH);
       //$obj = new \weiqing\weiqing();
         
       //$obj->test();

        return $this->fetch();
    }
}
?>