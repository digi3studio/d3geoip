<?php defined('SYSPATH') OR die('No direct access allowed.');

class d3GeoIP {
    public $instance;
	function __construct($vendor='maxmind'){
        if (!class_exists('GeoIP', FALSE)){
        	require_once Kohana::find_file('vendor', $vendor.'/API/geoip', 'inc');
        }
		$this->instance = geoip_open(MODPATH.'d3geoip/vendor/'.$vendor.'/GeoIP-data/GeoIP.dat', GEOIP_STANDARD);
	}
}
