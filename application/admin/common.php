<?php

// 图片上传
function upload(){
        //引入上传类
        require_once("../extend/upClass.php");

        //设置上传路径
        $data =date("Y-m-d");
        $path = "./uploads/".$data."/";
        $upfile = new  \UploadFiles(array("filepath"=>$path));
       if($upfile->uploadeFile("myfiles")){

            //执行上传

            $arrfile = $upfile->getWangEditor3();

            $arrfile = json_encode($arrfile);
           
            echo $arrfile;

        }else{

            $err = $upfile->geterror();

            if(is_array($err)){
                foreach ($err as $key => $value) {
                    echo $value."<br/>";
                }

            }else{

                echo $err;
            }

        }

    }

function getList($list,$pid=0,$step=0){
    //静态变量初始化一次
    static $tree =[];
    foreach ($list as $k => $v) {
        if ($v['pid']==$pid) { //顶级右侧菜单

           $flg = str_repeat("┕━",$step ); 


            $v['rule_name'] = $flg.$v['rule_name'];

            $tree[]= $v;

            getList($list,$v['id'],$step+1);

            
        }

    }
    return $tree;

}

function getTree($list,$pid=0){
    $tree=[];
    foreach ($list as $k => $v) {

        if ($v['pid']==$pid) {

           $v['child'] = getTree($list,$v['id']);


                $tree[] = $v;

        }
        
    }
    return $tree;
}