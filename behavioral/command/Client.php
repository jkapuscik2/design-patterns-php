<?php

namespace behavioral\command;

final class Client
{
    private $listingRepository;

    public function __construct(ListingRepository $repository)
    {
        $this->listingRepository = $repository;
    }

    public function createListing(string $title, string $content, string $author): void
    {
        $command = new CreateListing($this->listingRepository, $title, $content, $author);
        $command->handle();
    }

    public function deleteListing(string $listingUid) : void
    {
        $command = new DeleteListing($this->listingRepository, $listingUid);
        $command->handle();
    }

}