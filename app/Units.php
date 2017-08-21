<?php
namespace liw\app;


class Units {
	protected $health;
	protected $recharge;

	/**
	 * @param $attack
	 * @param $defense
	 * @param $health
	 * @param $level
	 *
	 * @return array
	 */
	public function battle($attack,$defense, $health, $level ){
		return array('attack' => $attack, 'defense' => $defense, 'health' => $health, 'level' => $level);
	}

}