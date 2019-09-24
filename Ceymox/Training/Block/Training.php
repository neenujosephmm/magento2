<?php
namespace Ceymox\Training\Block;
class Training extends \Magento\Framework\View\Element\Template
{
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
    public function  helloWorld()
    {
        return _('Hello World');
    }
    

}