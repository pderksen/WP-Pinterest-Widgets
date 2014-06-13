<?php

/**
 * Sidebar portion of the administration dashboard view (and subpages).
 *
 * @package    PW
 * @subpackage admin/views
 * @author     Phil Derksen <pderksen@gmail.com>, Nick Young <mycorpweb@gmail.com>
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<?php if ( ! pw_is_pib_pro_active() ): // If "Pin It" Button Pro is already active don't show. ?>

<div class="sidebar-container">
	<h3 class="sidebar-title-medium"><?php _e( 'Need an awesome "Pin It" button?', 'pw' ); ?></h3>

	<div class="sidebar-content">
		<p>
			<?php _e( 'Check out the features in "Pin It" Pro...', 'pw' ); ?>
		</p>

		<ul>
			<li><div class="dashicons dashicons-yes"></div> <?php _e( 'Add "Pin It" buttons on image hover', 'pw' ); ?></li>
			<li><div class="dashicons dashicons-yes"></div> <?php _e( 'Add "Pin It" buttons under images', 'pw' ); ?></li>
			<li><div class="dashicons dashicons-yes"></div> <?php _e( '30 custom "Pin It" button designs', 'pw' ); ?></li>
			<li><div class="dashicons dashicons-yes"></div> <?php _e( 'Upload your own button designs', 'pw' ); ?></li>
			<li><div class="dashicons dashicons-yes"></div> <?php _e( 'Twitter, Facebook & G+ buttons', 'pw' ); ?></li>
			<li><div class="dashicons dashicons-yes"></div> <?php _e( 'Use with featured images', 'pw' ); ?></li>
			<li><div class="dashicons dashicons-yes"></div> <?php _e( 'Use with custom post types', 'pw' ); ?></li>
			<li><div class="dashicons dashicons-yes"></div> <?php _e( 'Customer support & auto updates', 'pw' ); ?></li>
		</ul>

		<p class="last-blurb">
			<?php _e( 'Get all of these and more with Pinterest "Pin It" Button Pro!', 'pw' ); ?>
		</p>

		<a href="<?php echo PINPLUGIN_BASE_URL; ?>pin-it-button-pro/?utm_source=pinterest_widgets&utm_medium=sidebar_link&utm_campaign=pro_upgrade"
					class="button-primary" target="_blank">
			<?php _e( 'Get "Pin It" Pro Now', 'pw' ); ?></a>
	</div>
</div>

<?php endif; // End "Pin It" Button Pro check. ?>

<div class="sidebar-container">
	<div class="sidebar-content">
		<p>
			<?php _e( 'Help us get noticed (and boost our egos) with a rating and short review.', 'pw' ); ?>
		</p>

		<a href="http://wordpress.org/support/view/plugin-reviews/pinterest-widgets" class="button-primary" target="_blank">
			<?php _e( 'Rate this plugin on WordPress.org', 'pw' ); ?></a>
	</div>
</div>

<div class="sidebar-container">
	<div class="sidebar-content">
		<ul>
			<li>
				<div class="dashicons dashicons-arrow-right-alt2"></div>
				<a href="http://wordpress.org/support/plugin/pinterest-widgets" target="_blank">
					<?php _e( 'Community Support Forums', 'pw' ); ?></a>
			</li>
		</ul>
	</div>
</div>

<div class="sidebar-container">
	<h4 class="sidebar-title-small"><?php _e( 'Recent News from PinterestPlugin.com', 'pw' ); ?></h4>

	<div class="sidebar-content pw-rss-news">
		<?php pw_rss_news(); ?>
	</div>
</div>
