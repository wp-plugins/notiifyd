<?php

/*
  Plugin Name: Super Simple Notices
  Plugin URI: http://yooplugins.com/
  Description: Super Simple Notices allows you to add beautiful, configurable (sticky) notices to your WP installation in seconds. This plugin is equipped with a color picker for easy background and text coloring as well as a selection of awesome Google fonts - guaranteed to bring life to your notices and get you noticed! See <a href="options-general.php?page=notiifyd">Settings -> Super Simple Notices</a> to get started.  
  Version: 1.4
  Author: RSPublishing
  Author URI: http://yooplugins.com/
  License: GPLv2 or later
  License URI: http://www.gnu.org/licenses/gpl-2.0.html/
 */
 
/*
  Copyright 2015  Rynaldo Stoltz  (email: rcstoltz@gmail.com | web: http://yooplugins.com/)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

include(plugin_dir_path(__FILE__).'lib/notiifyd.class.php');
include(plugin_dir_path(__FILE__).'admin.php');

$notiifyd = new notiifyd();

if((!is_admin())) {

if(get_option('placement') === 'h') {
	add_action('wp_head', 'show_notiifyd_header');
} else {
	add_action('wp_footer', 'show_notiifyd_header');
}

function show_notiifyd_header() {
	$display_page = esc_attr(get_option('display_page'));
	if($display_page == "all") {
			addNewsInFront();
	}
	else {
		if(is_home()) {
			addNewsInFront();
		}
	}
}

function addNewsInFront() { ?>
	<style >
    	 body{ padding:0}
    </style>
    
    <?php if(get_option('fonts') === '1') { ?>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  { font-family: 'Open Sans', sans-serif; }
    </style>
    <?php } ?>
    
    <?php if(get_option('fonts') === '1') { ?>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Open Sans', sans-serif; }
		#notiifyd span { font-family: 'Open Sans', sans-serif; }
    </style>
    <?php } ?>
    
    <?php if(get_option('fonts') === '2') { ?>
    <link href='http://fonts.googleapis.com/css?family=Bubblegum+Sans' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd a { font-family: 'Bubblegum Sans', cursive; }
		#notiifyd span { font-family: 'Bubblegum Sans', cursive; }
    </style>
    <?php } ?>
    
    <?php if(get_option('fonts') === '3') { ?>
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Yanone Kaffeesatz', sans-serif; }
		#notiifyd span { font-family: 'Yanone Kaffeesatz', sans-serif; }
    </style>
    <?php } ?>
    
    <?php if(get_option('fonts') === '4') { ?>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Droid Sans', sans-serif; }
		#notiifyd span { font-family: 'Droid Sans', sans-serif; }
    </style>
    <?php } ?>
    
    <?php if(get_option('fonts') === '5') { ?>
    <link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Dosis', sans-serif; }
		#notiifyd span { font-family: 'Dosis', sans-serif; }
    </style>
    <?php } ?>
    
    <?php if(get_option('fonts') === '6') { ?>
    <link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Satisfy', cursive; }
		#notiifyd span { font-family: 'Satisfy', cursive; }
    </style>
    <?php } ?>
	
	<?php if(get_option('fonts') === '7') { ?>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Josefin Sans', sans-serif; }
		#notiifyd span { font-family: 'Josefin Sans', sans-serif; }
    </style>
    <?php } ?>
	
	<?php if(get_option('fonts') === '8') { ?>
    <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Shadows Into Light', cursive; }
		#notiifyd span { font-family: 'Shadows Into Light', cursive; }
    </style>
    <?php } ?>
	
	<?php if(get_option('fonts') === '9') { ?>
    <link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Pathway Gothic One', sans-serif; }
		#notiifyd span { font-family: 'Pathway Gothic One', sans-serif; }
    </style>
    <?php } ?>
	
	<?php if(get_option('fonts') === '10') { ?>
    <link href='http://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Rajdhani', sans-serif; }
		#notiifyd span { font-family: 'Rajdhani', sans-serif; }
    </style>
    <?php } ?>
	
	<?php if(get_option('fonts') === '11') { ?>
    <link href='http://fonts.googleapis.com/css?family=Archivo+Narrow' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Archivo Narrow', sans-serif; }
		#notiifyd span { font-family: 'Archivo Narrow', sans-serif; }
    </style>
    <?php } ?>
	
	<?php if(get_option('fonts') === '12') { ?>
    <link href='http://fonts.googleapis.com/css?family=Squada+One' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Squada One', cursive; }
		#notiifyd span { font-family: 'Squada One', cursive; }
    </style>
    <?php } ?>
	
	<?php if(get_option('fonts') === '13') { ?>
    <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Ropa Sans', sans-serif; }
		#notiifyd span { font-family: 'Ropa Sans', sans-serif; }
    </style>
    <?php } ?>
	
	<?php if(get_option('fonts') === '14') { ?>
    <link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Voltaire', sans-serif; }
		#notiifyd span { font-family: 'Voltaire', sans-serif; }
    </style>
    <?php } ?>
	
	<?php if(get_option('fonts') === '15') { ?>
    <link href='http://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Covered By Your Grace', cursive; }
		#notiifyd span { font-family: 'Covered By Your Grace', cursive; }
    </style>
    <?php } ?>
	
	<?php if(get_option('fonts') === '16') { ?>
    <link href='http://fonts.googleapis.com/css?family=Averia+Sans+Libre' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Averia Sans Libre', cursive; }
		#notiifyd span { font-family: 'Averia Sans Libre', cursive; }
    </style>
    <?php } ?>
	
	<?php if(get_option('fonts') === '17') { ?>
    <link href='http://fonts.googleapis.com/css?family=Marvel' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Marvel', sans-serif; }
		#notiifyd span { font-family: 'Marvel', sans-serif; }
    </style>
    <?php } ?>
	
	<?php if(get_option('fonts') === '18') { ?>
    <link href='http://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Unica One', cursive; }
		#notiifyd span { font-family: 'Unica One', cursive; }
    </style>
    <?php } ?>
	
	<?php if(get_option('fonts') === '19') { ?>
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Abel', sans-serif; }
		#notiifyd span { font-family: 'Abel', sans-serif; }
    </style>
    <?php } ?>
	
	<?php if(get_option('fonts') === '20') { ?>
    <link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Economica', sans-serif; }
		#notiifyd span { font-family: 'Economica', sans-serif; }
    </style>
    <?php } ?>
	
	<?php if(get_option('fonts') === '21') { ?>
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Poiret One', cursive; }
		#notiifyd span { font-family: 'Poiret One', cursive; }
    </style>
    <?php } ?>
	
	<?php if(get_option('fonts') === '22') { ?>
    <link href='http://fonts.googleapis.com/css?family=Advent+Pro' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Advent Pro', sans-serif; }
		#notiifyd span { font-family: 'Advent Pro', sans-serif; }
    </style>
    <?php } ?>
	
	<?php if(get_option('fonts') === '23') { ?>
    <link href='http://fonts.googleapis.com/css?family=Homenaje' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Homenaje', sans-serif; }
		#notiifyd span { font-family: 'Homenaje', sans-serif; }
    </style>
    <?php } ?>
	
	<?php if(get_option('fonts') === '24') { ?>
    <link href='http://fonts.googleapis.com/css?family=Bubbler+One' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Bubbler One', sans-serif; }
		#notiifyd span { font-family: 'Bubbler One', sans-serif; }
    </style>
    <?php } ?>
	
	<?php if(get_option('fonts') === '25') { ?>
    <link href='http://fonts.googleapis.com/css?family=Text+Me+One' rel='stylesheet' type='text/css'>
    <style>
        #notiifyd  a { font-family: 'Text Me One', sans-serif; }
		#notiifyd span { font-family: 'Text Me One', sans-serif; }
    </style>
    <?php } ?>
	
    <style>
        #notiifyd  { background-color:#14cece; }
    </style>

    <div id="notiifyd"  style=" background-color:<?php  echo get_option('backgroundColor'); ?>; <?php if(get_option('placement') === 'h'){ echo 'top:0;';}else{ echo 'bottom:0;';}?> ">
        <div style="width:95%; margin:0 auto;">
          <?php if(!get_option('link1') && get_option('link1') === ''){
		  	
		  ?>
          <span style="color:<?php  echo get_option('backgroundTextColor'); ?>"><?php  echo get_option('text'); ?></span>
		  <?php }else{ ?> 
           <a href="<?php  echo get_option('link1');?>"  style="color:<?php  echo get_option('backgroundTextColor'); ?>" target="_blank">
                <?php  echo get_option('text'); ?>
            </a>
            
            <?php } ?>
        </div>
        <div class="close" align="right"><font size="0" >x</font> &nbsp; </div>
    </div>
		
    <script>
        jQuery(document).ready(function(){
            jQuery('.close').on('click',function(){
                jQuery('#notiifyd').fadeOut('slow');
            })
        })
    
    </script>
<?php 
	}
}
?>