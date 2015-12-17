<?php
/*
Plugin Name: Comment Approved
Plugin URI: https://nielsvr.com
Description: Notify a user when their comment is approved


Version: 1.4.3
Requires at least: 3.0

Author: Niels van Renselaar
Author URI: https://nielsvr.com

Text Domain: comment-approved
*/



/*
 * Security check
 * Prevent direct access to the file.
 *
 * @since 1.5
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/*
 * Comment Approved
 * The main plugin.
 *
 * @since 1.0
 */
include dirname( __FILE__ ) . '/classes/main.php';

CommentApproved::instance();
