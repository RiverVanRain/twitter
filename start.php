<?php
/**
 * Elgg twitter widget
 * This plugin allows users to pull in their twitter feed to display on their profile
 *
 * @package ElggTwitter
 */

function twitter_init() {
	elgg_register_widget_type('twitter', elgg_echo('twitter:title'), elgg_echo('twitter:info'), "dashboard,profile,index,groups", true);
	elgg_register_widget_type('twitter_favorites', elgg_echo('twitter_favorites:title'), elgg_echo('twitter_favorites:info'), "dashboard,profile,index,groups", true);
	elgg_register_widget_type('twitter_list', elgg_echo('twitter_list:title'), elgg_echo('twitter_list:info'), "dashboard,profile,index,groups", true);
	elgg_register_widget_type('twitter_search_query', elgg_echo('twitter_search:title'), elgg_echo('twitter_search:info'), "dashboard,profile,index,groups", true);
	elgg_register_js('elgg.twitter','mod/twitter/js/widgets.js', 'footer');
}

elgg_register_event_handler('init', 'system', 'twitter_init');