<?php

namespace creational\abstract_factory;

class IotFactory implements DeviceFactory {

	public function makeIndoor (): IndoorProduct {
		return new IndoorIot();
	}

	public function makeOutdoor (): OutdoorProduct {
		return new OutdoorIot();
	}
}