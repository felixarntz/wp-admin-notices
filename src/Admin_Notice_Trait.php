<?php
/**
 * Trait Felix_Arntz\WP_Admin_Notices\Admin_Notice_Trait
 *
 * @package Felix_Arntz\WP_Admin_Notices
 * @license GNU General Public License, version 2
 * @link    https://github.com/felixarntz/wp-admin-notices
 */

namespace Felix_Arntz\WP_Admin_Notices;

use FelixArntz\Contracts\Registerable;
use FelixArntz\Contracts\Renderable;
use InvalidArgumentException;

/**
 * Trait for a WordPress admin notice.
 *
 * @since 1.0.0
 */
trait Admin_Notice_Trait {

	/**
	 * Message to display in the admin notice. May contain basic HTML.
	 *
	 * @since 1.0.0
	 * @var string
	 */
	protected $message;

	/**
	 * Type of the admin notice.
	 *
	 * @since 1.0.0
	 * @var string
	 */
	protected $type = Admin_Notice_Types::ERROR;

	/**
	 * Register the admin notice.
	 *
	 * @since 1.0.0
	 *
	 * @throws RegistrationException Thrown if registration fails.
	 */
	public function register() {
		$action = 'admin_notices';
		if ( is_network_admin() ) {
			$action = 'network_admin_notices';
		}

		add_action( $action, [ $this, 'render' ], 10, 0 );
	}

	/**
	 * Renders the admin notice.
	 *
	 * @since 1.0.0
	 */
	public function render() {
		$message = $this->get_prepared_message();
		$classes = $this->get_classes();

		?>
		<div class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
			<?php echo wp_kses_post( $message ); ?>
		</div>
		<?php
	}

	/**
	 * Gets the message, prepared for display in the admin notice.
	 *
	 * @since 1.0.0
	 *
	 * @return string Prepared message.
	 */
	protected function get_prepared_message() : string {
		return wpautop( $this->message );
	}

	/**
	 * Gets the CSS classes for the admin notice.
	 *
	 * @since 1.0.0
	 *
	 * @return array List of CSS classes.
	 */
	protected function get_classes() : array {
		return [ 'notice', 'notice-' . $this->type ];
	}

	/**
	 * Sets the message to display in the admin notice.
	 *
	 * @since 1.0.0
	 *
	 * @param string $message Admin notice message. May contain basic HTML.
	 */
	protected function set_message( string $message ) {
		$this->message = $message;
	}

	/**
	 * Sets the type of the admin notice.
	 *
	 * @since 1.0.0
	 *
	 * @param string $type Admin notice type. Must be one of the available admin notice types.
	 *
	 * @throws InvalidArgumentException Thrown when the type is invalid.
	 */
	protected function set_type( string $type ) {
		if ( ! in_array( $type, Admin_Notice_Types::getConstList(), true ) ) {
			throw new InvalidArgumentException( sprintf( 'Invalid admin notice type %s.', $type ) );
		}

		$this->type = $type;
	}
}
