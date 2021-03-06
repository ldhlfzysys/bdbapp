<?php
/**
 * Adepta Software Ltd
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 *
 * @copyright   Copyright (c) 2012 Adepta Software Ltd. (http://adeptasoftware.co.uk)
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */
?>
<?php
 
class Adepta_DeliveryTime_Block_Display_Deliverydate extends Mage_Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('adepta_deliverytime/sales/view_delivery_date.phtml');     
    }
 
    public function displayDeliveryDate()
    {
        $displayDate = false;
 
        if($this->getOrder()->getDesiredDeliveryDate() != NULL)
            $displayDate = true;
 
        return $displayDate;
    }
 
    public function getDisplayDeliveryDate()
    {
        return $this->getOrder()->getDisplayFormattedDeliveryDate();
    }
 
    public function getOrder()
    {
        return Mage::registry('current_order');
    }
}
