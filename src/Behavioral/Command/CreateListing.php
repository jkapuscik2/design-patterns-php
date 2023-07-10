<?php

namespace App\Behavioral\Command;

use LengthException;

final readonly class CreateListing implements Command
{
    private const MIN_TITLE_LENGTH = 10;
    private const MIN_CONTENT_LENGTH = 15;
    private const MIN_AUTHOR_LENGTH = 5;

    public function __construct(private ListingRepository $repository, private string $title, private string $content, private string $author)
    {
    }

    private function validate(): void
    {
        if (mb_strlen($this->title) < self::MIN_TITLE_LENGTH) {
            throw new LengthException(sprintf(
                "Title is too short. Must be at least %d characters",
                self::MIN_TITLE_LENGTH
            ));
        }
        if (mb_strlen($this->content) < self::MIN_CONTENT_LENGTH) {
            throw new LengthException(sprintf(
                "Content is too short. Must be at least %d characters",
                self::MIN_CONTENT_LENGTH
            ));
        }
        if (mb_strlen($this->author) < self::MIN_AUTHOR_LENGTH) {
            throw new LengthException(sprintf(
                "Author name is too short. Must be at least %d characters",
                self::MIN_AUTHOR_LENGTH
            ));
        }
    }

    public function handle(): void
    {
        $this->validate();
        $this->repository->create($this->title, $this->content, $this->author);
    }
}
