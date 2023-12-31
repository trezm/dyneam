<?php
/**
 * bluehost-wordpress-plugin
 * Build: a1bfe4c11f8459d27b85
 */

/**
 * ENTRY: app
 */
 wp_register_script(
     'bwp-manifest-app',
     trailingslashit( BLUEHOST_PLUGIN_URL ) . 'build/' . 'manifest~app-643fedbb386a1e5e4a51.js',
     apply_filters( 'bwp_manifest_app_js_deps', array('lodash', 'react', 'wp-a11y', 'wp-api-fetch', 'wp-components', 'wp-compose', 'wp-data', 'wp-dom-ready', 'wp-element', 'wp-i18n', 'wp-keycodes', 'wp-polyfill', 'wp-url', ) ),
     false,
     true
 );
 $bwpManifestAppData = apply_filters( 'bwp_manifest_app_data', array() );
 if ( ! empty( $bwpManifestAppData ) ) {
    \wp_localize_script(
        'bwp-manifest-app',
        'bwpManifestApp',
        $bwpManifestAppData
    );
 }
 wp_register_script(
     'bwp-638-60-b-4554-bdb-11-a-02-a-5460-jsapp',
     trailingslashit( BLUEHOST_PLUGIN_URL ) . 'build/' . '638-60b4554bdb11a02a5460.js',
     apply_filters( 'bwp_638_60_b_4554_bdb_11_a_02_a_5460_jsapp_js_deps', array('bwp-manifest-app', ) ),
     false,
     true
 );
 $bwp63860B4554Bdb11A02A5460JsappData = apply_filters( 'bwp_638_60_b_4554_bdb_11_a_02_a_5460_jsapp_data', array() );
 if ( ! empty( $bwp63860B4554Bdb11A02A5460JsappData ) ) {
    \wp_localize_script(
        'bwp-638-60-b-4554-bdb-11-a-02-a-5460-jsapp',
        'bwp63860B4554Bdb11A02A5460Jsapp',
        $bwp63860B4554Bdb11A02A5460JsappData
    );
 }
 wp_register_script(
     'bwp-app',
     trailingslashit( BLUEHOST_PLUGIN_URL ) . 'build/' . 'app-fa7201004c8c9e2bd728.js',
     apply_filters( 'bwp_app_js_deps', array('bwp-638-60-b-4554-bdb-11-a-02-a-5460-jsapp', ) ),
     false,
     true
 );
 $bwpAppData = apply_filters( 'bwp_app_data', array() );
 if ( ! empty( $bwpAppData ) ) {
    \wp_localize_script(
        'bwp-app',
        'bwpApp',
        $bwpAppData
    );
 }
wp_register_style(
    'bwp-app',
     trailingslashit( BLUEHOST_PLUGIN_URL ) . 'build/' . 'app-fa7201004c8c9e2bd728.css',
    apply_filters( 'bwp_app_css_deps', array() ),
    false
);

/**
 * ENTRY: dashboard
 */
 wp_register_script(
     'bwp-manifest-dashboard',
     trailingslashit( BLUEHOST_PLUGIN_URL ) . 'build/' . 'manifest~dashboard-ffaf4e0cfc541932808b.js',
     apply_filters( 'bwp_manifest_dashboard_js_deps', array('react', 'wp-api-fetch', 'wp-dom-ready', 'wp-element', 'wp-i18n', 'wp-polyfill', 'wp-url', ) ),
     false,
     true
 );
 $bwpManifestDashboardData = apply_filters( 'bwp_manifest_dashboard_data', array() );
 if ( ! empty( $bwpManifestDashboardData ) ) {
    \wp_localize_script(
        'bwp-manifest-dashboard',
        'bwpManifestDashboard',
        $bwpManifestDashboardData
    );
 }
 wp_register_script(
     'bwp-dashboard',
     trailingslashit( BLUEHOST_PLUGIN_URL ) . 'build/' . 'dashboard-62f78a9debd4f7f1231d.js',
     apply_filters( 'bwp_dashboard_js_deps', array('bwp-manifest-dashboard', ) ),
     false,
     true
 );
 $bwpDashboardData = apply_filters( 'bwp_dashboard_data', array() );
 if ( ! empty( $bwpDashboardData ) ) {
    \wp_localize_script(
        'bwp-dashboard',
        'bwpDashboard',
        $bwpDashboardData
    );
 }
wp_register_style(
    'bwp-dashboard',
     trailingslashit( BLUEHOST_PLUGIN_URL ) . 'build/' . 'dashboard-62f78a9debd4f7f1231d.css',
    apply_filters( 'bwp_dashboard_css_deps', array() ),
    false
);

/**
 * ENTRY: editortours
 */
 wp_register_script(
     'bwp-manifest-editortours',
     trailingslashit( BLUEHOST_PLUGIN_URL ) . 'build/' . 'manifest~editortours-70185791f6c7ae2283a8.js',
     apply_filters( 'bwp_manifest_editortours_js_deps', array('lodash', 'react', 'wp-api-fetch', 'wp-components', 'wp-data', 'wp-dom-ready', 'wp-edit-post', 'wp-element', 'wp-i18n', 'wp-plugins', 'wp-polyfill', 'wp-url', ) ),
     false,
     true
 );
 $bwpManifestEditortoursData = apply_filters( 'bwp_manifest_editortours_data', array() );
 if ( ! empty( $bwpManifestEditortoursData ) ) {
    \wp_localize_script(
        'bwp-manifest-editortours',
        'bwpManifestEditortours',
        $bwpManifestEditortoursData
    );
 }
 wp_register_script(
     'bwp-editortours',
     trailingslashit( BLUEHOST_PLUGIN_URL ) . 'build/' . 'editortours-d0a185c1ddfa20da3345.js',
     apply_filters( 'bwp_editortours_js_deps', array('bwp-manifest-editortours', ) ),
     false,
     true
 );
 $bwpEditortoursData = apply_filters( 'bwp_editortours_data', array() );
 if ( ! empty( $bwpEditortoursData ) ) {
    \wp_localize_script(
        'bwp-editortours',
        'bwpEditortours',
        $bwpEditortoursData
    );
 }
wp_register_style(
    'bwp-editortours',
     trailingslashit( BLUEHOST_PLUGIN_URL ) . 'build/' . 'editortours-d0a185c1ddfa20da3345.css',
    apply_filters( 'bwp_editortours_css_deps', array() ),
    false
);

// auto-generated by wp-dependency-webpack-plugin
