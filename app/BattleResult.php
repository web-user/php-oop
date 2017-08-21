<?php
namespace liw\app;

use liw\app\Battle;


class BattleResult extends Battle{

	public $unit_play;
	public $unit_res;



	public function result($players){

//		$this->unit_res = new Battle();
//
//		$this->unit_play = $players;
//
//		$this->unit_res->Attack($this->unit_play);



		if( 2 <= count($players) ){

			set_time_limit(1);

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


				$Attack = parent::AttackSoldiers($defender['health'], $experience);

				$Damage =  parent::DamageAttack($experience);

				$type_at = parent::get_type_attack($attacker['attack']);


				echo "{$Attack} Unit-new Damag {$Damage} Attack - {$type_at}</br>";


				$hit = ( count($attacker['attack'])/$defender['defense'] ) + rand( 1, $attacker['level'] );

				$defender['health'] = $defender['health'] - $hit;


				// echo "{$count}. Units {$defender_key} ({$defender['health']} health) is hit a {$hit} by Units {$attacker_key} ({$attacker['health']} health) </br>";
				//



				if ($defender['health'] <= 0) {
					// echo "Units {$defender_key} dies, Units {$attacker_key} is victorious! </br>";
					break;
				}

			}

		} else {
			echo "Add one Unit for game please!";
		}

	}
}