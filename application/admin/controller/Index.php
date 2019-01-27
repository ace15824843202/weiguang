<?php
namespace app\admin\controller;
use \think\Db;

use \think\Controller;

class Index extends Base
{


    public  function _initialize(){

        //继承他爹的方法

        parent::_initialize();

    }
    public function index()
    {
        return view();
    }
}
