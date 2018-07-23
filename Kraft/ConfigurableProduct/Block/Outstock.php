<?php

namespace Kraft\ConfigurableProduct\Block;

class Outstock extends \Magento\Swatches\Block\Product\Renderer\Configurable
{

   public function getAllowProducts()
    {
        if (!$this->hasAllowProducts()){
             $products = $this->getProduct()->getTypeInstance()->getUsedProducts($this->getProduct(), null);
             $this->setAllowProducts($products);
        }
        return $this->getData('allow_products');
    }
}
