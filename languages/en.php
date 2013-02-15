<?php
/**
 * Twitter widget language file
 */

$english = array(

	'twitter:title' => 'Tweets',
	'twitter:info' => 'Display your latest tweets',
	
	'twitter:username' => 'Your Twitter username',
	'twitter:widget_id' => 'Your Twitter Widget ID',
		
	'twitter:invalid' => 'This widget is configured with an invalid Twitter username or Widget ID. Click the customize icon to correct it.',
	'widgets:twitter:no_content' => 'This widget is not yet set.<br><a href="https://twitter.com/settings/widgets">Create your own widget</a> from your widgets settings page on twitter.com, then click on - <b>Edit</b> - and paste Twitter username and Widget ID*<br><br>*Note: see your widget\'s code: in data-widget-id=<b>"HERE-YOUR-WIDGET-ID_COPY-AND-PASTE-IT"</b>',
	
	'twitter_favorites:title' => 'Favorite Tweets',
	'twitter_favorites:info' => 'Display your favorite tweets',
	
	'twitter_list:title' => 'Twitter List',
	'twitter_list:info' => 'Display tweets from a list',
	'twitter:list' => 'Your Twitter list',
	'twitter_list:invalid' => 'This widget is configured with an invalid Twitter list. Click the customize icon to correct it.',
	
	'twitter_search:title' => 'Twitter Search',
	'twitter_search:info' => 'Display a custom search from Twitter',
	'twitter:search_query' => "Search query",
);

add_translation("en", $english);
