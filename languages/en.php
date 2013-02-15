<?php
	/**
	 * Elgg Twitter Widgets Pack plugin
	 *
	 * @package Elgg Twitter Widgets Pack
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author RiverVanRain
	 * @URL http://weborganizm.org/crewz/p/1983/personal-net
	 * @copyright (c) weborganiZm 2k13
	 */

$english = array(

	'twitterz:title' => 'Twitter Widgets',
	'twitterz:info' => 'Twitter Widgets Pack',

	'twitter:title' => 'Tweets',
	
	'twitterz:username' => 'Your Twitter username',
	'twitter:widget_id' => 'Your Twitter Widget ID',
		
	'twitter:invalid' => 'This widget is configured with an invalid Twitter username or Widget ID. Click the customize icon to correct it.',
	'widgets:twitter:no_content' => 'This widget is not yet set.<br><a href="https://twitter.com/settings/widgets">Create your own widget</a> from your widgets settings page on twitter.com, then click on - <b>Edit</b> - and paste Twitter username and Widget ID*<br><br>*Note: see your widget\'s code: in data-widget-id=<b>"HERE-YOUR-WIDGET-ID_COPY-AND-PASTE-IT"</b>',
	
	'twitterz_wid:title' => 'Customize "Latest Tweets" Widget',
	
	'twitterz_favorites:title' => 'Customize "Favorite Tweets" Widget',
	'twitter_favorites:title' => 'Favorite Tweets',
	
	'twitterz_list:title' => 'Customize "Tweets from a List" Widget',
	'twitter_list:title' => 'Twitter List',
	'twitter:list' => 'Your Twitter list',
	'twitter_list:invalid' => 'This widget is configured with an invalid Twitter list. Click the customize icon to correct it.',
	
	'twitterz_search:title' => 'Customize "Search from Twitter" Widget',
	'twitter_search:title' => 'Twitter Search',
	'twitter:search_query' => "Search query",
);

add_translation("en", $english);
