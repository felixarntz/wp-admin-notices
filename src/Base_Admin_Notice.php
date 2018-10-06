<?php
/**
 * Class Felix_Arntz\WP_Admin_Notices\Base_Admin_Notice
 *
 * @package Felix_Arntz\WP_Admin_Notices
 * @license GNU General Public License, version 2
 * @link    https://github.com/felixarntz/wp-admin-notices
 */

namespace Felix_Arntz\WP_Admin_Notices;

/**
 * Class for a basic WordPress admin notice.
 *
 * @since 1.0.0
 */
class Base_Admin_Notice implements Admin_Notice {
	use Admin_Notice_Trait;

	/**
	 * Constructor.
	 *
	 * Sets the admin notice message, type and whether it is dismissible.
	 *
	 * @since 1.0.0
	 *
	 * @param string $message Admin notice message. May contain basic HTML.
	 * @param string $type    Admin notice type. Must be one of the available admin notice types.
	 */
	public function __construct( string $message, string $type = Admin_Notice_Types::ERROR ) {
		$this->set_message( $message );
		$this->set_type( $type );
	}
}
