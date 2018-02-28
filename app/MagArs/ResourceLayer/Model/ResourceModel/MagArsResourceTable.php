<?php
/**
 * Created by PhpStorm.
 * User: amuh
 * Date: 28-Feb-18
 * Time: 11:18 AM
 */

namespace MagArs\ResourceLayer\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class MagArsResourceTable extends AbstractDb {

    protected function _construct() {
        $this->_init('magars_resource_table','id');
    }
}