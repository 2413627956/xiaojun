<?php
class Mankind
{
    var $weight;
    var $name;
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
    public function getWeight()
    {
        echo $this->weight . PHP_EOL;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        echo $this->name . PHP_EOL;
    }
}
class Ali extends Mankind
{
    public function saygrades()
    {
        echo "90" . PHP_EOL;
    }
}

class Bob extends Mankind
{
    public function saygrades()
    {
        echo "80" . PHP_EOL;
    }
}
function ww($obj)
{
    if (get_class($obj) != "Mankind") { //取得$obj所在的类的类名
        $obj->saygrades();
    }
}

ww(new Ali());
ww(new Bob());
$x = new Mankind(); //对类进行实例化
//类是一个抽象的概念，只有将类实例化后在能成为一个具体的东西
$x->setWeight(100); //给成员变量weight传值
echo $x->weight;//调用成员变量
