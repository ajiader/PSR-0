<?php
spl_autoload_register('autoload1');
spl_autoload_register('autoload2');

Test1::test();
Test2::test();

function autoload1($class)
{
    require __DIR__.'/'.$class.'.php';
}

function autoload2($class)
{
    require __DIR__.'/'.$class.'.php';
}