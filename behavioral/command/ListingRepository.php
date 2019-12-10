<?php

namespace behavioral\command;

final class ListingRepository
{
    public function create(string $title, string $content, string $author): void
    {
        echo sprintf("Creating new listing by \"%s\" and title \"%s\"", $author, $title).PHP_EOL;
        echo sprintf("Content: \"%s\"", $content).PHP_EOL;
        echo sprintf("Generated uid: \"%s\"", uniqid()).PHP_EOL;
    }

    public function delete(string $uid): void
    {
        echo sprintf("Removing job listing with uid: \"%s\"", $uid).PHP_EOL;
    }
}