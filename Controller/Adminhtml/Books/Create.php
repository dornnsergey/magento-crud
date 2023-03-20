<?php

declare(strict_types=1);

namespace Dorn\Books\Controller\Adminhtml\Books;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\PageFactory;

class Create implements HttpGetActionInterface
{
    public function __construct(
        private PageFactory $pageFactory
    ) {
    }

    /**
     * @inheritDoc
     */
    public function execute(): ResultInterface
    {
        return $this->pageFactory->create();
    }
}
