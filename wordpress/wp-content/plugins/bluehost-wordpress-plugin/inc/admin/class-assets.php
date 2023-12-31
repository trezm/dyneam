<?php

use Bluehost\BuildAssets;
use Bluehost\Staging;
use NewfoldLabs\WP\Module\CustomerBluehost\CustomerBluehost;

/**
 * Bluehost_Admin_App_Assets class
 */
class Bluehost_Admin_App_Assets {

	/**
	 * Page name.
	 *
	 * @var string
	 */
	protected $page_hook = 'bluehost';

	/**
	 * Current hook.
	 *
	 * @var string
	 */
	protected $current_admin_hook;

	/**
	 * Class instance.
	 *
	 * @var stdClass
	 */
	protected static $instance;

	/**
	 * Get class instance.
	 *
	 * @return Bluehost_Admin_App_Assets|stdClass
	 */
	public static function return_instance() {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Bluehost_Admin_App_Assets ) ) {
			self::$instance = new Bluehost_Admin_App_Assets();
			self::$instance->primary_init();
		}

		return self::$instance;
	}

	/**
	 * Initialize class.
	 */
	protected function primary_init() {
		add_action( 'admin_enqueue_scripts', array( $this, 'register_assets' ), 20 );
	}

	/**
	 * Register assets.
	 *
	 * @param string $hook Hook name.
	 */
	public function register_assets( $hook ) {

		if ( false !== stripos( $hook, $this->page_hook ) ) {
			$this->prepareData();
			BuildAssets::enqueue( 'app' );
		}

		$this->prepareAdminData();

	}

	/**
	 * Register wp-admin inline scripts
	 * for ctb script which loads on all admin
	 */
	protected function prepareAdminData() {
		// register placeholder script handle with no source
		wp_register_script( 'newfold-plugin', null, null, BLUEHOST_PLUGIN_VERSION, true );
		wp_enqueue_script( 'newfold-plugin' );

		// add inline scripts to the handle with global js values
		\wp_add_inline_script( 'newfold-plugin', 'window.bluehostWpAdminUrl="' . \admin_url() . '";', 'before' );
		\wp_add_inline_script( 'newfold-plugin', 'window.nfBrandPlatform="' . \get_option( 'mm_brand' ) . '";', 'before' );
		\wp_add_inline_script( 'newfold-plugin', 'window.nfdRestRoot="' . \get_home_url() . '/index.php?rest_route=";', 'before' );

		// place values in nfdplugin object
		\wp_localize_script(
			'newfold-plugin',
			'nfdplugin',
			array(
				'restApiUrl'   => \esc_url_raw( \get_home_url() . '/index.php?rest_route=' ),
				'restApiNonce' => \wp_create_nonce( 'wp_rest' ),
			)
		);
	}

	/**
	 * Register Page JS - only applies to bluehost pages
	 */
	protected function prepareData() {
		global $bh_module_container;
		$customerData = CustomerBluehost::collect();

		$data = array(
			'app'          => array(
				'adminUrl'             => \admin_url(),
				'activePage'           => '',
				'isTopLevel'           => 0,
				'pages'                => Bluehost_Admin_App_Page::get_top_level_pages(),
				'noticesPathsDenyList' => Bluehost_Admin_App_Page::$noticesPathsDenyList, // phpcs:ignore WordPress.NamingConventions.ValidVariableName.UsedPropertyNotSnakeCase
				'customizeSiteUrl'     => Bluehost_Admin_App_Utils::get_customize_site_url(),
				'accountId'            => mojo_site_bin2hex(),
				'nonce'                => \wp_create_nonce( mojo_site_bin2hex() ),
				'customer'             => $customerData,
			),
			'env'          => array(
				'isPHP7'     => version_compare( phpversion(), '7.0.0' ) >= 0,
				'phpVersion' => phpversion(),
				'isStaging'  => Staging::getInstance()->isStaging(),
				'isJarvis'   => $bh_module_container->get( 'isJarvis' ),
			),
			'wordpress'    => array(
				'isFSE'                          => Bluehost_Admin_App_Utils::is_fse(),
				'hasReusableBlocks'              => \wp_count_posts( 'wp_block' )->publish >= 1,
				'isJetpackActive'                => class_exists( 'Jetpack' ) ? 1 : 0,
				'isWooActive'                    => class_exists( 'woocommerce' ) ? 1 : 0,
				'jetpackActiveModules'           => \get_option( 'jetpack_active_modules', 0 ),
				'bluehostPluginDaysSinceInstall' => bh_get_days_since_plugin_install_date(),
			),
			'movedToStore' => false,
		);

		// Grab the latest settings using an interal REST API request
		$request  = new WP_REST_Request( 'GET', '/bluehost/v1/settings' );
		$response = rest_do_request( $request );
		$server   = rest_get_server();

		$data['settings'] = $server->response_to_data( $response, false );

		BuildAssets::inlineWebpackPublicPath( 'bwp-manifest-app' );
		\wp_localize_script( 'bwp-manifest-app', 'bluehost', apply_filters( 'bluehost_admin_page_data', $data ) );
	}
}
