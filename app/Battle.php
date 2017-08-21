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

	/**
	 * @param $values
	 *
	 * @return float|int
	 */
	public function average($values){

		return array_sum($values) / count($values);

	}


	/**
	 * @param $health
	 * @param $experience
	 *
	 * @return float
	 */
	protected function AttackSoldiers($health, $experience){

		return  0.5 * (1 + $health/100) * rand(50 + $experience, 100) / 100;

	}

	/**
	 * @param $health
	 * @param $operators
	 *
	 * @return float
	 */
	protected function AttackVehicle($health, $operators){
		return 0.5 * (1 + $health / 100) * $this->average($operators);
	}

	/**
	 * @param $input
	 *
	 * @return mixed
	 */
	protected function get_type_attack($input){
		return $input[mt_rand(0, count($input) - 1)];
	}

	/**
	 * @param $experience
	 *
	 * @return float
	 */
	protected function DamageAttack($experience){
		return 0.05 + $experience / 100;
	}
}