<?php

namespace Behavioral\Command;

final class DeleteListing implements Command
{
    private $repository;
    private $listingUid;

    public function __construct(ListingRepository $repository, string $listingUid)
    {
        $this->repository = $repository;
        $this->listingUid = $listingUid;
    }

    public function handle(): void
    {
        $this->repository->delete($this->listingUid);
    }
}