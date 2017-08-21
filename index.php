<?php

error_reporting(E_ALL );

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



//set_time_limit(1000);

$battle_m = new liw\app\Units();

$battle_r = new liw\app\BattleResult();


$val_res = new liw\app\Battle();


$players1 = $battle_m->battle(2, 10, 2);
$players2 = $battle_m->battle(1, 10, 2);
$players3 = $battle_m->battle(3, 10, 2);


$players = array($players1, $players2);

//print_r($players);

//echo count($players);

$values = array(1,2,3);

echo $val_res->average($values);


$battle_r->result($players);

$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");

$website = $input[mt_rand(0, count($input) - 1)];



echo $website;





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