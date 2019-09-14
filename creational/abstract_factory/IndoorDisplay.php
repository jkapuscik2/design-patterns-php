<?php

namespace creational\abstract_factory;

class IndoorDisplay implements IndoorProduct {

	public function testTouch (): void {
		echo "Testing touch in IndoorDisplay" . PHP_EOL;
	}

	public function testSensors (): void {
		echo "Testing sensors in IndoorDisplay" . PHP_EOL;
	}
}