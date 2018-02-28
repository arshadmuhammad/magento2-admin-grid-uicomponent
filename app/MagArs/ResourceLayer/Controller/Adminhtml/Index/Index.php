<?php
/**
 * Created by PhpStorm.
 * User: amuh
 * Date: 28-Feb-18
 * Time: 11:27 AM
 */

namespace MagArs\ResourceLayer\Controller\Adminhtml\Index;


use Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action {

    public function execute() {
        /** @var \Magento\Framework\View\Result\Page $result */
        $result = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $result;
    }
}