<?php

use Domain\Blog\Category\Entity\Category;
use Domain\Blog\Category\UseCase\CreateCategoryUseCase;
use function PHPUnit\Framework\assertInstanceOf;

it("should create category", function () {
    $useCase = new CreateCategoryUseCase;

    $category = $useCase->execute([
        'id' => null,
        'name' => 'Sante',
        'createdAt' => new DateTime(),
        'updatedAt' => new DateTime(),
    ]);

    assertInstanceOf(Category::class, $category);
});