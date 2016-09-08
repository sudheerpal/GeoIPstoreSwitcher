<?php
class SudheerPal_GeoIPstoreSwitcher_Helper_Data extends Mage_Core_Helper_Abstract
{


     const DEFAULT_STORE = 'English';  // Setting default store as English.
 
    // Below we have aasigned different countries (country code) to the different available stores.


    protected $_countryToStore = array(
        'FR' => 'French',
        'BE' => 'French',
        'CH' => 'French',
        'DE' => 'German',
        'AT' => 'German',
        'UK' => 'English',
        'US' => 'English',
        'UA' => 'English',
        'CN' => 'English',
        'JP' => 'English'
    );
 
    /**
     * get store view name by country
     * @param $country
     * @return bool
     */
    public function getStoreByCountry($country)
    {
        if (isset($this->_countryToStore[$country])) {
            return $this->_countryToStore[$country];
        }
        return self::DEFAULT_STORE;
    }



}
	 