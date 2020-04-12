<?php

namespace Creational\Builder;


class Director {

    public function buildDevice (DeviceBuilder $builder) {

        $builder->createDevice();
        $builder->setHardware();
        $builder->setSoftware();
        $builder->setupSLA();

        return $builder->getDevice();
    }
}