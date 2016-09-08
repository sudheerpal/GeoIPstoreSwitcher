<?php
class SudheerPal_GeoIPstoreSwitcher_Model_Observer
{

			public function switchStore(Varien_Event_Observer $observer)
			{
				


         $cookie = Mage::getSingleton('core/cookie');
        if ($cookie->get('geoip_processed') != 1) {


            $geoIPCountry = Mage::getSingleton('geoip/country');
            $countryCode = $geoIPCountry->getCountry();
            if ($countryCode) {
                $storeName = Mage::helper('SudheerPal_GeoIPstoreSwitcher')->getStoreByCountry($countryCode);
                if ($storeName) {
                    $store = Mage::getModel('core/store')->load($storeName, 'name');
                    if ($store->getName() != Mage::app()->getStore()->getName()) {
                        $event->getControllerAction()->getResponse()->setRedirect($store->getCurrentUrl(false));
                    }
                }
            }
            $cookie->set('geoip_processed', '1', time() + 86400, '/');




        } // geoIP processed loop close
        






			}
		
}
