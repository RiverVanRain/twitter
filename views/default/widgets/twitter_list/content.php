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

$twitter_list = $vars['entity']->twitter_list;
if (empty($twitter_list)) {
echo "<p>" . elgg_echo("twitter_list:invalid") . "</p>";
}

$widget_id = $vars['entity']->twitter_widget_id;
if (empty($widget_id)) {
echo "<p>" . elgg_echo("twitter:invalid") . "</p>";
}

$script_url = "<a class=\"twitter-timeline\"  href=\"https://twitter.com/" . urlencode($username) . urlencode($twitter_list) . "\"  data-widget-id=\"" . $widget_id ."\">Tweets from @" . urlencode($username) . "/". urlencode($twitter_list) ."</a>";

echo $script_url; 

?>

