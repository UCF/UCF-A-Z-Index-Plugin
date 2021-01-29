# UCF Resource Search Plugin #

Provides a custom post type, shortcode, functions, and default styles for displaying a resource search input and list of resources.


## Description ##

The resource search and links are added to pages using a ucf-resource-search shortcode.

The ucf-resource-search shortcode has several options:

Classic Layout
* column_width - col-md-4 col-sm-4
* column_count - 3
* default_sorting - term
* layout - classic or card
* meta_key
* meta_value
* non_alpha_section_name - Other
* order_by - title
* order - ASC, DESC
* post_type_name - post, page, etc
* show_empty_sections - true|false
* show_sorting - true|false
* show_sorting - true|false
* show_uncategorized - true|false
* uncategorized_term_name - Uncategorized
* taxonomy - category

Card Layout
* layout - classic or card
* order_by - title
* order - ASC, DESC
* post_type_name - post, page, etc
* resource_link_type_filter - filter results by resource_link_type
* taxonomy - category

## Installation ##

### Manual Installation ###
1. Upload the plugin files (unzipped) to the `/wp-content/plugins` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the "Plugins" screen in WordPress
3. Configure plugin settings from the WordPress admin under "Settings > UCF Resource Search".

### WP CLI Installation ###
1. `$ wp plugin install --activate https://github.com/UCF/UCF-Resource-Search-Plugin/archive/master.zip`.  See [WP-CLI Docs](http://wp-cli.org/commands/plugin/install/) for more command options.
2. Configure plugin settings from the WordPress admin under "Settings > UCF Resource Search".

## Dependencies ##

* Athena-Framework or Bootstrap 4 (if using the card layout)
* FontAwesome (if using the card layout)

## Changelog ##

### 1.0.6 ###
* Added late JS enqueuing
* Added plugin version cache-busting to enqueued assets
* Updated constants for consistency with other plugins
* Prepended plugin dir to `require`d files in main plugin file
* Added Github issue/PR templates and contributing doc; updated gitignore
* Upgraded packages + re-ran gulp

### 1.0.5 ###
* Added setting to exclude the social media fields from the admin.

### 1.0.4 ###
* Added card layout option for ucf-resource-search shortcode
* Added fields for social links

### 1.0.3 ###
* Updated plugin description

### 1.0.2 ###
* Fixed PHP notices
* Removed Athena classes
* Fixed search

### 1.0.0 ###
* Initial release


## Upgrade Notice ##

n/a


## Installation Requirements ##

None


## Development & Contributing ##

NOTE: this plugin's readme.md file is automatically generated.  Please only make modifications to the readme.txt file, and make sure the `gulp readme` command has been run before committing readme changes.
