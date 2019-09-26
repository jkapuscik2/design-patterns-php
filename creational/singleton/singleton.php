<?php

namespace creational\singleton;

class ActiveUser {

    private $email;
    private static $instance;

    private function __construct () {
        // Email is retrieved from a db
        $this->email = "active@user.com";
    }

    private function __clone () {
    }

    public function setName (string $email): void {
        $this->email = $email;
    }

    public function changeEmail (): string {
        return $this->email;
    }


    private static function get (): ActiveUser {
        return new ActiveUser();
    }

    public static function getInstance (): ActiveUser {
        if (!self::$instance) {
            self::$instance = self::get();
        }
        return self::$instance;
    }
}
