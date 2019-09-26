<?php

namespace creational\abstract_factory;

interface DeviceFactory {

    public function makeIndoor (): IndoorProduct;

    public function makeOutdoor (): OutdoorProduct;
}