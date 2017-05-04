<?php
/**
 * Handles plugin configuration
 */
if ( ! class_exists( 'UCF_Resource_Search_Config' ) ) {
	class UCF_Resource_Search_Config {
		public static function add_options_page() {
			add_options_page(
				'UCF Resource Search',
				'UCF Resource Search',
				'manage_options',
				'ucf_resource_search_settings',
				array(
					'UCF_Resource_Search_Config',
					'add_settings_page'
				)
			);
			add_action( 'admin_init', array( 'UCF_Resource_Search_Config', 'register_settings' ) );
		}
		public static function register_settings() {
			register_setting( 'ucf-resource-search-group', 'ucf_resource_search_include_css' );
		}
		public static function add_settings_page() {
			$ucf_resource_search_include_css = get_option( 'ucf_resource_search_include_css', 'on' );
	?>
			<div class="wrap">
			<h1>UCF Resource Search Settings</h1>
			<form method="post" action="options.php">
				<?php settings_fields( 'ucf-resource-search-group' ); ?>
				<?php do_settings_sections( 'ucf-resource-search-groups' ); ?>
				<table class="form-table">
					<tr>
						<th scope="row">Include CSS</th>
						<td><input type="checkbox" name="ucf_resource_search_include_css" <?php echo ( $ucf_resource_search_include_css === 'on' ) ? 'checked' : ''; ?>>
							Include Default CSS (Leave unchecked if the Athena Framework is included in the theme.)
						</input></td>
					</tr>
				<?php submit_button(); ?>
			</form>
	<?php
		}
	}
}
?>