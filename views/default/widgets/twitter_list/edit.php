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
<?php echo elgg_echo("twitter:list"); ?>
<?php echo elgg_view('input/text', array(
'name' => 'params[twitter_list]',
'value' => $vars['entity']->twitter_list,
)) ?>
</div>

<div>
<?php echo elgg_echo("twitter:widget_id"); ?>
<?php echo elgg_view('input/text', array(
'name' => 'params[twitter_widget_id]',
'value' => $vars['entity']->twitter_widget_id,
)) ?>
</div>