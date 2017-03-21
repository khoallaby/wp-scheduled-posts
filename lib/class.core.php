<?php
#date_default_timezone_set('America/Denver');
if( !class_exists('base_plugin') )
    require_once dirname(__FILE__) . '/class.base.php';
class sp_core extends base_plugin {
	public $object_types = array('post', 'page');

    protected function __construct() {
        parent::__construct();
    }

    public function init() {

	    // acf
	    #require_once( dirname( __FILE__ ) . '/acf.php' );
	    require_once( dirname( __FILE__ ) . '/acf-fields.php' );
	    define( 'ACF_LITE', true );

        #add_action( 'wp_enqueue_scripts', array( $this, 'add_css_js' ), 10 );
        #add_action( 'admin_enqueue_scripts', array( $this, 'add_css_js' ), 10 );\

	    // alters query
	    add_action( 'pre_get_posts', array($this, 'alter_query') );

    }


	function alter_query( $query ) {
		$meta_query = array(
			'relation' => 'AND',
			/*
			array(
				'key' => 'schedule_date_' . strtolower(date('l')),
				'compare' => '=',
				'value' => 'on'
			),
			*/
			array(
				'key' => 'schedule_date',
				'compare' => 'LIKE',
				'value' => date('l')
			),
			array(
				'key' => 'schedule_time_start',
				'compare' => '<=',
				'value' => date('H:i:s'),
				'type' => 'TIME'
			),
			array(
				'key' => 'schedule_time_end',
				'compare' => '>=',
				'value' => date('H:i:s'),
				'type' => 'TIME'
			)
		);
		#$meta_query = new WP_Meta_Query( $meta_query_args );
		if ( $query->is_home() && $query->is_main_query() ) {
			#$query->set( 'posts_per_page', 2 );
			$query->set( 'meta_query', $meta_query );
		}
	}

    /**
     * Theme activation
     */
    public function theme_activate() {


    }

}

