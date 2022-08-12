<?php

namespace Infrastructure\Adapters\InMemory;

use Domain\Blog\Category\Entity\Category;
use Domain\Blog\Category\Port\CategoryRepositoryInterface;

class InMemoryCategoryRepository implements CategoryRepositoryInterface
{

    public array $categories = [];

    public function find(string $id): ?Category
    {
        return $this->categories[$id];
    }

    public function save(Category $category): Category
    {
        return $this->categories[$category->id] = $category;
    }
}