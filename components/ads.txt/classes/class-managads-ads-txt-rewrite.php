<?php

class Managads_Ads_Txt_Rewrite {
	public function __construct() {
		add_action( 'query_vars', array( $this, 'register_rewrite_tag' ) );
		add_action( 'init', array( $this, 'rewrite_rule' ) );
		add_filter( 'template_include', array( $this, 'load_content' ), 99 );
	}

	public function register_rewrite_tag( $query_vars ) {
		if ( ! in_array( 'action', $query_vars ) ) {
			$query_vars[] = 'action';
		}

		return $query_vars;
	}

	public function rewrite_rule() {
		add_rewrite_rule( '^ads\.txt/?$', 'index.php?action=ads_txt', 'top' );
	}

	public function load_content( $template ) {
		global $wp_query;
		if ( isset( $wp_query->query_vars['action'] ) && 'ads_txt' == $wp_query->query_vars['action'] ) {
			header( 'Content-Type: text/plain' );
			return sprintf(
				'%s/views/content.php',
				ADS_TXT_ROOT
			);
		}

		return $template;
	}
}

new Managads_Ads_Txt_Rewrite();
