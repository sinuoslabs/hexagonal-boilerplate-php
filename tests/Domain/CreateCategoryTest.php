<?php

use Domain\Blog\Category\Entity\Category;
use Domain\Blog\Category\UseCase\CreateCategoryUseCase;
use Infrastructure\Adapters\InMemory\InMemoryCategoryRepository;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertInstanceOf;

it("should create category and get created category", function () {
    $repository = new InMemoryCategoryRepository;

    $useCase = new CreateCategoryUseCase($repository);

    $category = $useCase->execute([
        'id' => null,
        'name' => 'Sante',
        'createdAt' => new DateTime(),
        'updatedAt' => new DateTime(),
    ]);

    assertInstanceOf(Category::class, $category);
    assertEquals($category, $repository->find($category->id));
});