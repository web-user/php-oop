<?php
namespace liw\core;

/**
 * Class App
 */
class App {
	public $color = 'green';

    public function __construct() {
        echo 'Создался новый экземпляр класса из папки "vendor/liw/core/"';
    }

    public function getColor(){
    	echo $this->color;
    }
}
