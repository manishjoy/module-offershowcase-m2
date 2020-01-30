<?php
namespace ManishJoy\OfferShowcase\Block\Html;

use Magento\Store\Model\ScopeInterface;

class OfferShowcase extends \Magento\Framework\View\Element\Template
{
    protected $_scopeConfig;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_scopeConfig = $scopeConfig;
    }

    public function getConfigValue($fieldName){
        if (!$fieldName) {
            return;
        }
        return $this->_scopeConfig->getValue(
            'offer_showcase/general_settings/' . $fieldName, 
            ScopeInterface::SCOPE_STORE
        );
    }
}