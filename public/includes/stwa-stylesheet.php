<?php
// We'll be outputting CSS
require_once('../../../../../wp-load.php');
require_once( ABSPATH . 'wp-config.php' );
header('Content-type: text/css');
$defaults = array(	
	stwa_bgcolor => "#fff",
	stwa_bordercolor => "#000",
	stwa_border_width => "2",
	stwa_placement => "right",
	stwa_width => "200"
);

$options = get_option('stwa_settings');
$options = wp_parse_args( $options, $defaults );

$background_color = $options['stwa_bgcolor'];
$border_color = $options['stwa_bordercolor'];
$border_width = $options['stwa_border_width'];	
$placement = $options['stwa_placement'];
$width = $options['stwa_width'];
?>

#scroll-item {
	padding: 10px;
	background-color: #fff;
	width: <?php echo $width; ?>px;	
	position: fixed;
	bottom: 13px;
	background-color: <?php echo $background_color; ?>;
	border-width:  <?php echo $border_width; ?>px;
	border-color: <?php echo $border_color; ?>;
	border-style: solid;
	display: none;
	<?php echo $placement.":2px"; ?>;
	z-index: 1000;
}

.stwa_arrow{
	position: fixed;
	bottom: 50px;
	z-index: 20000;
	display: none;
	<?php echo $placement.":2px"; ?>;
	cursor: pointer;
}

