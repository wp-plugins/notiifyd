<?php
add_action('admin_menu', 'notiifyd_menu');

function notiifyd_menu() {
	add_options_page('Super Simple Notices', 'Super Simple Notices', 'manage_options', 'notiifyd', 'notiifyd_function');
	add_action( 'admin_init', 'register_notiifyd_settings' );
}

function register_notiifyd_settings() {
	register_setting( 'notiifyd-settings-group', 'text' );
	register_setting( 'notiifyd-settings-group', 'placement' );
	register_setting( 'notiifyd-settings-group', 'display_page' );
	register_setting( 'notiifyd-settings-group', 'backgroundColor' );
	register_setting( 'notiifyd-settings-group', 'backgroundTextColor' );
	register_setting( 'notiifyd-settings-group', 'fonts' );
	register_setting( 'notiifyd-settings-group', 'link1' );
}

function notiifyd_function(){ ?>

<div class="wrap">
<h2>Super Simple Notices Settings</h2><hr />

<?php

	if(isset($_POST['submit'])){
		isset($_POST['text']) ? update_option('text', trim($_POST['text'])) : update_option('text', '');
		isset($_POST['placement']) ? update_option('placement',$_POST['placement']) : update_option('placement', 'h');
		isset($_POST['display_page']) ? update_option('display_page', trim($_POST['display_page'])) : update_option('display_page', 'all');
		isset($_POST['backgroundColor']) ? update_option('backgroundColor',$_POST['backgroundColor']) : update_option('backgroundColor', '#f51818');
		isset($_POST['backgroundTextColor']) ? update_option('backgroundTextColor',$_POST['backgroundTextColor']) : update_option('backgroundTextColor', '#FFF');
		isset($_POST['fonts']) ? update_option('fonts', trim($_POST['fonts'])) : update_option('fonts', '1');
		isset($_POST['link1']) ? update_option('link1', trim($_POST['link1'])) : update_option('link1', 'javascript:void(0);');
	}
?>

<form action="" method="POST">
<?php settings_fields( 'notiifyd-settings-group' ); ?>
    <?php do_settings_sections( 'notiifyd-settings-group' ); ?>
<table class="form-table">
<tr valign="top">
<th scope="row"><label>Notice Placement</label></th>
<td>
	<label><input name="placement" type="radio" value="h" autocomplete="off"<? if(get_option('placement') === 'h'){  echo 'checked'; }?> >&nbsp; <span>Header</span></label><br>
	<label><input name="placement" type="radio" value="f" autocomplete="off"<? if(get_option('placement') === 'f'){  echo 'checked'; }?> >&nbsp; <span>Footer</span></label>
</td>
</tr>
<tr valign="top">
        <th scope="row"><label>Where to Display Notice?</label></th>
        <td><input type="radio" name="display_page" value="home" <?php if(esc_attr( get_option('display_page')) == "home") echo "checked"; ?> />In home page 
		<br><input type="radio" name="display_page" value="all" <?php if(esc_attr( get_option('display_page')) == "all") echo "checked"; ?> />In all pages</td>
        </tr>
<tr valign="top">
    <th scope="row"><label>Notice Background Color</label></th>
    <td>
       <input type="text" maxlength="6" size="6" name="backgroundColor" id="colorpickerField1" value="<? if(!get_option('backgroundColor')){  echo '#f51818'; }else{ echo get_option('backgroundColor');  }?>" />
    </td>
</tr>

<tr valign="top">
    <th scope="row"><label>Notice Text Color</label></th>
    <td>
       <input type="text" maxlength="6" size="6" name="backgroundTextColor" id="colorpickerField2" value="<? if(!get_option('backgroundTextColor')){  echo '#FFF'; }else{ echo get_option('backgroundTextColor');  }?>" />
    </td>
</tr>

<tr valign="top">
    <th scope="row"><label>Select Font</label></th>
    <td>
    
      <select name="fonts" id="fonts">
      	<option value="1" <? if(get_option('fonts') === '1' ){?> selected="selected"  <?php  }?>>Open sans</option>
        <option value="2" <? if(get_option('fonts') === '2' ){?> selected="selected"  <?php  }?>>Bubblegum Sans</option>
        <option value="3" <? if(get_option('fonts') === '3' ){?> selected="selected"  <?php  }?>>Yanone Kaffeesatz</option>
        <option value="4" <? if(get_option('fonts') === '4' ){?> selected="selected"  <?php  }?>>Droid Sans</option>
        <option value="5" <? if(get_option('fonts') === '5' ){?> selected="selected"  <?php  }?>>Dosis</option>
        <option value="6" <? if(get_option('fonts') === '6' ){?> selected="selected"  <?php  }?>>Satisfy</option>
		<option value="7" <? if(get_option('fonts') === '7' ){?> selected="selected"  <?php  }?>>Josefin Sans</option>
        <option value="8" <? if(get_option('fonts') === '8' ){?> selected="selected"  <?php  }?>>Shadows Into Light</option>
        <option value="9" <? if(get_option('fonts') === '9' ){?> selected="selected"  <?php  }?>>Pathway Gothic One</option>
        <option value="10" <? if(get_option('fonts') === '10' ){?> selected="selected"  <?php  }?>>Rajdhani</option>
        <option value="11" <? if(get_option('fonts') === '11' ){?> selected="selected"  <?php  }?>>Archivo Narrow</option>
        <option value="12" <? if(get_option('fonts') === '12' ){?> selected="selected"  <?php  }?>>Squada One</option>
		<option value="13" <? if(get_option('fonts') === '13' ){?> selected="selected"  <?php  }?>>Ropa Sans</option>
        <option value="14" <? if(get_option('fonts') === '14' ){?> selected="selected"  <?php  }?>>Voltaire</option>
        <option value="15" <? if(get_option('fonts') === '15' ){?> selected="selected"  <?php  }?>>Covered By Your Grace</option>
        <option value="16" <? if(get_option('fonts') === '16' ){?> selected="selected"  <?php  }?>>Averia Sans Libre</option>
        <option value="17" <? if(get_option('fonts') === '17' ){?> selected="selected"  <?php  }?>>Marvel</option>
        <option value="18" <? if(get_option('fonts') === '18' ){?> selected="selected"  <?php  }?>>Unica One</option>
		<option value="19" <? if(get_option('fonts') === '19' ){?> selected="selected"  <?php  }?>>Abel</option>
        <option value="20" <? if(get_option('fonts') === '20' ){?> selected="selected"  <?php  }?>>Economica</option>
		<option value="21" <? if(get_option('fonts') === '21' ){?> selected="selected"  <?php  }?>>Poiret One</option>
        <option value="22" <? if(get_option('fonts') === '22' ){?> selected="selected"  <?php  }?>>Advent Pro</option>
        <option value="23" <? if(get_option('fonts') === '23' ){?> selected="selected"  <?php  }?>>Homenaje</option>
		<option value="24" <? if(get_option('fonts') === '24' ){?> selected="selected"  <?php  }?>>Bubbler One</option>
        <option value="25" <? if(get_option('fonts') === '25' ){?> selected="selected"  <?php  }?>>Text Me One</option>
      </select>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label>Notice</label></th>
    <td>
        <textarea rows="5" cols="50" name="text" id="text" style="float:left;" maxlength="250"><?  echo esc_attr( get_option('text') ); ?></textarea>
        <div style="clear:both;color:red;"><span> Maximum 250 characters </span></div>
    </td>
</tr>

<tr valign="top">
    <th scope="row"><label>Link your Notice</label></th>
    <td>
       <input  type="text" name="link1" value="<?  echo esc_attr( get_option('link1') );?>">
    </td>
</tr>

</table>

<p class="submit"><input name="submit" id="submit" class="button-primary" value="Save Changes" type="submit"></p>
</form>
<hr />
</div>

<p><font color="red">Having problems with your site ? Do you have a WordPress issue/error or task that you need help with ?</font><br /> The <a href="http://wpemergencyroom.com">WP Emergency Room</a> gives you full access to your own personal support team for just about any small WordPress related fixes and tasks.</p><hr />

<?

	}

register_activation_hook(__FILE__, 'notiifyd_install');
register_uninstall_hook(__FILE__, 'notiifyd_uninstall');

	function sticky_install(){
		if(!get_option('placement')){
			add_option('placement','h');
		}
		if(!get_option('backgroundColor')){
			add_option('backgroundColor','#f51818');
		}
		if(!get_option('backgroundTextColor')){
			add_option('backgroundTextColor','#FFF');
		}
		
		if(!get_option('fonts')){
			add_option('fonts','1');
		}
		if(!get_option('text')){
			add_option('text','Thanks for using Super Simple Notices');
		}
		
		if(!get_option('link1')){
			add_option('link1','#');
		}
		if(!get_option('display_page')){
			add_option('display_page','all');
		}
	}
	
	
	function sticky_uninstall(){
		delete_option('placement');
		delete_option('backgroundColor');
		delete_option('backgroundTextColor');
		delete_option('fonts');
		delete_option('text');
		delete_option('link1');
		delete_option('display_page');
	}
	
	
	
	
	
?>