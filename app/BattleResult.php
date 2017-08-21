<?php
namespace liw\app;

use liw\app\Battle;


class BattleResult {

	public $unit_play;
	public $unit_res;


	public function result($players){

//		$this->unit_res = new Battle();
//
//		$this->unit_play = $players;
//
//		$this->unit_res->Attack($this->unit_play);



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

//			echo "{$Attack} Unit-new Damag {$Damage}</br>";


			$hit = ($attacker['attack']/$defender['defense']) + rand(1, $attacker['level']);

			$defender['health'] = $defender['health'] - $hit;


			echo "{$count}. Units {$defender_key} ({$defender['health']} health) is hit a {$hit} by Units {$attacker_key} ({$attacker['health']} health) </br>";




			if ($defender['health'] <= 0) {
				echo "Units {$defender_key} dies, Units {$attacker_key} is victorious! </br>";
				break;
			}

		}
	}
}