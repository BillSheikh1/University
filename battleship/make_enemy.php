<?php

class Enemy {
	
	private $positions = [];
	private $isAlive;
	
	public function __construct($positions, $isAlive) {
		$this->positions = $positions;
		$this->isAlive = $isAlive;
	}
	
	public function getPosition($num) {
		if($num > count($this->positions)) {
			return 'Invalid.';
		}
		else {
			return $this->positions[$num];
		}
	}
	
	public function getAllPosition() {
		return $this->positions;
	}
	
	public function isHit($hit) {
		$ow = array_search($hit, $this->positions);
		
		unset($this->positions[$ow]);
		
		if(empty($this->positions)) {
			$this->isAlive = false;
		}
	}
	
	public function getStatus() {
		return $this->isAlive;
	}
	
}

?>