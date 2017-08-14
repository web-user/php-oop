<?php
namespace liw\core;

/**
 * Class App
 */
abstract class App {
	public $color = 'green';

    public function __construct() {
        echo 'Создался новый экземпляр класса из папки "vendor/liw/core/"';
    }

    public function getColor(){
    	echo $this->color;
    }

    abstract public function run();

    final public function getFramework(){
    	return 'Flasky';
    }
}
