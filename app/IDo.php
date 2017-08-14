<?php


namespace app;


class IDo {
	public function walk($itIsRain = false){
		if($itIsRain){
			echo 'We don\'t wont go! </br>';
		} else {
			echo 'We wont go!</br>';
		}
	}
}