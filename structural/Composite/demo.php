<?php

namespace Structural\Composite;

require(__DIR__ . '/../../vendor/autoload.php');

$company = new Department("Global");

$accounting = new Department("Accounting");
$emmy = new Employee("Emmy", 5000);
$emma = new Employee("Emma", 15000);
$accounting->addDependent($emmy);
$accounting->addDependent($emma);

$it = new Department("IT");
$sara = new Employee("Sara", 10000);
$john = new Employee("John", 5000);
$it->addDependent($sara);
$it->addDependent($john);

$devops = new Department("Devops");
$johny = new Employee("Johny", 15000);
$devops->addDependent($johny);

$company->addDependent($accounting);
$company->addDependent($it);

echo("Total company salaries: \${$company->calculateBudget()}" . PHP_EOL);

