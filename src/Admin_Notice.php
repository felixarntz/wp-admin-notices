<?php
/**
 * Interface Felix_Arntz\WP_Admin_Notices\Admin_Notice
 *
 * @package Felix_Arntz\WP_Admin_Notices
 * @license GNU General Public License, version 2
 * @link    https://github.com/felixarntz/wp-admin-notices
 */

namespace Felix_Arntz\WP_Admin_Notices;

use FelixArntz\Contracts\Registerable;
use FelixArntz\Contracts\Renderable;

/**
 * Interface for a WordPress admin notice.
 *
 * @since 1.0.0
 */
interface Admin_Notice extends Registerable, Renderable {

}
