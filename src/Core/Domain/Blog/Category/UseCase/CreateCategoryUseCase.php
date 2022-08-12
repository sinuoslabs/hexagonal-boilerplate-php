<?php

namespace Domain\Blog\Category\UseCase;

use Domain\Blog\Category\Entity\Category;

class CreateCategoryUseCase
{
    public function execute(array $data): Category
    {
        return new Category($data['id'], $data['name'], $data['createdAt'], $data['updatedAt'],);
    }
}