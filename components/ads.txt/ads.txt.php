<?php
/**
 * Component Name: Ads.txt Manager
 * Component URI: https://puleeno.com
 * Version: 1.0.1
 */

define( 'MANADAS_ADS_TXT_FILE', __FILE__ );

if ( ! class_exists( 'Manadas_Ads_Txt' ) ) {
	require_once dirname( MANADAS_ADS_TXT_FILE ) . '/classes/class-manadas-ads-txt.php';
}

if ( ! function_exists( 'managads_ads_txt' ) ) {
	function managads_ads_txt() {
		return Manadas_Ads_Txt::instance();
	}
}

$GLOBALS['ads.txt'] = managads_ads_txt();
