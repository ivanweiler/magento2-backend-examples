<?php

namespace Inchoo\Sample04\Model\ResourceModel;

use Magento\Cms\Model\ResourceModel\AbstractCollection;
use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class News extends AbstractDb
{
    /**
     * Initialize news Resource
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('inchoo_news', 'news_id');
    }
}
