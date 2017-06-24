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
namespace Opengento\Categoryid\Plugin\Block\Adminhtml\Category;

use Magento\Catalog\Block\Adminhtml\Category\Tree;

/**
 * Class TreePlugin
 * @package Opengento\Categoryid\Plugin\Block\Adminhtml\Category
 */
class TreePlugin
{
    /**
     * Add the category ID inside the category tree
     *
     * @param Tree $subject
     * @param \Closure $proceed
     * @param $node
     * @return string
     */
    public function aroundBuildNodeName(Tree $subject, \Closure $proceed, $node)
    {
        return sprintf('%s [ID : %d]', $proceed($node), $node->getId());
    }
}

