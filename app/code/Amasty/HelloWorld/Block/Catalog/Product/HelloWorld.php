<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2015 Amasty (http://www.amasty.com)
 * @package Amasty_HelloWorld
 */
namespace Amasty\HelloWorld\Block\Catalog\Product;

class HelloWorld extends \Magento\Framework\View\Element\Template
{
	/**
	* @var \Amasty\HelloWorld\Helper\Data
	*/
    protected $_helper;
 
	public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data = [], \Amasty\HelloWorld\Helper\Data $helper)
	{
		parent::__construct($context, $data);
		$this->_helper = $helper;
	}
  

}
