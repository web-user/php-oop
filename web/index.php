<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new liw\app\App();


$data1 = new liw\app\Data();
$data2 = new liw\app\Data2();

$app->run($data2);










$players = array(
	array('attack' => 1, 'defense' => 2, 'health' => 10, 'level' => 2, ),
	array('attack' => 2, 'defense' => 1, 'health' => 10, 'level' => 2, ),
	array('attack' => 2, 'defense' => 2, 'health' => 10, 'level' => 2, ),
);

$count = 0;

while (true) {
	$count++;
	$players_temp = $players;
	$attacker_key = array_rand($players);
	$attacker     =& $players[$attacker_key];
	unset($players_temp[$attacker_key]);
	$defender_key = array_rand($players_temp);
	$defender     =& $players[$defender_key];

	$experience = rand(0, 50);

	$Attack = 0.5 * (1 + $defender['health']/100) * rand(50 + $experience, 100) / 100;

	$Damage = 0.05 + $experience / 100;

	echo "{$Attack} Unit-new Damag {$Damage}</br>";


	$hit = ($attacker['attack']/$defender['defense']) + rand(1, $attacker['level']);


	echo "{$count}. Units {$defender_key} ({$defender['health']} health) is hit a {$hit} by Units {$attacker_key} ({$attacker['health']} health) </br>";


	$defender['health'] = $defender['health'] - $hit;

	if ($defender['health'] <= 0) {
		echo "Units {$defender_key} dies, Units {$attacker_key} is victorious! </br>";
		break;
	}

}


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