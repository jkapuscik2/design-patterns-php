<?php

namespace Behavioral\Visitor;

require(__DIR__ . '/../../vendor/autoload.php');

$john = new Student("John");
$john->addSickLeave(new \DateTime("2019-10-01"), new \DateTime("2019-10-21"));
$john->addSickLeave(new \DateTime("2019-11-02"), new \DateTime("2019-11-10"));

$jan = new Student("Jan");
$jan->addSickLeave(new \DateTime("2019-11-01"), new \DateTime("2019-11-15"));

$ann = new Student("Ann");

$university = new University("Visitor University", [$john, $jan, $ann]);
$results = $university->accept(new SickLeaveReport());

function show($data)
{
    foreach ($data as $datum) {
        echo $datum.PHP_EOL;
    }
}

show($results);