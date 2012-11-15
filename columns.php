<?php
/**
 * Plugin Name: Columns
 * Description: A plugin to easily display blocks of content as columns.
 * Author: Dan Bennett
 * Version: 0.1
 */
?>
<?php

function columns_css(){
	echo "<link rel='stylesheet' type='text/css' href='".WP_PLUGIN_URL."/columns/columns.css' />\n";
}
add_action('wp_head', 'columns_css');

function columns_container($atts){
	extract(shortcode_atts(array(
		'count'=>'',
		'class'=>'',
		'close'=>'false'
	), $atts));
	if($close == 'false'){
		if(empty($count) || $count < 2){
			return "";
		} else {
			$content = "<div class='columns_plugin cols_$count";
			if(!empty($class)){
				$content .= " $class";
			}
			return $content."'>";
		}
	} else {
		return "</div>";
	}
}
add_shortcode('columns', 'columns_container');

function columns_each($atts){
	extract(shortcode_atts(array(
		'class'=>'',
		'close'=>'false'
	), $atts));
	if($close == 'false'){
		$content = "<div class='columns_plugin_col";
		if(!empty($class)){
			$content .= " $class";
		}
		return $content."'>";
	} else {
		return "</div>";
	}
}
add_shortcode('column', 'columns_each');

?>