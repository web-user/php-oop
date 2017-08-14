<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new liw\app\App();


//$obj_return = new TestMy();


//TestMy::instance();

$data1 = new liw\app\Data();
$data2 = new liw\app\Data2();

$app->run($data2);








//$obj_return->foo();
//
//$obj_return->getColor();
//
//$obj_return->instance();