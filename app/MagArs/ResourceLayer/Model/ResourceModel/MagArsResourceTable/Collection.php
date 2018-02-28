<?php
/**
 * Created by PhpStorm.
 * User: amuh
 * Date: 28-Feb-18
 * Time: 11:18 AM
 */

namespace MagArs\ResourceLayer\Model\ResourceModel\MagArsResourceTable;


use MagArs\ResourceLayer\Model\MagArsResourceTable;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection {

    protected function _construct() {

        $this->_init(MagArsResourceTable::class,\MagArs\ResourceLayer\Model\ResourceModel\MagArsResourceTable::class);

    }

}