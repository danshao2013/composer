<?php
/**
 * Created by PhpStorm.
 * User: chenxiaodan
 * Date: 2020/1/2
 * Time: 下午3:22
 */

require_once __DIR__ . '/vendor/autoload.php';
use Danshao2013\Test\Test;

$obj = new Test();

$msg = $obj->hello();
var_dump($msg);