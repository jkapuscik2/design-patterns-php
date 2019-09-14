<?php

namespace structural\decorator;

abstract class ProductDecorator implements Product {

	protected $product;

	public function __construct (Product $product) {
		$this->product = $product;
	}

	public abstract function getName (): string;

	public abstract function getPrice (): float;

}