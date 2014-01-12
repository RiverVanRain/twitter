<?php
	/**
	 * Elgg Twitter Widgets Pack plugin
	 *
	 * @package Elgg Twitter Widgets Pack
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author RiverVanRain
	 * @URL http://weborganizm.org/crewz/p/1983/personal-net
	 * @copyright (c) RiverVanRain 2014
	 */

function twitter_init() {
	elgg_register_widget_type('twitterz', elgg_echo('twitterz:title'), elgg_echo('twitterz:info'), "dashboard,profile,index,groups", false);
	elgg_register_js('elgg.twitter','mod/twitterz/js/widgets.js', 'footer');
	elgg_register_js('elgg.organictabs','mod/twitterz/js/organictabs.jquery.js', 'footer');
	elgg_extend_view("css/elgg", "widgets/twitterz/css");
}

elgg_register_event_handler('init', 'system', 'twitter_init');