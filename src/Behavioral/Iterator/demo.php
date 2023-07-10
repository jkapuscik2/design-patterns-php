<?php

namespace App\Behavioral\Iterator;

require(__DIR__ . '/../../../vendor/autoload.php');

$tech = new Team("TECH", new Employee("John", 'Director'));
$teamA = new Team("Team A", new Employee("Tom", 'Team Leader'));
$teamB = new Team("Team B", new Employee("Johny", 'Team Leader'));
$ceo = new Team("Company", new Employee("Mark", "CEO"));

$tech->addTeam($teamA);
$tech->addTeam($teamB);
$ceo->addTeam($tech);

$ceo->printSummary();

$teamC = new Team("Team C", new Employee("Jan", 'Team Leader'));
$tech->addTeam($teamC);

$ceo->printSummary();

$ceo->detachTeam($teamC);
$tech->printSummary();
