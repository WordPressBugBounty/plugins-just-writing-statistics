<?php

/**
 * Provide a settings view for the plugin
 *
 * This file is used to markup the settings view of the plugin.
 *
 * @link  https://toolstack.com/just-writing-statistics
 * @since 3.2.0
 *
 * @package    Just_Writing_Statistics
 * @subpackage Just_Writing_Statistics/admin/partials
 */
?>
	<div class="half jws-settings-container">
	    <form method="post" action="options.php">
	        <?php settings_fields("jws-section-stopwords-options"); ?>
	        <?php do_settings_sections("jws-stopwords-options"); ?>

	        <?php submit_button(__('Save Changes', 'just-writing-statistics'), 'primary'); ?>
	    </form>
	</div>
