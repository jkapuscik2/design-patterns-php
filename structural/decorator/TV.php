<?php

namespace structural\decorator;

class TV implements Product {

	protected $price;
	protected $name;

	const TAX_RATE = 1.23;

	public function __construct (float $price, string $name) {
		$this->price = $price;
		$this->name = $name;
	}

	public function getName (): string {
		return "TV $this->name";
	}

	public function getPrice (): float {
		return $this->price * self::TAX_RATE;
	}
}