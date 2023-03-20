<?php

declare(strict_types=1);

namespace Dorn\Books\Controller\Adminhtml\Books;

class Index extends \Magento\Backend\App\Action implements \Magento\Framework\App\Action\HttpGetActionInterface
{
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        private \Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute(): \Magento\Framework\Controller\ResultInterface
    {
        return $this->pageFactory->create();
    }
}
