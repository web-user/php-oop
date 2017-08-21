<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | 'display_errors');

echo ini_get('display_errors');

if (!ini_get('display_errors')) {
	ini_set('display_errors', '1');
}

echo ini_get('display_errors');

require __DIR__ . '/vendor/autoload.php';

$app = new liw\app\App();


//$data1 = new liw\app\Data();
//$data2 = new liw\app\Data2();
//
//$app->run($data2);



$battle_m = new liw\app\Units();

$battle_r = new liw\app\BattleResult();



$players1 = $battle_m->battle(1, 2, 10, 2);
$players2 = $battle_m->battle(1, 1, 10, 2);


$players = array($players1, $players2);

print_r($players);


$battle_r->result($players);





//$obj_return = new TestMy();


//TestMy::instance();

//$data1 = new liw\app\Data();
//$data2 = new liw\app\Data2();

//$app->run($data2);








//$obj_return->foo();
//
//$obj_return->getColor();
//
//$obj_return->instance();