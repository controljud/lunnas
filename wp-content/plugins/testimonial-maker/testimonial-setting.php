<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
$testimonial_settings = get_option('testimonial_settings');
//js
wp_enqueue_script( 'awl-tml-bootstrap-js',  TML_PLUGIN_URL .'js/bootstrap.js', array( 'jquery' ), '', true );
	
//css
wp_enqueue_style ( 'tml-bootstrap-css', TML_PLUGIN_URL . 'css/bootstrap.css');
wp_enqueue_style ( 'tml-toggle-css', TML_PLUGIN_URL . 'css/toogle-button.css');
wp_enqueue_style ( 'tml-font-awesome-css', TML_PLUGIN_URL . 'css/font-awesome.css');

?>
<style>
	.container-fluid{
		background-color:#ffffff;
		
	}
	.ms_comment_settings {
		font-size: 17px !important;
		padding-left: 20px;
		font: initial;
		margin-top: 5px;
	}
</style>				
<div class="container-fluid">	
	<h1><?php _e('How to show Testimonial on page ?', TML_TXTDM); ?></h1>
	<hr>
	<p class="input-text-wrap">
		<p><?php _e('Copy & Embed shortcode into any Page/ Post / Text to display Testimonial on site.', TML_TXTDM); ?><br></p>
		<input type="text" name="shortcode" id="shortcode" value="[TML]" readonly style="height: 60px; text-align: center; font-size: 24px; width: 20%; border: 2px dashed;" onmouseover="return pulseOff();" onmouseout="return pulseStart();">
	</p>
	<br>
	<br>
	<br>
	<form id="testimonial_form_setting">
		<div id="carousal_effect">
			<p class="bg-title1"><?php _e('1.Select Testimonial Template Design', TML_TXTDM); ?></p><br>
			<?php if(isset($testimonial_settings['testimonial_carousel_design'])) $testimonial_carousel_design = $testimonial_settings['testimonial_carousel_design']; else $testimonial_carousel_design = 1; ?>
			<select id="testimonial_carousel_design" name="testimonial_carousel_design" class="form-control" style="margin-left: 15px; width: 300px;">
				<option value="1" <?php if($testimonial_carousel_design == "1") echo "selected=selected"; ?>><?php _e('Template 1', TML_TXTDM); ?></option>
				<option value="2" <?php if($testimonial_carousel_design == "2") echo "selected=selected"; ?>><?php _e('Template 2', TML_TXTDM); ?></option>
				<option value="3" <?php if($testimonial_carousel_design == "3") echo "selected=selected"; ?>><?php _e('Template 3', TML_TXTDM); ?></option>
				<option value="4" <?php if($testimonial_carousel_design == "4") echo "selected=selected"; ?>><?php _e('Template 4', TML_TXTDM); ?></option>
			</select><br>
		</div>
		<div id="carousal_effect">
			<p class="bg-title1"><?php _e('2. Transitions Settings', TML_TXTDM); ?></p><br>
			<p class="bg-lower-title"><?php _e('Select Effect', TML_TXTDM); ?></p><br>
			<p class="switch-field em_size_field">
				<?php if(isset($testimonial_settings['carousal_effect'])) $carousal_effect = $testimonial_settings['carousal_effect']; else $carousal_effect = "none"; ?>
				<input type="radio" name="carousal_effect" id="carousal_effect1" value="none" <?php if($carousal_effect == "none") echo "checked=checked"; ?>>
				<label for="carousal_effect1"><?php _e('None', TML_TXTDM); ?></label>
				<input type="radio" name="carousal_effect" id="carousal_effect2" value="fadeUp" <?php if($carousal_effect == "fadeUp") echo "checked=checked"; ?>>
				<label for="carousal_effect2"><?php _e('Fadup', TML_TXTDM); ?></label>
				<p class="ms_comment_settings"><?php _e('Select Transitions Effect your testimonial', TML_TXTDM); ?></p>
			</p><br>
			<p class="bg-lower-title"><?php _e('Auto Play', TML_TXTDM); ?></p><br>
				<p class="switch-field em_size_field">
					<?php if(isset($testimonial_settings['auto_play_carousel'])) $auto_play_carousel = $testimonial_settings['auto_play_carousel']; else $auto_play_carousel = "true"; ?>
					<input type="radio" name="auto_play_carousel" id="auto_play_carousel1" value="true" <?php if($auto_play_carousel == "true") echo "checked=checked"; ?>>
					<label for="auto_play_carousel1"><?php _e('Yes', TML_TXTDM); ?></label>
					<input type="radio" name="auto_play_carousel" id="auto_play_carousel2" value="false" <?php if($auto_play_carousel == "false") echo "checked=checked"; ?>>
					<label for="auto_play_carousel2"><?php _e('No', TML_TXTDM); ?></label>
					<p class="ms_comment_settings"><?php _e('Select Auto play yes or no for testimonial slide.', TML_TXTDM); ?></p>
				</p>
				<!--start Title settings -->			
				<p class="bg-title1"><?php _e('3. Color Settings', TML_TXTDM); ?></p><br>
				<p class="bg-lower-title"><?php _e('Customer name color', TML_TXTDM); ?></p><br>
			<p class="switch-field em_size_field">
				<?php if(isset($testimonial_settings['title_color'])) $title_color = $testimonial_settings['title_color']; else $title_color = "#000000"; ?>
				<input type="radio" name="title_color" id="title_color1" value="#000000" <?php if($title_color == "#000000") echo "checked=checked"; ?>>
				<label for="title_color1"><?php _e('Black', TML_TXTDM); ?></label>
				<input type="radio" name="title_color" id="title_color2" value="#ffffff" <?php if($title_color == "#ffffff") echo "checked=checked"; ?>>
				<label for="title_color2"><?php _e('White', TML_TXTDM); ?></label>
				<input type="radio" name="title_color" id="title_color3" value="#1e73be" <?php if($title_color == "#1e73be") echo "checked=checked"; ?>>
				<label for="title_color3"><?php _e('Blue', TML_TXTDM); ?></label>
				<input type="radio" name="title_color" id="title_color4" value="#dd3333" <?php if($title_color == "#dd3333") echo "checked=checked"; ?>>
				<label for="title_color4"><?php _e('Red', TML_TXTDM); ?></label>
				<p class="ms_comment_settings"><?php _e('Change Testimonial text color.', TML_TXTDM); ?></p>
			</p><br>
			<p class="bg-lower-title"><?php _e('Description Text Color', TML_TXTDM); ?></p><br>
			<p class="switch-field em_size_field">
				<?php if(isset($testimonial_settings['description_color'])) $description_color = $testimonial_settings['description_color']; else $description_color = "#000000"; ?>
				<input type="radio" name="description_color" id="description_color1" value="#000000" <?php if($description_color == "#000000") echo "checked=checked"; ?>>
				<label for="description_color1"><?php _e('Black', TML_TXTDM); ?></label>
				<input type="radio" name="description_color" id="description_color2" value="#ffffff" <?php if($description_color == "#ffffff") echo "checked=checked"; ?>>
				<label for="description_color2"><?php _e('White', TML_TXTDM); ?></label>
				<input type="radio" name="description_color" id="description_color3" value="#1e73be" <?php if($description_color == "#1e73be") echo "checked=checked"; ?>>
				<label for="description_color3"><?php _e('Blue', TML_TXTDM); ?></label>
				<input type="radio" name="description_color" id="description_color4" value="#dd3333" <?php if($description_color == "#dd3333") echo "checked=checked"; ?>>
				<label for="description_color4"><?php _e('Red', TML_TXTDM); ?></label>
				<p class="ms_comment_settings"><?php _e('Change Testimonial description text color.', TML_TXTDM); ?></p>
			</p><br>
			<p class="bg-lower-title"><?php _e('Designation Text Color', TML_TXTDM); ?></p><br>
			<p class="switch-field em_size_field">
				<?php if(isset($testimonial_settings['designation_color'])) $designation_color = $testimonial_settings['designation_color']; else $designation_color = "#000000"; ?>
				<input type="radio" name="designation_color" id="designation_color1" value="#000000" <?php if($designation_color == "#000000") echo "checked=checked"; ?>>
				<label for="designation_color1"><?php _e('Black', TML_TXTDM); ?></label>
				<input type="radio" name="designation_color" id="designation_color2" value="#ffffff" <?php if($designation_color == "#ffffff") echo "checked=checked"; ?>>
				<label for="designation_color2"><?php _e('White', TML_TXTDM); ?></label>
				<input type="radio" name="designation_color" id="designation_color3" value="#1e73be" <?php if($designation_color == "#1e73be") echo "checked=checked"; ?>>
				<label for="designation_color3"><?php _e('Blue', TML_TXTDM); ?></label>
				<input type="radio" name="designation_color" id="designation_color4" value="#dd3333" <?php if($designation_color == "#dd3333") echo "checked=checked"; ?>>
				<label for="designation_color4"><?php _e('Red', TML_TXTDM); ?></label>
				<p class="ms_comment_settings"><?php _e('Change Testimonial designation text color.', TML_TXTDM); ?></p>
			</p><br>
			<!--end Title settings -->
			<p class="bg-title1"><?php _e('4. Pagination Bullets', TML_TXTDM); ?></p><br>
			<p class="switch-field em_size_field">
				<?php if(isset($testimonial_settings['pagination11'])) $pagination11 = $testimonial_settings['pagination11']; else $pagination11 = "false"; ?>
				<input type="radio" name="pagination11" id="pagination1" value="true" <?php if($pagination11 == "true") echo "checked=checked"; ?>>
				<label for="pagination1"><?php _e('Yes', TML_TXTDM); ?></label>
				<input type="radio" name="pagination11" id="pagination2" value="false" <?php if($pagination11 == "false") echo "checked=checked"; ?>>
				<label for="pagination2"><?php _e('No', TML_TXTDM); ?></label>
				<p class="ms_comment_settings"><?php _e('Enable or disable pagination', TML_TXTDM); ?></p>
			</p>
		</div>
		<!--end-->
		<input type="hidden" id="snow_action" name="snow_action" value="save_tmlsetting">
		<div id="loading_icon" name="loading_icon" style="display:none;"> 
			<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
			<span class=""><?php _e('Please wait...', TML_TXTDM); ?></span>
		</div>
		&nbsp;&nbsp;&nbsp;<button type="button" id="save_tmlsetting" class="btn btn-default btn-lg" style="background-color: #F25E51; color:white" onclick="TmlSaveSettings();"><?php _e('Save', TML_TXTDM); ?></button>
	</form> 
</div>
			
<?php		
//Default settings
register_activation_hook( __FILE__, 'testimonial_defaultsettings' );
function testimonial_defaultsettings() {
	$tmldefaultsettings = array(
		"testimonial_carousel_design" 		 	 			=> "1",
		"carousal_effect"									=> "none",
		"auto_play_carousel"								=> "true",
		"title_color"										=> "#000000",
		"description_color"									=> "#000000",
		"designation_color"									=> "#000000",
		"pagination11"										=> "false",
	);
	add_option( 'testimonial_settings', $tmldefaultsettings);
}

	//save settings
	if(isset($_POST['tml_setting_action'])){
		$tml_save_nonce_value = $_POST['security'];
		if(wp_verify_nonce( $tml_save_nonce_value, 'tml_save_nonce' )) {
			$testimonial_carousel_design 			= sanitize_text_field($_POST['testimonial_carousel_design']);
			$carousal_effect 						= sanitize_text_field($_POST['carousal_effect']);
			$auto_play_carousel 					= sanitize_text_field($_POST['auto_play_carousel']);
			$title_color 							= sanitize_text_field($_POST['title_color']);
			$description_color 						= sanitize_text_field($_POST['description_color']);
			$designation_color 						= sanitize_text_field($_POST['designation_color']);
			$pagination11 							= sanitize_text_field($_POST['pagination11']);
			
			$testimonial_settings = array(
				'testimonial_carousel_design' 		=> $testimonial_carousel_design,
				'carousal_effect' 		 			=> $carousal_effect,
				'auto_play_carousel' 		 		=> $auto_play_carousel,
				'title_color' 		 				=> $title_color,
				'description_color' 		 		=> $description_color,
				'designation_color' 		 		=> $designation_color,
				'pagination11' 		 				=> $pagination11,
			);
			update_option( 'testimonial_settings', $testimonial_settings);
		}
	} // end of save if	
// end of setting page fuction
?>
<script>
function TmlSaveSettings() {
	jQuery("#loading_icon").show();
	jQuery("#save_tmlsetting").hide();
	jQuery.ajax({
		dataType : 'html',
		type: 'POST',
		url : location.href,
		cache: false,
		data : jQuery('#testimonial_form_setting').serialize() + '&tml_setting_action=save_tmlsetting' + '&security=' + '<?php echo wp_create_nonce( "tml_save_nonce" ); ?>',
		complete : function() {  },
		success: function(data) {
			jQuery("#loading_icon").hide();
			jQuery("#save_tmlsetting").show();
		}
	});
}

// start pulse on page load
function pulseEff() {
   jQuery('#shortcode').fadeOut(600).fadeIn(600);
};
var Interval;
Interval = setInterval(pulseEff,1500);

// stop pulse
function pulseOff() {
	clearInterval(Interval);
}
// start pulse
function pulseStart() {
	Interval = setInterval(pulseEff,1500);
}

//range slider
var rangeSlider = function(){
  var slider = jQuery('.range-slider'),
	  range = jQuery('.range-slider__range'),
	  value = jQuery('.range-slider__value');
	
  slider.each(function(){

	value.each(function(){
	  var value = jQuery(this).prev().attr('value');
	  jQuery(this).html(value);
	});

	range.on('input', function(){
	  jQuery(this).next(value).html(this.value);
	});
  });
};
rangeSlider();	
</script>
