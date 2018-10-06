<?php
/**
 * Class Felix_Arntz\WP_Admin_Notices\Admin_Notice_Types
 *
 * @package Felix_Arntz\WP_Admin_Notices
 * @license GNU General Public License, version 2
 * @link    https://github.com/felixarntz/wp-admin-notices
 */

namespace Felix_Arntz\WP_Plugin_Contracts;

use FelixArntz\Contracts\Enum;
use FelixArntz\Contracts\EnumTrait;

/**
 * Enum class for admin notice types.
 *
 * @since 1.0.0
 */
class Admin_Notice_Types {
	use EnumTrait;

	const SUCCESS = 'success';
	const INFO    = 'info';
	const WARNING = 'warning';
	const ERROR   = 'error';
}
