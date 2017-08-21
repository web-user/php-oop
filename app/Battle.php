<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.08.17
 * Time: 9:35
 */

namespace liw\app;

use liw\app\BattleResult;




class Battle {

	public $players_temp;
	public $attacker_key;


	public function Attack($players){

		new BattleResult();

		$count = 0;

		while (true) {
			$count++;

			$this->players_temp = $players;

			$this->attacker_key = array_rand($players);

			$attacker     =& $players[$this->attacker_key];

			unset($this->players_temp[$this->attacker_key]);

			$defender_key = array_rand($this->players_temp);

			$defender     =& $players[$defender_key];

			$experience = rand(0, 50);

			$Attack = 0.5 * (1 + $defender['health']/100) * rand(50 + $experience, 100) / 100;

			$Damage = 0.05 + $experience / 100;

			//			echo "{$Attack} Unit-new Damag {$Damage}</br>";


			$hit = ($attacker['attack']/$defender['defense']) + rand(1, $attacker['level']);





		}
	}
}