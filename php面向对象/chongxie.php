<?php
//子类可以更改父类中的函数的方法，且不影响父类中的函数
class Find
{
    var $money;

    public function car($money)
    {
        echo $money . PHP_EOL;
    }
}
class X extends Find
{
    var $money;
    public function car($money) //对父类中的car函数进行了重新定义
    {
        echo $money * 2;
    }
}
$z = new Find();
$z->car(20);
$y = new X();
$y->car(20);
