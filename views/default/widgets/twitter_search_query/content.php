<?php

/**
 * Elgg twitter view page
 *
 * @package ElggTwitter
 */
elgg_load_js('elgg.twitter');

$username = $vars['entity']->twitter_username;

if (empty($username)) {
echo "<p>" . elgg_echo("widgets:twitter:no_content") . "</p>";
return;
}

$username_is_valid = preg_match('~^[a-zA-Z0-9_]{1,20}$~', $username);
if (!$username_is_valid) {
echo "<p>" . elgg_echo("twitter:invalid") . "</p>";
return;
}

$twitter_search_query = $vars['entity']->twitter_search_query;

$widget_id = $vars['entity']->twitter_widget_id;
if (empty($widget_id)) {
echo "<p>" . elgg_echo("twitter:invalid") . "</p>";
}

$script_url = "<a class=\"twitter-timeline\"  href=\"https://twitter.com/search?q=%23" . urlencode($twitter_search_query) . "\"  data-widget-id=\"" . $widget_id ."\">Tweets about #" . urlencode($twitter_search_query) . "</a>";

echo $script_url; 

?>

