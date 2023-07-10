<?php

namespace App\Behavioral\Command;

final readonly class Client
{
    public function __construct(private ListingRepository $listingRepository)
    {
    }

    public function createListing(string $title, string $content, string $author): void
    {
        $command = new CreateListing($this->listingRepository, $title, $content, $author);
        $command->handle();
    }

    public function deleteListing(string $listingUuid): void
    {
        $command = new DeleteListing($this->listingRepository, $listingUuid);
        $command->handle();
    }
}
