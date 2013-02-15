<?php 

 /**
	 * Elgg twitter edit page
	 *
	 * @package ElggTwitter
	 */
?>
<div>
<?php echo elgg_echo("twitter:username"); ?>
<?php echo elgg_view('input/text', array(
'name' => 'params[twitter_username]',
'value' => $vars['entity']->twitter_username,
)) ?>
</div>

<div>
<?php echo elgg_echo("twitter:search_query"); ?>
<?php echo elgg_view('input/text', array(
'name' => 'params[twitter_search_query]',
'value' => $vars['entity']->twitter_search_query,
)) ?>
</div>

<div>
<?php echo elgg_echo("twitter:widget_id"); ?>
<?php echo elgg_view('input/text', array(
'name' => 'params[twitter_widget_id]',
'value' => $vars['entity']->twitter_widget_id,
)) ?>
</div>