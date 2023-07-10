<?php

namespace App\Behavioral\Command;

final readonly class DeleteListing implements Command
{
    public function __construct(private ListingRepository $repository, private string $listingUid)
    {
    }

    public function handle(): void
    {
        $this->repository->delete($this->listingUid);
    }
}
