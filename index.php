<?php
/* Plugin Name: WP Reset Comment Form
Description: This will reset comment formfields after submit. Purpose of this plugin is it'll prevent comment data to store in COOKIES. Easy to use.
Version: 1.0
Author: M.Saju
Author URI: http://saju79shyni.wordpress.com/
Plugin URI: http://saju79shyni.wordpress.com/plugins
*/
function cms_rest_cookies(){
	unset($_COOKIE['comment_author_' . COOKIEHASH]);
	unset($_COOKIE['comment_author_email_' . COOKIEHASH]);
	unset($_COOKIE['comment_author_url_' . COOKIEHASH]);
	//unset($_COOKIE[]);
	// empty value and expiration one hour before
	setcookie('comment_author_' . COOKIEHASH, '', time() - 3600);
	setcookie('comment_author_email_' . COOKIEHASH, '', time() - 3600);
	setcookie('comment_author_url_' . COOKIEHASH, '', time() - 3600);
}
add_action('init', 'cms_rest_cookies');