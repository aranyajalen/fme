<?php
namespace FME\Applyfortradeaccount\Block;

use Magento\Framework\View\Element\Template;
 
class Postform extends Template
{
        
        
        const CONFIG_CAPTCHA_PUBLIC_KEY = 'applyfortradeaccount/google_options/googlepublickey';
        const CONFIG_CAPTCHA_THEME = 'applyfortradeaccount/google_options/theme';
        const CONFIG_CAPTCHA_ENABLE = 'applyfortradeaccount/google_options/captchastatus';
        
        const CONFIG_FILE_EXT_UPLOAD = 'applyfortradeaccount/upload/allow';
        
    protected $scopeConfig;
        
        
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        
        $this->scopeConfig = $context->getScopeConfig();
        parent::__construct($context);
    }
        
        
               
    public function getFormAction()
    {
        return $this->getUrl('applyfortradeaccount/index/post', ['_secure' => true]);
    }
        
        
        
    public function getCaptchaTheme()
    {
                
        $theme = $this->scopeConfig->getValue(self::CONFIG_CAPTCHA_THEME);
        return $theme;
    }
        
    public function isCaptchaEnable()
    {
                
        $enable = $this->scopeConfig->getValue(self::CONFIG_CAPTCHA_ENABLE);
        return $enable;
    }
        
    public function getAllowedFileExtensions()
    {
                
        $ext = $this->scopeConfig->getValue(self::CONFIG_FILE_EXT_UPLOAD);
        return $ext;
    }
    public function getPublicKey()
    {
        
        return $this->scopeConfig->getValue(self::CONFIG_CAPTCHA_PUBLIC_KEY);
    }
}
