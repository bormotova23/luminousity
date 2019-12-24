/**
 * Process location
 *
 * @return void
 */
function cb_child_process_location( $location = null ) {

	if ( ! function_exists( 'jet_theme_core' ) ) {
		return false;
	}
	if( ! defined( 'ELEMENTOR_VERSION' ) ) {
		return false;
	}

	$done = jet_theme_core()->locations->do_location( $location );

	return $done;

}
