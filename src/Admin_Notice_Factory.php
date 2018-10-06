<?php
/**
 * Class Felix_Arntz\WP_Admin_Notices\Admin_Notice_Factory
 *
 * @package Felix_Arntz\WP_Admin_Notices
 * @license GNU General Public License, version 2
 * @link    https://github.com/felixarntz/wp-admin-notices
 */

namespace Felix_Arntz\WP_Admin_Notices;

/**
 * Factory class for instantiating admin notices.
 *
 * @since 1.0.0
 */
class Admin_Notice_Factory {

	/**
	 * Creates a new admin notice.
	 *
	 * @since 1.0.0
	 *
	 * @param string $message     Admin notice message. May contain basic HTML.
	 * @param string $type        Admin notice type. Must be one of the available admin notice types.
	 * @param bool   $dismissible Whether the admin notice is dismissible.
	 * @return Admin_Notice The new admin notice instance.
	 */
	public function create_notice( string $message, string $type = Admin_Notice_Types::ERROR, bool $dismissible = false ) : Admin_Notice {
		if ( $dismissible ) {
			return new Dismissible_Admin_Notice( $message, $type );
		}

		return new Base_Admin_Notice( $message, $type );
	}
}
