<?php
/**
 * Shop System Plugins
 * - Terms of use can be found under
 * https://guides.qenta.com/shop_plugins:info
 * - License can be found under:
 * https://github.com/qenta-cee/gambio-qcp/blob/master/LICENSE
*/
require_once(dirname(__FILE__).'/qcp.php');

class qcp_tatrapay extends qcp_core {
    var $payment_type = 'TATRAPAY';
    var $logoFilename = 'tatrapay.png';
    var $defaultPaymethodOrder = 5;

    /// @brief initialize qenta_checkout_page module
    function qcp_tatrapay() {
        parent::init();
    }
}