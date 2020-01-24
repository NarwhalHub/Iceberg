<?php
class Manadas_Ads_Txt {
	protected static $instance;

	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function __construct() {
		$this->define_constants();
		$this->includes();
	}

	private function define( $name, $value ) {
		if ( defined( $name ) ) {
			return;
		}
		define( $name, $value );
	}

	public function define_constants() {
		$this->define( 'ADS_TXT_ROOT', dirname( MANADAS_ADS_TXT_FILE ) );
	}

	public function includes() {
		require_once ADS_TXT_ROOT . '/classes/class-managads-ads-txt-rewrite.php';
	}
}
