<?php
/**
 * Class Felix_Arntz\WP_Admin_Notices\Dismissible_Admin_Notice
 *
 * @package Felix_Arntz\WP_Admin_Notices
 * @license GNU General Public License, version 2
 * @link    https://github.com/felixarntz/wp-admin-notices
 */

namespace Felix_Arntz\WP_Admin_Notices;

/**
 * Class for a WordPress admin notice that is dismissible.
 *
 * @since 1.0.0
 */
class Dismissible_Admin_Notice extends Base_Admin_Notice {

	/**
	 * Gets the CSS classes for the admin notice.
	 *
	 * @since 1.0.0
	 *
	 * @return array List of CSS classes.
	 */
	protected function get_classes() : array {
		$classes   = parent::get_classes();
		$classes[] = 'is-dismissible';

		return $classes;
	}
}
