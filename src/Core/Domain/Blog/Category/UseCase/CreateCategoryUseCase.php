<?php

namespace Domain\Blog\Category\UseCase;

use Domain\Blog\Category\Entity\Category;
use Domain\Blog\Category\Port\CategoryRepositoryInterface;

class CreateCategoryUseCase
{
    protected CategoryRepositoryInterface $repository;

    /**
     * @param CategoryRepositoryInterface $repository
     */
    public function __construct(CategoryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    public function execute(array $data): Category
    {
        return $this->repository->save(
            new Category($data['id'], $data['name'], $data['createdAt'], $data['updatedAt'])
        );
    }
}