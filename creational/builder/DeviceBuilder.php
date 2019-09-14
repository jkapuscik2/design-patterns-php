<?php

namespace creational\builder;

interface DeviceBuilder {

	public function setHardware();

	public function setSoftware();

	public function setupSLA();

	public function createDevice();

	public function getDevice();

}