<?php
class Fecka_EmerchantPay_Model_System_Config_Source_PaymentAction
{
    public function toOptionArray()
    {
        return array(
            /* not yet
            array(
                'value' => Fecka_EmerchantPay_Model_Direct::ACTION_AUTHORIZE,
                'label' => Mage::helper('emerchant')->__('Authorize Only')
            ),
            */
            array(
                'value' => Fecka_EmerchantPay_Model_Direct::ACTION_AUTHORIZE_CAPTURE,
                'label' => Mage::helper('emerchant')->__('Authorize and Capture')
            ),
        );
    }
}