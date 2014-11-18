<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 05.11.14
 * Time: 21:27
 */

class Luemic_GridColor_Block_Adminhtml_Grid_Renderer_Wrapper
    extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{

    protected $originalRenderer = null;

    /**
     * @return null
     */
    public function getOriginalRenderer()
    {
        return $this->originalRenderer;
    }

    /**
     * @param null $originalRenderer
     */
    public function setOriginalRenderer($originalRenderer)
    {
        $this->originalRenderer = $originalRenderer;
    }



    public function render(Varien_Object $row)
    {
        $model = Mage::getModel('luemic_gridcolor/color_order_status');
        $color = $model->getColor($row);
        $html = '<div class="'. $color .'">';
        if ($this->getOriginalRenderer() !== null) {
            $html .= $this->getOriginalRenderer()->render($row);
        }
        $html .= '</div>';

        return $html;
    }
} 