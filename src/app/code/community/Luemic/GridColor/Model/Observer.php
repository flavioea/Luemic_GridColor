<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 05.11.14
 * Time: 20:49
 */

class Luemic_GridColor_Model_Observer
{

    public function coreBlockAbstractToHtmlBefore(Varien_Event_Observer $event)
    {
        $block = $event->getBlock();
        if ($block instanceof Mage_Adminhtml_Block_Sales_Order_Grid) {
            /** @var $block Mage_Adminhtml_Block_Sales_Order_Grid */
            foreach ($block->getColumns() as $column) {
                $renderer = $column->getRenderer();
                $wrapper = Mage::app()->getLayout()->createBlock('luemic_gridcolor/adminhtml_grid_renderer_wrapper');
                $wrapper->setColumn($column);
                $wrapper->setOriginalRenderer($renderer);
                $column->setRenderer($wrapper);
            }
            $block->setAdditionalJavaScript($block->getJsObjectName() . '.colorize()');
        }
    }

} 