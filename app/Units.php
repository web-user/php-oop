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
	public function battle($defense, $health, $level ){
		return array('attack' => array('random','weakest', 'strongest'), 'defense' => $defense, 'health' => $health, 'level' => $level);
	}

}