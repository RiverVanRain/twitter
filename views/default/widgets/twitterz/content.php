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
elgg_load_js('elgg.twitter');
elgg_load_js('elgg.twitztab');
elgg_load_js('elgg.organictabs');

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

$widget_id = $vars['entity']->twitter_widget_id;

$twit_url = "<a class=\"twitter-timeline\"  href=\"https://twitter.com/" . urlencode($username) . "\"  data-widget-id=\"" . $widget_id ."\">Tweets by @" . urlencode($username) . "</a>";

$twitter_favorites_id = $vars['entity']->twitter_favorites_widget_id;

$twitter_favorites_url = "<a class=\"twitter-timeline\"  href=\"https://twitter.com/" . urlencode($username) . "/favorites\"  data-widget-id=\"" . $twitter_favorites_id ."\">Favorite Tweets by @" . urlencode($username) . "</a>";

$twitter_list = $vars['entity']->twitter_list;

$twitter_list_id = $vars['entity']->twitter_list_widget_id;

$twitter_list_url = "<a class=\"twitter-timeline\"  href=\"https://twitter.com/" . urlencode($username) . urlencode($twitter_list) . "\"  data-widget-id=\"" . $twitter_list_id ."\">Tweets from @" . urlencode($username) . "/". urlencode($twitter_list) ."</a>";

$twitter_search_query = $vars['entity']->twitter_search_query;

$twitter_search_id = $vars['entity']->twitter_search_widget_id;

$twitter_search_url = "<a class=\"twitter-timeline\"  href=\"https://twitter.com/search?q=%23" . urlencode($twitter_search_query) . "\"  data-widget-id=\"" . $twitter_search_id ."\">Tweets about #" . urlencode($twitter_search_query) . "</a>";

?>
<div id="twitztab">
		<ul class="nav">
			<li class="nav-one"><a href="#timeline" class="current"><?php echo elgg_echo("twitter:title"); ?></a></li>
			<li class="nav-two"><a href="#favorites"><?php echo elgg_echo("twitter_favorites:title"); ?></a></li>
			<li class="nav-three"><a href="#list"><?php echo elgg_echo("twitter_list:title"); ?></a></li>
			<li class="nav-four last"><a href="#search"><?php echo elgg_echo("twitter_search:title"); ?></a></li>
		</ul>
		<div class="list-wrap">
			<ul id="timeline">
			<?php if (empty($widget_id)) {
						echo "<p>" . elgg_echo("twitter:invalid") . "</p>";
						} ?>
				<li><?php echo $twit_url; ?></li>
			</ul>	
			<ul id="favorites" class="hide">
		<?php if (empty($twitter_favorites_id)) {
					echo "<p>" . elgg_echo("twitter:invalid") . "</p>";
					} ?>
				<li><?php echo $twitter_favorites_url; ?></li>
			</ul>	
			<ul id="list" class="hide">
			<?php if (empty($twitter_list)) {
						echo "<p>" . elgg_echo("twitter_list:invalid") . "</p>";
						} 
						if (empty($twitter_list_id)) {
						echo "<p>" . elgg_echo("twitter:invalid") . "</p>";
						}
						?>
				<li><?php echo $twitter_list_url; ?></li>
				</ul>
				<ul id="search" class="hide">
				<?php if (empty($twitter_search_id)) {
							echo "<p>" . elgg_echo("twitter:invalid") . "</p>";
							} ?>
				<li><?php echo $twitter_search_url; ?></li>
			</ul>
		</div>
	</div>