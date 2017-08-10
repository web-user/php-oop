<?php
/**
 * Это единая точка входа для нашего приложения.
 * На этот файл будут переадресованы все запросы нашего сайта.
 */

// Подключили файл из папки vendor
require __DIR__ . '/../vendor/liw/core/App.php';

// Подключили файл из папки app
require __DIR__ . '/../app/App.php';

// создали новый объект класса из папки vendor
//$app = new app\App();

use app\App as AppObj;


class TestMy extends AppObj{
	public $age = 10;
	public static $_instance = null;

	public function __construct() {
		parent::__construct();
	}

	public function test_unit(){
		$this->age;
	}

	public function instance(){
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}

		print_r(self::$_instance);

		return self::$_instance;

	}



}

//$obj_return = new TestMy();

function wr_op(){
	return TestMy::instance();
}

wr_op()->color;


//$obj_return->foo();
//
//$obj_return->getColor();
//
//$obj_return->instance();