<?php

namespace Behavioral\Command;

require(__DIR__ . '/../../vendor/autoload.php');

$client = new Client(new ListingRepository());
$client->createListing(
    "New job listing",
    "This is a content of a listing",
    "Company"
);
$client->deleteListing("Unique id");