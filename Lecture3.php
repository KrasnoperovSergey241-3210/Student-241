<?php

abstract class AbstractClass {
    public abstract function getValue();

    public function printValue() {
        echo $this->getValue();
    }
}

// $abstract = new AbstractClass; ошибка

class classA extends AbstractClass {
    private $val;
    public function __construct(int $val) {
        $this->val = $val;
    }

    public function getValue() {
        return $this->val;
    }
}

$ob = new classA(5);
$ob->printValue();

// ClassA::printValue(); статический вызов

class A {
    public static function test(int $x) {
        echo $x;
    }
}

echo '<BR>';

A::test(6);
?>