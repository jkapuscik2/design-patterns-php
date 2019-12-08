<?php

namespace behavioral\visitor;

require(__DIR__.'/../../autoloader.php');

$john = new Student("John");
$john->addSickLeave(new \DateTime("2019-10-01"), new \DateTime("2019-10-21"));
$john->addSickLeave(new \DateTime("2019-11-02"), new \DateTime("2019-11-10"));

$jan = new Student("Jan");
$jan->addSickLeave(new \DateTime("2019-11-01"), new \DateTime("2019-11-15"));

$ann = new Student("Ann");

$university = new University("Visitor University", [$john, $jan, $ann]);
$sickLeaveReport = new SickLeaveReport();
$results = $sickLeaveReport->visitUniversity($university);

function show($data)
{
    foreach ($data as $datum) {
        echo $datum.PHP_EOL;
    }
}

show($results);