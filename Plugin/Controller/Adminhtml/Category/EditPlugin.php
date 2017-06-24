<?php
/**
 * This file is part of Opengento_Categoryid for Magento.
 *
 * @license MIT
 * @author Maxime Huran <m.huran@monsieurbiz.com> <@MaximeHuran>
 * @category Opengento
 * @package Opengento_Categoryid
 * @copyright Copyright (c) 2017 Opengento (https://www.opengento.fr/)
 */
namespace Opengento\Categoryid\Plugin\Controller\Adminhtml\Category;

use Magento\Catalog\Controller\Adminhtml\Category\Edit;

/**
 * Class EditPlugin
 * @package Opengento\Categoryid\Plugin\Controller\Adminhtml\Category
 */
class EditPlugin
{
    /**
     * Add the category ID inside the page title
     *
     * @param Edit $subject
     * @param $result
     * @return mixed
     */
    public function afterExecute(Edit $subject, $result)
    {
        $categoryId = (int) $subject->getRequest()->getParam('id');
        $short = $result->getConfig()->getTitle()->getShort();
        $result->getConfig()->getTitle()->prepend($categoryId ? sprintf('%s (ID : %d)', $short, $categoryId) : '');
        return $result;
    }
}

