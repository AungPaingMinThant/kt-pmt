jQuery('.chosen-select').chosen();
	function deleteMarker(a){
				jQuery.ajax({
				type: "POST",
				url: 'settings.php',
				data: {MarkerDelete:a},
				cache: false,
				success: function (html)
				{
					  jQuery('#marker-'+a).append("<span style='color:green; margin-left:50px; float:right;'>Deleted Successfully</span>");
					 jQuery('#marker-'+a).fadeOut(400);
					 
					 if(a=='a'){
					 jQuery('#custom_marker').prop('disabled', false);
					 } else {
					 jQuery('#custom_marker_active').prop('disabled', false);
					 }
				}
			});
}

function restoreDefault(){
	
		$('#distance_set').val('mi');
		$('#language_set').val('en_EN');
		$('#init_zoom').val('11');
		$('#zoomhere_zoom').val('15');
		$('#geo_settings').val('1');
		$('#show_image_list').val('yes');
		$('#label_marker').val('1');
		$('#ssf_pagination').val('0');
		$('#default_location').val('New York, US');
		$('#mega_distance').val('30');
		$('#mega_google_api').val('');
		$('#mega_geocode_google_api').val('');
		$('#gdpr_privacy').val('');
		$('#style_map_color').val('');
		$('#style_top_bar_bg').val('');
		$('#style_top_bar_border').val('');
		$('#style_top_bar_font').val('');
		$('#style_results_bg').val('');
		$('#style_results_hl_bg').val('');
		$('#style_results_hover_bg').val('');
		$('#style_results_font').val('');
		$('#style_results_distance_font').val('');
		$('#style_distance_toggle_bg').val('');
		$('#style_contact_button_bg').val('');
		$('#style_contact_button_font').val('');
		$('#style_button_bg').val('');
		$('#style_button_font').val('');
		$('#style_list_number_bg').val('');
		$('#style_list_number_font').val('');
		$('#langset').val($('#language_set').val())
		document.f.submit();
	}