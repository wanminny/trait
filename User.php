<?php
/**
 * Created by PhpStorm.
 * User: wanmin
 * Date: 17/1/2
 * Time: 下午7:58
 */
namespace Demo;
//use Demo\UserTrait;

class User
{
    use UserTrait;

    public function u1()
    {
        $this->t1();
    }

    public function u2()
    {
        $this->t2();
    }

    public function u3()
    {
        $this->t3();
    }

    public function t5()
    {
        echo "abstract t5\n";
    }
//    public function u4()
//    {
//        $this->t4();
//    }
}