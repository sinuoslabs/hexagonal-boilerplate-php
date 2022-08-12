<?php

namespace Domain\Blog\Category\Port;

use Domain\Blog\Category\Entity\Category;

interface CategoryRepositoryInterface
{
    public function find(string $id): ?Category;

    public function save(Category $category);
}