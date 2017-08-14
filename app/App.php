<?php
namespace app;

use liw\core\App as BaseApp;

/**
 * Class App
 * @package app
 */

class App extends BaseApp {
	public $age = 5;
	public $color = 'red';

	public function __construct() {
//		parent::__construct();
//		echo 'Code class method with folder app/</br>';
	}

	public function foo() {
		echo '</br> method class App' . "$this->age";

	}

	public function run($data = null){
		echo $data->get();
	}







}
