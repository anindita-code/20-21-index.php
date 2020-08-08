<?php
class Foo
{
    private $foo;
    protected $bar;
    public $baz;

    public function __construct()
    {
        $this->foo = 1;
        $this->bar = 2;
        $this->baz = new StdClass;
    }
}

var_dump( (array) new Foo );
?> 