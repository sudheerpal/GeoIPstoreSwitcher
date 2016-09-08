# GeoIPstoreSwitcher
This module will help you in getting auto store-switch for your customer coming from a particular country. 



Use Helper (Data.php) to map stores to the countries. A example is given below which i have used in module.

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
        'IN' => 'English'
    );


Use this URL to find the standard country code  http://dev.maxmind.com/geoip/legacy/codes/iso3166/


This module requires a maxmind IP service which can be used by installing this module https://github.com/magento-hackathon/Sandfox_GeoIP

This MaxMind module returns the Standard Country Code, on the basis of which we switch stores in magento store. 
