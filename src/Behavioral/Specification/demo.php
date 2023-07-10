<?php

namespace App\Behavioral\Specification;

use DateTime;

require(__DIR__ . '/../../../vendor/autoload.php');

$hackerStudent = new Candidate(
    25,
    [
        new WorkExperience("Facebook", new DateTime("2016-10-01"), new DateTime("2017-11-01"))
    ],
    [
        new Education("University of Warsaw", new DateTime("2019-10-01"), new DateTime())
    ],
    true
);

$student = new Candidate(
    22,
    [
        new WorkExperience("Google", new DateTime("2016-10-01"), new DateTime("2017-11-01"))
    ],
    [
        new Education("University of Warsaw", new DateTime("2019-10-01"), new DateTime())
    ],
    false
);

$recentGraduate = new Candidate(
    29,
    [
        new WorkExperience("Microsoft", new DateTime("2018-01-01"), new DateTime("2018-10-01")),
        new WorkExperience("Microsoft", new DateTime("2019-01-01"), new DateTime("2019-08-01"))
    ],
    [
        new Education("University of Warsaw", new DateTime("2018-10-01"), new DateTime("2020-06-01"))
    ],
    false
);

$candidates = [
    $hackerStudent,
    $student,
    $recentGraduate
];

$ageSpecification = new MaxAgeSpecification(40);
$studentSpecification = new StudentSpecification();
$recentGraduateSpecification = new RecentGraduateSpecification();
$workExperienceSpecification = new WorkExperienceSpecification(1);
$convictedSpecification = new ConvictedSpecification();

$internshipSpecification = new AndSpecification(
    $ageSpecification,
    new OrSpecification($studentSpecification, $recentGraduateSpecification),
    $workExperienceSpecification,
    new NotSpecification($convictedSpecification)
);

$candidatesToContact = [];

foreach ($candidates as $candidate) {
    if ($internshipSpecification->isSatisfiedBy($candidate)) {
        $candidatesToContact[] = $candidate;
    }
}

print_r($candidatesToContact);
