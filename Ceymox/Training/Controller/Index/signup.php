<?php
namespace Ceymox\Training\Controller\Index;


class Signup extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		//echo "Hello World";
		//exit;
		return $this->_pageFactory->create();
        //$resultPage->getConfig()->getTitle()->prepend(__('WELCOME'));
        
	}
}
