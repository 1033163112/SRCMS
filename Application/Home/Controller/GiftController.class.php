<?php

/**
 * @author Zhou Yuyang <1009465756@qq.com> 2015-07-27
 * @copyright ©2105-2018 SRCMS
 * @homepage http://www.src.pw
 * @version 1.0
 */

namespace Home\Controller;

use Think\Controller;

class GiftController extends Controller{

    public function index(){
        $gift = M('links')->select();
        $this->assign('gift',$gift);
        $this->display();
    }
}
