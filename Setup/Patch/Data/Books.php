<?php

declare(strict_types=1);

namespace Dorn\Books\Setup\Patch\Data;

use Dorn\Books\Model\BookFactory;
use Dorn\Books\Model\BookRepository;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class Books implements DataPatchInterface
{
    public function __construct(
        private readonly BookFactory $bookFactory,
        private readonly BookRepository $bookRepository
    ) {
    }

    public static function getDependencies(): array
    {
        return [];
    }

    public function getAliases(): array
    {
        return [];
    }

    public function apply()
    {
        $book = $this->bookFactory->create();

        $book->addData([
            'title'  => 'Angels and Demons',
            'author' => 'Dan Brown',
            'price'  => '666.66',
            'pages'  => '768'
        ]);

        $this->bookRepository->save($book);
    }
}
