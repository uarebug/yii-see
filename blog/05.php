<?php

class Machine {}

class Robot extends Machine
{
    public $_abilities = [];

    public function attach($able)
    {
        $this->_abilities[] = $able;
    }

    // 当访问对象上面不存在的方法时，会自动调用该魔术方法
    public function __call($method, $params)
    {
        foreach ($this->_abilities as $ability) {
            if (method_exists($ability, $method)) {
                return call_user_func([$ability, $method], $params);
            }
        }

        throw new RuntimeException('method not exists');
    }

    public function walk()
    {
        // ...
        echo 'I\'m waking now.' . PHP_EOL;
    }

    public function talk()
    {
        // ...
        echo 'I\'m talking now.' . PHP_EOL;
    }
}

class Bird
{
    public function fly()
    {
        // ...
        echo 'I\'m flying now.' . PHP_EOL;
    }
}

$r = new Robot;
$r->attach(new Bird());
$r->fly();