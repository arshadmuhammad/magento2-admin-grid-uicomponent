<?php
/**
 * Created by PhpStorm.
 * User: amuh
 * Date: 28-Feb-18
 * Time: 11:47 AM
 */

namespace MagArs\ResourceLayer\Model\ResourceModel\MagArsResourceTable\Grid;


use MagArs\ResourceLayer\Model\ResourceModel\MagArsResourceTable;
use Magento\Framework\Data\Collection\Db\FetchStrategyInterface as FetchStrategy;
use Magento\Framework\Data\Collection\EntityFactoryInterface as EntityFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult;
use Psr\Log\LoggerInterface as Logger;

class Collection extends SearchResult {

    public function __construct(
        EntityFactory $entityFactory,
        Logger $logger,
        FetchStrategy $fetchStrategy,
        EventManager $eventManager,
        $mainTable = 'magars_resource_table',
        $resourceModel = MagArsResourceTable::class,
        $identifierName = null,
        $connectionName = null) {
        parent::__construct(
            $entityFactory,
            $logger,
            $fetchStrategy,
            $eventManager,
            $mainTable,
            $resourceModel,
            $identifierName,
            $connectionName
        );
    }

}