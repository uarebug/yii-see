<?php

class Huluwa
{
    public $name;

    // 葫芦娃的主色
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    // 自我介绍
    public function introduce()
    {
        echo "大家好我是：{$this->name}, 我头上的小葫芦是{$this->color}\n";
    }

    // public function __get($property)
    // {
    //     var_dump('__get', $property);
    // }

    // public function __set($property, $value)
    // {
    //     var_dump('__set', $property, $value);
    // }
}

$a1 = new Huluwa('大娃', '红色');
$a1->introduce();

$a2 = new Huluwa('二娃', '橙色');
$a2->introduce();

$a1 = new Huluwa('三娃', '黄色');
$a1->introduce();

$a1 = new Huluwa('火娃', '绿色');
$a1->introduce();

$a1 = new Huluwa('水娃', '青色');
$a1->introduce();

$a1 = new Huluwa('六娃', '蓝色');
$a1->introduce();

$a1 = new Huluwa('七娃', '紫色');
$a1->introduce();

/*
大家好我是：大娃, 我头上的小葫芦是红色
大家好我是：二娃, 我头上的小葫芦是橙色
大家好我是：三娃, 我头上的小葫芦是黄色
大家好我是：火娃, 我头上的小葫芦是绿色
大家好我是：水娃, 我头上的小葫芦是青色
大家好我是：六娃, 我头上的小葫芦是蓝色
大家好我是：七娃, 我头上的小葫芦是紫色
*/

$a1->halt = 'aaa';
var_dump($a1->halt, $a1);
var_dump($a2->halt, $a2);