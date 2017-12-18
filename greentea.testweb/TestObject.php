<?php

class TestObject
{
    private $m_first;
    private $m_second;

    private $m_name;
    private $m_test1;
    private $m_test2;
    private $m_core;
    private $m_printer;

    public function __construct($a, $b)
    {
        $this->m_first = $a;
        $this->m_second = $b;

        echo "TestObject::__construct($a, $b)\n";
    }

    public function setName($value)
    {
        $this->m_name = $value;
        echo "TestObject::setName($value)\n";
    }

    public function setTest1($value)
    {
        $this->m_test1 = $value;
        echo "TestObject::setTest1($value)\n";
    }

    public function setTest2($value)
    {
        $this->m_test2 = $value;
        echo "TestObject::setTest2(".print_r($value, true).")\n";
    }

    public function setCore(&$oCore)
    {
        $this->m_core = $oCore;
        echo "TestObject::setCore(".get_class($oCore).")\n";
    }

    public function setPrinter(&$oPrinter)
    {
        $this->m_printer = $oPrinter;
        echo "TestObject::setPrinter(".get_class($oPrinter).")\n";
    }
}