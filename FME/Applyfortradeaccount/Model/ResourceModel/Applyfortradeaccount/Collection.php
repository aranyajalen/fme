<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace FME\Applyfortradeaccount\Model\ResourceModel\Applyfortradeaccount;

use FME\Applyfortradeaccount\Model\ResourceModel\AbstractCollection;

/**
 * CMS page collection
 */
class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'applyfortradeaccount_id';

    
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('FME\Applyfortradeaccount\Model\Applyfortradeaccount', 'FME\Applyfortradeaccount\Model\ResourceModel\Applyfortradeaccount');
        $this->_map['fields']['applyfortradeaccount_id'] = 'main_table.applyfortradeaccount_id';
    }

    
    public function addStoreFilter($store, $withAdmin = true)
    {
        return $this;
    }
}
