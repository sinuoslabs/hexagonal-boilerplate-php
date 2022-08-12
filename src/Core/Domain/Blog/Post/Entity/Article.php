<?php

namespace Domain\Blog\Post\Entity;

use DateTimeInterface;

class Article
{
    public ?string $id;

    public string $title;

    public string $content;

    public ?DateTimeInterface $publishedAt;

    public DateTimeInterface $createdAt;

    public DateTimeInterface $updatedAt;

    /**
     * @param string|null $id
     * @param string $title
     * @param string $content
     * @param DateTimeInterface|null $publishedAt
     * @param DateTimeInterface $createdAt
     * @param DateTimeInterface $updatedAt
     */
    public function __construct(?string $id, string $title, string $content, ?DateTimeInterface $publishedAt, DateTimeInterface $createdAt, DateTimeInterface $updatedAt)
    {
        $this->id = $id ?? uniqid();
        $this->title = $title;
        $this->content = $content;
        $this->publishedAt = $publishedAt;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}