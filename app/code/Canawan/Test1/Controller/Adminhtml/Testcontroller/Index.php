<?php

namespace Canawan\Test1\Controller\Adminhtml\Testcontroller;

use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\App\Action;

class index extends \Magento\Backend\App\Action
{
//    protected $_pageFactory;

    public function __construct(Action\Context $context, PageFactory $pageFactory)
    {
//        $this->_pageFactory = $pageFactory;
//        parent::__construct($context);
    }

    public function execute()
    {
        echo "OK admin";
        exit;
//        return $this->_pageFactory->create();
    }
}
