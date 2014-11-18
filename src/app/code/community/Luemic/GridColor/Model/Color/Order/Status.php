<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 12.11.14
 * Time: 21:29
 */

class Luemic_GridColor_Model_Color_Order_Status implements Luemic_GridColor_Model_Color_Interface
{

    public function getColor(Varien_Object $object)
    {
        $colorClass = '';
        if ($object instanceof Mage_Sales_Model_Order) {
            $state = $object->getStatus();
            $colorClass = $this->getColorClass($state);
        }

        return $colorClass;
    }

    protected function getColorClass($state)
    {
        $colorClass = '';
        if ($state === Mage_Sales_Model_Order::STATE_CANCELED) {
            $colorClass = 'order_state_canceled';
        }
        if ($state === Mage_Sales_Model_Order::STATE_COMPLETE) {
            $colorClass = 'order_state_complete';
        }
        if ($state === Mage_Sales_Model_Order::STATE_PROCESSING) {
            $colorClass = 'order_state_processing';
        }
        if ($state === Mage_Sales_Model_Order::STATE_CLOSED) {
            $colorClass = 'order_state_closed';
        }

        return $colorClass;
    }
}