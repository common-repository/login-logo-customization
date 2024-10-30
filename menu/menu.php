<?php

// create custom plugin settings menu
add_action('admin_menu', 'llc_create_menu');

function llc_create_menu() {

	//create new top-level menu
	add_dashboard_page('Default Settings', 'Logo', '8', __FILE__, 'llc_settings_page',WP_PLUGIN_URL .'/login-logo-customization/images/llc.png');
    //add_submenu_page(__FILE__, 'Login Logo Customization | Settings', 'Default Settings', '8', llc_settings_page);
    //add_submenu_page(__FILE__, 'Simple Website Screenshot | Details', 'Details', 8, WP_PLUGIN_DIR .'/wordpress-simple-website-screenshot/doc/details.php');
    //add_submenu_page(__FILE__, 'Login Logo Customization | Usage', 'Plugin Homepage', 8, WP_PLUGIN_DIR .'/wp-simple-website-screenshot/plugin_page.php');
	//call register settings function
	add_action( 'admin_init', 'register_llcsettings' );
}


function register_llcsettings() {
	//register our settings
	register_setting( 'llc-settings-group', 'edit_link' );
	register_setting( 'llc-settings-group', 'edit_logo' );
	register_setting( 'llc-settings-group', 'wordpress' );
	register_setting( 'llc-settings-group', 'logo_custom_url' );
}

function llc_settings_page() {

?>
<div class="wrap">
<h2>Login Logo Customization | Settings Page</h2>
<p style="float:right;margin-left:15px"><form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="Z2HB86TG9VGLN">
<input type="hidden" name="lc" value="GB">
<input type="hidden" name="item_name" value="Pigi - Simple Website Screenshot">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHosted">
<input type="image" src="https://www.paypal.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypal.com/it_IT/i/scr/pixel.gif" width="1" height="1">
</form>
<br />
</p>



<form method="post" action="options.php">
    <?php settings_fields( 'llc-settings-group' ); ?>
    
    <table class="form-table">
        <?php /*
        <tr valign="top">
        		<th scope="row"><?php _e('General Settings', ''); ?></th>
		<td><input name="edit_link" id="edit_link" value='1' <?php if (get_option('edit_link') == '1') { echo "checked='checked'"; } ?> type="checkbox" /> <label for="advanced_settings"> <?php _e('Edit wp-admin Default LINK?'); ?></label></td> 
        <td><?php _e('If checked the default Wordpress Plugin Will be changed with your Home Base Blog url; In this Case:')?> <b><?php bloginfo('url'); ?></b></td>
        </tr>
        */ ?>
                <tr valign="top">
		<th scope="row"><?php _e('General Settings', ''); ?></th>
		<td><input name="edit_logo" id="edit_logo" value='1' <?php if (get_option('edit_logo') == '1') { echo "checked='checked'"; } ?> type="checkbox" /> <label for="advanced_settings"> <?php _e('Edit wp-admin Default LOGO?'); ?></label></td>
        <td><?php _e('If Checked you need to specify the custom logo URL; See Below')?></td>    
        </tr>
            
        <tr valign="top">
        <th scope="row">Logo Custom URL</th>
        <td><textarea rows="3" cols="28" name="logo_custom_url" value="<?php echo get_option('logo_custom_url'); ?>"> <?php echo get_option('logo_custom_url'); ?></textarea></td>
        <td><?php _e('Insert the URL of your custom logo For EX.'); ?> <?php bloginfo('url')?>/image/logo.png</td>
        </tr> 
    </table>
    
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>

</form>

<h2>Usefull Links:</h2>

<a href="http://www.digg-it.info/category/wp-plugin-dev/login-logo-customization" target="_blank"><img src="<?php bloginfo('url')?>/wp-content/plugins/login-logo-customization/images/homepage.jpg" width="60" height="60" border="0" Title="'Login Logo Customization' Home Page"></a>
<a href="http://feeds.feedburner.com/LoginLogoCustomization" target="_blank"><img src="<?php bloginfo('url')?>/wp-content/plugins/login-logo-customization/images/rss.png" width="60" height="60" border="0" Title="'Login Logo Customization' Home Page Feed"></a>
<a href="mailto:pigi.bari@gmail.com?subject=My Opinion on 'Login Logo Customization'"><img src="<?php bloginfo('url')?>/wp-content/plugins/login-logo-customization/images/mail.jpg" width="60" height="60" border="0" Title="'Login Logo Customization' Plugin Send Me your Feedback"></a>
<br /><br />
<h2>Share:</h2>
Please Share Login Logo Customization Post <br />
<a name="fb_share" type="box_count" share_url="http://www.digg-it.info/login-logo-customization-v-0-1b" href="http://www.facebook.com/sharer.php">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
<script type="text/javascript">
tweetmeme_url = 'http://www.digg-it.info/login-logo-customization-v-0-1b';
</script>
<script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script>
<?php }?>