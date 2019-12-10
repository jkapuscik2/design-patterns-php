<?php

namespace behavioral\command;

require(__DIR__.'/../../autoloader.php');

$client = new Client(new ListingRepository());
$client->createListing(
    "New job listing",
    "This is a content of a listing",
    "Company"
);
$client->deleteListing("Unique id");