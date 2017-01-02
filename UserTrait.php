<?php
/**
 * Created by PhpStorm.
 * User: wanmin
 * Date: 17/1/2
 * Time: 下午7:56
 */

namespace Demo;
//namespace TraitDemo;


trait UserTrait
{
    public function t1()
    {
        echo __FILE__."\n";
    }

    private function t2()
    {
        echo __FUNCTION__."\n";
    }


    protected function t3()
    {
        echo __CLASS__."\n";
    }

    abstract public function t5();
//    public function t4()
//    {
//        echo "private"."\n";
//    }
}