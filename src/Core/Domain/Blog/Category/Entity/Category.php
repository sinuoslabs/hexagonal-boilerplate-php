<?php

namespace Domain\Blog\Category\Entity;

use DateTimeInterface;

class Category
{
    public ?string $id;

    public string $name;

    public DateTimeInterface $createdAt;

    public DateTimeInterface $updatedAt;


    public function __construct(?string $id, string $name, DateTimeInterface $createdAt, DateTimeInterface $updatedAt)
    {
        $this->id = $id ?? uniqid();
        $this->name = $name;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}
