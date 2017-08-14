<?php


require __DIR__ . '/../vendor/liw/core/App.php';


require __DIR__ . '/../app/App.php';

require __DIR__ . '/../app/IDo.php';

require __DIR__ . '/../app/Data.php';

require __DIR__ . '/../app/Data2.php';


$app = new app\App();


use app\App as AppObj;



class TestMy extends AppObj{
	public $age = 10;
	/**
	 * @var null
	 */
	public static $_instance = null;



	public function __construct() {
		parent::__construct();
	}

	public function test_unit(){
		$this->age;
	}

	public static function instance(){
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}

		print_r(self::$_instance);

		return self::$_instance;

	}



}

//$obj_return = new TestMy();


//TestMy::instance();

$data1 = new \app\Data();
$data2 = new \app\Data2();

//var_dump($app->run($data));

$app->run();






//$obj_return->foo();
//
//$obj_return->getColor();
//
//$obj_return->instance();