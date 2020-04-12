<?php

namespace Behavioral\Iterator;

require(__DIR__ . '/../../vendor/autoload.php');

$john = new CompanyEmployeeTeam(new Employee("John", 'Director'));
$tom = new CompanyEmployeeTeam(new Employee("Tom", 'Developer'));
$johny = new CompanyEmployeeTeam(new Employee("Johny", 'Developer'));
$ceo = new CompanyEmployeeTeam(new Employee("Mark", "CEO"));

$john->addSubordinate($tom);
$john->addSubordinate($johny);
$ceo->addSubordinate($john);

showTeam($ceo);

$jan = new CompanyEmployeeTeam(new Employee("Jan", 'Developer'));
$ceo->addSubordinate($jan);

showTeam($ceo);

$ceo->removeSubordinate($jan);

showTeam($ceo);

function showTeam ($users) {
    foreach ($users as $user) {
        echo $user->getPosition() . ": " . $user->getName() . PHP_EOL;
    }
    echo "Number of subordinates of " . $users->getName() . ": " . count($users) . PHP_EOL;
}