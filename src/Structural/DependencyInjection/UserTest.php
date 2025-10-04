<?php
declare(strict_types=1);

namespace App\Structural\DependencyInjection;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testRegisterOk()
    {
        $userStorage = $this->getMockBuilder(UserStorage::class)
            ->disableOriginalConstructor()
            ->onlyMethods(["save"])
            ->getMock();
        $userStorage->expects($this->once())->method("save")->willReturn(true);

        $user = new User($userStorage);
        $testEmail = "aaaaa@wp.pl";
        $testPassword = "123456";

        $this->assertTrue($user->register($testEmail, $testPassword));
    }

    public function testRegisterFail()
    {
        $userStorage = $this->getMockBuilder(UserStorage::class)
            ->disableOriginalConstructor()
            ->onlyMethods(["save"])
            ->getMock();
        $userStorage->expects($this->once())->method("save")->willReturn(false);

        $user = new User($userStorage);
        $testEmail = "aaaaa@wp.pl";
        $testPassword = "123456";

        $this->assertFalse($user->register($testEmail, $testPassword));
    }

    public function testRegisterValidationFail()
    {
        $userStorage = $this->getMockBuilder(UserStorage::class)
            ->disableOriginalConstructor()
            ->onlyMethods(["save"])
            ->getMock();
        $userStorage->expects($this->never())->method("save");

        $user = new User($userStorage);
        $wrongEmail = "aa";
        $wrongPassword = "12";

        $this->assertFalse($user->register($wrongEmail, $wrongPassword));
    }

}
