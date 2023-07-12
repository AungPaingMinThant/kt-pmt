<?php error_reporting(0);
// include Config File
include_once './includes/config.inc.php';
include_once './includes/validate.php';
// Authenticate user login
auth();

if(isset($_POST['MarkerDelete']))
{
	 $dir ='../images/icons/';
	 if($_POST['MarkerDelete']=='a')
	 {
		unlink($dir.'custom_marker.png');
		exit;
	 }
	 else if($_POST['MarkerDelete']=='b')
	 {
		unlink($dir.'custom_marker_active.png'); 
		exit;
	 }
}

if(isset($_POST['language_set'])){

/*.* custom marker function   *.*/   
if(!empty($_FILES)){
  custom_setting_marker();

}
	if (!is_writable('../includes/config.inc.php')) {
			$errors[] = 'Please ensure that includes/config.inc.php is writable';
	} else {
			
			
		$arr_config = array();
		// frontend config
		$handle = fopen("../includes/config.inc.php", "r");
		if ($handle) {
			while (($line = fgets($handle)) !== false) {
			
			
				if (strpos($line,"define('DEFAULT_LANGUAGE'") !== false) {
				   $line = "define('DEFAULT_LANGUAGE', '".$_POST['language_set']."');\n";
				} else if (strpos($line,"define('DEFAULT_DISTANCE'") !== false) {
				   $line = "define('DEFAULT_DISTANCE', '".$_POST['distance_set']."');\n";
				} else if (strpos($line,"define('INIT_ZOOM'") !== false) {
				    $line = "define('INIT_ZOOM','".$_POST['init_zoom']."');\n";  
				} else if (strpos($line,"define('ZOOMHERE_ZOOM'") !== false) {
				    $line = "define('ZOOMHERE_ZOOM','".$_POST['zoomhere_zoom']."');\n";
				} else if (strpos($line,"define('GEO_SETTINGS'") !== false) {
				    $line = "define('GEO_SETTINGS','".$_POST['geo_settings']."');\n";
				}
				else if (strpos($line,"define('SHOW_IMAGE_LIST'") !== false) {
				    $line = "define('SHOW_IMAGE_LIST','".$_POST['show_image_list']."');\n";
				}
				else if (strpos($line,"define('SHOW_MOBILE_FIELD'") !== false) {
				    $line = "define('SHOW_MOBILE_FIELD','".$_POST['show_mobile_field']."');\n";
				}
				else if (strpos($line,"define('LABEL_MARKER'") !== false) {
				    $line = "define('LABEL_MARKER','".$_POST['label_marker']."');\n";
				}else if (strpos($line,"define('SSF_PAGINATION'") !== false) {
				    $line = "define('SSF_PAGINATION','".$_POST['ssf_pagination']."');\n";
				}
				 else if (strpos($line,"define('DEFAULT_LOCATION'") !== false) {
					$line = "define('DEFAULT_LOCATION','".$_POST['default_location']."');\n";
				} else if (strpos($line,"define('MEGA_DISTANCE'") !== false) {
					$line = "define('MEGA_DISTANCE','".$_POST['mega_distance']."');\n";
				}
				 else if (strpos($line,"define('MEGA_GOOGLE_API'") !== false) {
					$line = "define('MEGA_GOOGLE_API','".trim($_POST['mega_google_api'])."');\n";
				} else if (strpos($line,"define('MEGA_GEOCODE_GOOGLE_API'") !== false) {
					$line = "define('MEGA_GEOCODE_GOOGLE_API','".trim($_POST['mega_geocode_google_api'])."');\n";
				} 
				 else if (strpos($line,"define('GOOGLE_MAP_REGION'") !== false) {
					$line = "define('GOOGLE_MAP_REGION','".$_POST['google_map_region']."');\n";
				} 
				 else if (strpos($line,"define('GOOGLE_MAP_LANGUAGE'") !== false) {
					$line = "define('GOOGLE_MAP_LANGUAGE','".$_POST['google_map_language']."');\n";
				} 
				 else if (strpos($line,"define('SCROLL_SETTING'") !== false) {
					$line = "define('SCROLL_SETTING','".$_POST['scroll_setting']."');\n";
				} 
				 else if (strpos($line,"define('TEL_FAX_LINK'") !== false) {
					$line = "define('TEL_FAX_LINK','".$_POST['tel_fax_link']."');\n";
				} 
				 else if (strpos($line,"define('NOTIFICATION_BAR'") !== false) {
					$line = "define('NOTIFICATION_BAR','".$_POST['notification_bar']."');\n";
				} else if (strpos($line,"define('GDPR'") !== false) {
					$line = "define('GDPR','".$_POST['gdpr']."');\n";
				} else if (strpos($line,"define('GDPR_PRIVACY'") !== false) {
					$line = "define('GDPR_PRIVACY','".$_POST['gdpr_privacy']."');\n";
				} 
				
				else if (strpos($line,"define('STYLE_MAP_COLOR'") !== false) {
					$line = "define('STYLE_MAP_COLOR','".$_POST['style_map_color']."');\n";
				} else if (strpos($line,"define('STYLE_TOP_BAR_BG'") !== false) {
					$line = "define('STYLE_TOP_BAR_BG','".$_POST['style_top_bar_bg']."');\n";
				} else if (strpos($line,"define('STYLE_TOP_BAR_BORDER'") !== false) {
					$line = "define('STYLE_TOP_BAR_BORDER','".$_POST['style_top_bar_border']."');\n";
				} else if (strpos($line,"define('STYLE_TOP_BAR_FONT'") !== false) {
					$line = "define('STYLE_TOP_BAR_FONT','".$_POST['style_top_bar_font']."');\n";
				}  else if (strpos($line,"define('STYLE_RESULTS_BG'") !== false) {
					$line = "define('STYLE_RESULTS_BG','".$_POST['style_results_bg']."');\n";
				}  else if (strpos($line,"define('STYLE_RESULTS_FONT'") !== false) {
					$line = "define('STYLE_RESULTS_FONT','".$_POST['style_results_font']."');\n";
				}  else if (strpos($line,"define('STYLE_RESULTS_HL_BG'") !== false) {
					$line = "define('STYLE_RESULTS_HL_BG','".$_POST['style_results_hl_bg']."');\n";
				}  else if (strpos($line,"define('STYLE_RESULTS_HOVER_BG'") !== false) {
					$line = "define('STYLE_RESULTS_HOVER_BG','".$_POST['style_results_hover_bg']."');\n";
				}  else if (strpos($line,"define('STYLE_RESULTS_DISTANCE_FONT'") !== false) {
					$line = "define('STYLE_RESULTS_DISTANCE_FONT','".$_POST['style_results_distance_font']."');\n";
				}  else if (strpos($line,"define('STYLE_DISTANCE_TOGGLE_BG'") !== false) {
					$line = "define('STYLE_DISTANCE_TOGGLE_BG','".$_POST['style_distance_toggle_bg']."');\n";
				}   else if (strpos($line,"define('STYLE_CONTACT_BUTTON_BG'") !== false) {
					$line = "define('STYLE_CONTACT_BUTTON_BG','".$_POST['style_contact_button_bg']."');\n";
				}   else if (strpos($line,"define('STYLE_CONTACT_BUTTON_FONT'") !== false) {
					$line = "define('STYLE_CONTACT_BUTTON_FONT','".$_POST['style_contact_button_font']."');\n";
				}   else if (strpos($line,"define('STYLE_BUTTON_BG'") !== false) {
					$line = "define('STYLE_BUTTON_BG','".$_POST['style_button_bg']."');\n";
				}   else if (strpos($line,"define('STYLE_BUTTON_FONT'") !== false) {
					$line = "define('STYLE_BUTTON_FONT','".$_POST['style_button_font']."');\n";
				}   else if (strpos($line,"define('STYLE_LIST_NUMBER_BG'") !== false) {
					$line = "define('STYLE_LIST_NUMBER_BG','".$_POST['style_list_number_bg']."');\n";
				}   else if (strpos($line,"define('STYLE_LIST_NUMBER_FONT'") !== false) {
					$line = "define('STYLE_LIST_NUMBER_FONT','".$_POST['style_list_number_font']."');\n";
				}  else if (strpos($line,"define('STYLE_MAP_CODE'") !== false) {
					$line = "define('STYLE_MAP_CODE','".$_POST['style_map_code']."');\n";
				}else if (strpos($line,"define('MEGA_GRID_VIEW'") !== false) {
					$line = "define('MEGA_GRID_VIEW','".$_POST['mega_grid_view']."');\n";
				}else if (strpos($line,"define('MOBILE_GESTURE'") !== false) {
					$line = "define('MOBILE_GESTURE','".$_POST['mobile_gesture']."');\n";
				}

				
					//print_r($line);
				$arr_config[] = $line;
			}

			fclose($handle);
		} else {
			// error opening the file.
			 $errors[] = 'Kindly set includes/config.inc.php to writable';
		}

		$conf_str = "";	
		for($i=0;$i<sizeof($arr_config);$i++){
		$conf_str.=$arr_config[$i];
		}
		
		$fp = fopen('../includes/config.inc.php', 'w');
		fwrite($fp, $conf_str);
		fclose($fp);
		
		
		//**.**backend entry code here**.**/ 				
		$arr_config_backend = array();
		// frontend config
		$handle = fopen("./includes/config.inc.php", "r");
		if ($handle) {
			while (($line = fgets($handle)) !== false) {					
				 if (strpos($line,"define('MEGA_GOOGLE_API_ADMIN'") !== false) {
					$line = "define('MEGA_GOOGLE_API_ADMIN','".trim($_POST['mega_google_api'])."');\n";
				} else if (strpos($line,"define('MEGA_GEOCODE_GOOGLE_API_ADMIN'") !== false) {
					$line = "define('MEGA_GEOCODE_GOOGLE_API_ADMIN','".trim($_POST['mega_geocode_google_api'])."');\n";
				} 
				$arr_config_backend[] = $line;
			}
			fclose($handle);
		} else {
			// error opening the file.
			 $errors[] = 'Kindly set includes/config.inc.php to writable';
		}

		$conf_str = "";	
		for($i=0;$i<sizeof($arr_config_backend);$i++){
		$conf_str.=$arr_config_backend[$i];
		}
		
		$fp = fopen('./includes/config.inc.php', 'w');
		fwrite($fp, $conf_str);
		fclose($fp);
		
		//**.**backend entry code end here**.**/ 
			
		$_SESSION['notification'] = array('type'=>'good','msg'=>'Settings successfully saved.');
		
	}

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title><?php echo $lang['STORE_FINDER']; ?> - <?php echo $lang['ADMIN_ADD_USER']; ?></title>
	<?php include 'header.php'; ?>
	

    <link href="css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
	

    <script src="js/bootstrap-colorpicker.js"></script>
    <script src="js/docs.js"></script>
</head>
<body id="add">
	<div id="wrapper">
		<div id="header">
			
			<?php include 'nav.php'; ?>
		</div>

		<div id="main">
			
			<?php echo notification(); ?>
			<?php if(isset($errors)): ?>
			<div class="alert alert-block alert-error fade in">
			<ul>
				<?php foreach($errors as $k=>$v): ?>
				<li><?php echo $v; ?></li>
				<?php endforeach; ?>
			</ul>
			</div>
			<?php endif; ?>


			<?php include_once '../includes/config.inc.php'; ?>
			<?php include_once './includes/region.php'; ?>
			<form name="f" method='post' action='' id='form_settings' enctype="multipart/form-data" onsubmit="$('#langset').val($('#language_set').val())">
			<input type="hidden" id="langset" name="langset" value="en_US" />
				<fieldset>
					<legend>General Settings</legend>
					<div class='input mega_layout'>
					<label><b>Layout:</b>
						<img class="ssf_layout_settings" src="./images/ssf-bottom.png">
						<span class="mega_grid_view"><input name="mega_grid_view" type="radio" value="1" <?php if(MEGA_GRID_VIEW=="1") { ?> checked <?php } ?>>&nbsp;Standard</span>
						<img class="ssf_layout_settings" src="./images/ssf-left.png">
						<span class="mega_grid_view"><input name="mega_grid_view" type="radio" value="2" <?php if(MEGA_GRID_VIEW=="2") { ?> checked <?php } ?>>&nbsp;Left</span>
						<img class="ssf_layout_settings" src="./images/ssf-right.png">
						<span class="mega_grid_view"><input name="mega_grid_view" type="radio" value="3" <?php if(MEGA_GRID_VIEW=="3") { ?> checked <?php } ?>>&nbsp;Right</span>
				</label>		
		    </div>
					
					
					<div class='input'>
						<label>Default Language: </label>
						<select id="language_set" name="language_set">
						<option value="en_US" <?php if(DEFAULT_LANGUAGE=="en_US") { ?>selected<?php } ?>>English</option>
						<option value="sv_SE" <?php if(DEFAULT_LANGUAGE=="sv_SE") { ?>selected<?php } ?>>Swedish</option>
						<option value="es_ES" <?php if(DEFAULT_LANGUAGE=="es_ES") { ?>selected<?php } ?>>Spanish</option>
						<option value="fr_FR" <?php if(DEFAULT_LANGUAGE=="fr_FR") { ?>selected<?php } ?>>French</option>
						<option value="de_DE" <?php if(DEFAULT_LANGUAGE=="de_DE") { ?>selected<?php } ?>>German</option>
						<option value="cn_CN" <?php if(DEFAULT_LANGUAGE=="cn_CN") { ?>selected<?php } ?>>Chinese</option>
						<option value="kr_KR" <?php if(DEFAULT_LANGUAGE=="kr_KR") { ?>selected<?php } ?>>Korean</option>
						<option value="jp_JP" <?php if(DEFAULT_LANGUAGE=="jp_JP") { ?>selected<?php } ?>>Japanese</option>
						<option value="ar_AR" <?php if(DEFAULT_LANGUAGE=="ar_AR") { ?>selected<?php } ?>>Arabic</option>
						</select>
					</div>
					<div class='input'>
						<label>Default Distance: </label>
							<select id="distance_set" name="distance_set">
							<option value="mi" <?php if(DEFAULT_DISTANCE=="mi") { ?>selected<?php } ?>>Miles (mi)</option>
							<option value="km" <?php if(DEFAULT_DISTANCE=="km") { ?>selected<?php } ?>>Kilometers (km)</option>
							</select>
					</div>
					<div class='input'>
						<label>Init Zoom:</label>
						<select id="init_zoom" name="init_zoom">
							<option value="0" <?php if(INIT_ZOOM=="0") { ?>selected<?php } ?>>0</option>
							<option value="1" <?php if(INIT_ZOOM=="1") { ?>selected<?php } ?>>1</option>
							<option value="2" <?php if(INIT_ZOOM=="2") { ?>selected<?php } ?>>2</option>
							<option value="3" <?php if(INIT_ZOOM=="3") { ?>selected<?php } ?>>3</option>
							<option value="4" <?php if(INIT_ZOOM=="4") { ?>selected<?php } ?>>4</option>
							<option value="5" <?php if(INIT_ZOOM=="5") { ?>selected<?php } ?>>5</option>
							<option value="6" <?php if(INIT_ZOOM=="6") { ?>selected<?php } ?>>6</option>
							<option value="7" <?php if(INIT_ZOOM=="7") { ?>selected<?php } ?>>7</option>
							<option value="8" <?php if(INIT_ZOOM=="8") { ?>selected<?php } ?>>8</option>
							<option value="9" <?php if(INIT_ZOOM=="9") { ?>selected<?php } ?>>9</option>
							<option value="10" <?php if(INIT_ZOOM=="10") { ?>selected<?php } ?>>10</option>
							<option value="11" <?php if(INIT_ZOOM=="11") { ?>selected<?php } ?>>11</option>
							<option value="12" <?php if(INIT_ZOOM=="12") { ?>selected<?php } ?>>12</option>
							<option value="13" <?php if(INIT_ZOOM=="13") { ?>selected<?php } ?>>13</option>
							<option value="14" <?php if(INIT_ZOOM=="14") { ?>selected<?php } ?>>14</option>
							<option value="15" <?php if(INIT_ZOOM=="15") { ?>selected<?php } ?>>15</option>
							<option value="16" <?php if(INIT_ZOOM=="16") { ?>selected<?php } ?>>16</option>
							<option value="17" <?php if(INIT_ZOOM=="17") { ?>selected<?php } ?>>17</option>
							<option value="18" <?php if(INIT_ZOOM=="18") { ?>selected<?php } ?>>18</option>
							<option value="19" <?php if(INIT_ZOOM=="19") { ?>selected<?php } ?>>19</option>
							</select>
					</div>
					<div class='input'>
						<label>Zoom Here:</label>
						<select id="zoomhere_zoom" name="zoomhere_zoom">
							<option value="0" <?php if(ZOOMHERE_ZOOM=="0") { ?>selected<?php } ?>>0</option>
							<option value="1" <?php if(ZOOMHERE_ZOOM=="1") { ?>selected<?php } ?>>1</option>
							<option value="2" <?php if(ZOOMHERE_ZOOM=="2") { ?>selected<?php } ?>>2</option>
							<option value="3" <?php if(ZOOMHERE_ZOOM=="3") { ?>selected<?php } ?>>3</option>
							<option value="4" <?php if(ZOOMHERE_ZOOM=="4") { ?>selected<?php } ?>>4</option>
							<option value="5" <?php if(ZOOMHERE_ZOOM=="5") { ?>selected<?php } ?>>5</option>
							<option value="6" <?php if(ZOOMHERE_ZOOM=="6") { ?>selected<?php } ?>>6</option>
							<option value="7" <?php if(ZOOMHERE_ZOOM=="7") { ?>selected<?php } ?>>7</option>
							<option value="8" <?php if(ZOOMHERE_ZOOM=="8") { ?>selected<?php } ?>>8</option>
							<option value="9" <?php if(ZOOMHERE_ZOOM=="9") { ?>selected<?php } ?>>9</option>
							<option value="10" <?php if(ZOOMHERE_ZOOM=="10") { ?>selected<?php } ?>>10</option>
							<option value="11" <?php if(ZOOMHERE_ZOOM=="11") { ?>selected<?php } ?>>11</option>
							<option value="12" <?php if(ZOOMHERE_ZOOM=="12") { ?>selected<?php } ?>>12</option>
							<option value="13" <?php if(ZOOMHERE_ZOOM=="13") { ?>selected<?php } ?>>13</option>
							<option value="14" <?php if(ZOOMHERE_ZOOM=="14") { ?>selected<?php } ?>>14</option>
							<option value="15" <?php if(ZOOMHERE_ZOOM=="15") { ?>selected<?php } ?>>15</option>
							<option value="16" <?php if(ZOOMHERE_ZOOM=="16") { ?>selected<?php } ?>>16</option>
							<option value="17" <?php if(ZOOMHERE_ZOOM=="17") { ?>selected<?php } ?>>17</option>
							<option value="18" <?php if(ZOOMHERE_ZOOM=="18") { ?>selected<?php } ?>>18</option>
							<option value="19" <?php if(ZOOMHERE_ZOOM=="19") { ?>selected<?php } ?>>19</option>
							</select>
					</div>
					<div class='input'>
						<label>Geo IP Turned On:</label>
						<select id="geo_settings" name="geo_settings">
							<option value="0" <?php if(GEO_SETTINGS=="0") { ?>selected<?php } ?>>No</option>
							<option value="1" <?php if(GEO_SETTINGS=="1") { ?>selected<?php } ?>>Yes</option>
							<option value="2" <?php if(GEO_SETTINGS=="2") { ?>selected<?php } ?>>Show All</option>
							</select>
					</div>
					<div class='input'>
						<label>Default Initial Location:</label>
						<input type='text' name='default_location' id='default_location' value='<?php echo DEFAULT_LOCATION; ?>' /><small> Won't be shown on map if Geo IP is turned on.</small>
					</div>
                    
                    <div class='input'>
                    <label>Result List Header</label>
                    <select id="show_image_list" name="show_image_list">
							<option value="yes" <?php if(SHOW_IMAGE_LIST=="yes") { ?>selected<?php } ?>>Yes</option>
							<option value="no" <?php if(SHOW_IMAGE_LIST=="no") { ?>selected<?php } ?>>No</option>
							<option value="showboth" <?php if(SHOW_IMAGE_LIST=="showboth") { ?>selected<?php } ?>>Image/Video</option>
					</select>
                    </div>
					
					<div class='input'>
                    <label>Mobile info</label>
                    <select id="show_mobile_field" name="show_mobile_field">
							<option <?php if(SHOW_MOBILE_FIELD=="true") { ?>selected<?php } ?> value="true">Show less details</option>
							<option <?php if(SHOW_MOBILE_FIELD=="false") { ?>selected<?php } ?> value="false">Show more details</option>
					</select>
                    </div>
					
                    <div class='input'>
						<label>Custom Marker:</label>
			<input type='file' name='custom_marker'  id='custom_marker' <?php if(file_exists("../images/icons/custom_marker.png")){ echo 'disabled="disabled"'; } ?> /> 
                        
                        <?php 
						if(file_exists("../images/icons/custom_marker.png")) {
 ?>	     						
 			<div id="marker-a" class="map-marker-admin"><img src="../images/icons/custom_marker.png?t=<?php echo time(); ?>" width="38px">
	       <input type="button" onclick="deleteMarker('a');" class="btn btn-danger"  value="Delete"></div>
	<?php	} ?>
					</div>
                    <div class='input'>
						<label>Custom Marker Active:</label>
						<input type='file' name='custom_marker_active' id='custom_marker_active' <?php if(file_exists("../images/icons/custom_marker_active.png")){ echo 'disabled="disabled"'; } ?> /> 
                        <?php 
						if(file_exists("../images/icons/custom_marker_active.png")) {
 ?>	     						
 			<div id="marker-b" class="map-marker-admin"><img src="../images/icons/custom_marker_active.png?t=<?php echo time(); ?>" width="38px">
	       <input type="button" onclick="deleteMarker('b');" class="btn btn-danger"  value="Delete"></div>
	<?php	} ?>
					</div>
					
			<div class='input'>
						<label>Labeled marker:</label>
						<select id="label_marker" name="label_marker">
							<option value="1" <?php if(LABEL_MARKER=="1") { ?>selected<?php } ?>>Yes</option>
							<option value="0" <?php if(LABEL_MARKER=="0") { ?>selected<?php } ?>>No</option>
						</select>
			</div>		
			
			<div class='input'>
						<label>Pagination:</label>
						<select id="ssf_pagination" name="ssf_pagination">
							<option value="0" <?php if(SSF_PAGINATION=="0") { ?>selected<?php } ?>>Off</option>
							<option value="9" <?php if(SSF_PAGINATION=="9") { ?>selected<?php } ?>>9</option>
							<option value="15" <?php if(SSF_PAGINATION=="15") { ?>selected<?php } ?>>15</option>
							<option value="27" <?php if(SSF_PAGINATION=="27") { ?>selected<?php } ?>>27</option>
							<option value="54" <?php if(SSF_PAGINATION=="54") { ?>selected<?php } ?>>54</option>
							<option value="90" <?php if(SSF_PAGINATION=="90") { ?>selected<?php } ?>>90</option>
						</select>
			</div>		
			
			 <div class='input'>
                    <label>Distance (km)</label>
                    <input type='text' name='mega_distance' id='mega_distance' value='<?php echo MEGA_DISTANCE; ?>' />
             </div>
			 
			 <div class='input'>
				<label>Scroll settings:</label>
				<select id="scroll_setting" name="scroll_setting">
					<option value="true"  <?php if(SCROLL_SETTING=="true") { ?>selected<?php } ?>>Auto (Default)</option>
					<option value="top"   <?php if(SCROLL_SETTING=="top") { ?>selected<?php } ?>>Top page</option>
					<option value="false" <?php if(SCROLL_SETTING=="false") { ?>selected<?php } ?>>None</option>
				</select>
			</div>
			 
			 <div class='input'>
                    <label>Google API key</label>
                    <input type='text' name='mega_google_api' id='mega_google_api' value='<?php echo MEGA_GOOGLE_API; ?>' /> (Required <a href="http://superstorefinder.net/support/knowledgebase/google-maps-api-keys-usage-and-limits/" target="new">more details</a>)
										
					</div>
					
					<div class='input'>
                    <label>Google Geocoding key</label>
                    <input type='text' name='mega_geocode_google_api' id='mega_geocode_google_api' value='<?php echo MEGA_GEOCODE_GOOGLE_API; ?>' /> (Required <a href="http://superstorefinder.net/support/knowledgebase/create-google-geocoding-key/" target="new">more details</a>)
										
					</div>
			 
			<?php	
    			$regions = super_store_region_list();
				$region_list='';
				foreach ($regions as $region)  {
						$selected2=(GOOGLE_MAP_REGION==$region['value'])? " selected " : "";
						$region_list .="<option value='".$region['value']."' ".$selected2.">".$region['name']."</option>";
				} ?>
			 
			<div class='input'>
				<label>Google Map Region:</label>
				<select id="google_map_region" name="google_map_region" class="chosen-select">
					<?php print $region_list; ?>
				</select>
			</div>	

			<?php	
    			$map_language = super_store_language_list();
				$language_list='';
				foreach ($map_language as $language)  {
						$selected2=(GOOGLE_MAP_LANGUAGE==$language['value'])? " selected " : "";
						$language_list .="<option value='".$language['value']."' ".$selected2.">".$language['name']."</option>";
				} ?>
			 
			<div class='input'>
				<label>Google Map Language:</label>
				<select id="google_map_language" name="google_map_language" class="chosen-select">
					<?php print $language_list; ?>
				</select>
			</div>	
            			 
			<div class='input'>
				<label>Notification bar:</label>
				<select id="notification_bar" name="notification_bar">
					<option value="true" <?php if(NOTIFICATION_BAR=="true") { ?>selected<?php } ?>>Yes</option>
					<option value="false" <?php if(NOTIFICATION_BAR=="false") { ?>selected<?php } ?>>No</option>
				</select>
			</div>	
			
			<div class='input'>
				<label>Tel/Fax Link:</label>
				<select id="tel_fax_link" name="tel_fax_link">
				    <option value="false" <?php if(TEL_FAX_LINK=="false") { ?>selected<?php } ?>>No</option>
					<option value="true" <?php if(TEL_FAX_LINK=="true") { ?>selected<?php } ?>>Yes</option>					
				</select>
			</div>
			
			<div class='input'>
				<label>Mobile Gesture:</label>
				<select id="mobile_gesture" name="mobile_gesture">
					<option value="true" <?php if(MOBILE_GESTURE=="true") { ?>selected<?php } ?>>Yes</option>
					<option value="false" <?php if(MOBILE_GESTURE=="false") { ?>selected<?php } ?>>No</option>
				</select>
			</div>
			
			
			<div class='input'>
				<label>GDPR:</label>
				<select id="gdpr" name="gdpr">
					<option value="true" <?php if(GDPR=="true") { ?>selected<?php } ?>>Yes</option>
					<option value="false" <?php if(GDPR=="false") { ?>selected<?php } ?>>No</option>
				</select>
			</div>
			
				 <div class='input'>
                    <label>GDPR Privacy Link</label>
                    <input type='text' name='gdpr_privacy' id='gdpr_privacy' value='<?php echo GDPR_PRIVACY; ?>' />
             </div>
			
					<legend>Styles Settings </legend>
					<i>* Leave blank for default color.</i>
					<br><br>
					<div class='input'>
						<label>Map Hue Color:</label>
						<input id="style_map_color" name="style_map_color" type="text" class="form-control demo demo-1 demo-auto colorpicker-element" value="<?php echo STYLE_MAP_COLOR; ?>"> 
					</div>
					
					<div class='input'>
						<label>Map Custom Code:</label>
						<input id="style_map_code" name="style_map_code" type="text" value='<?php echo stripslashes(STYLE_MAP_CODE); ?>'>
						<small>Leave blank to set as default. Refer documentation guide <a href='http://superstorefinder.net/support/knowledgebase/can-i-use-custom-google-map-styles-code/' target='new'>here</a></small>
					</div>
					
					
					<div class='input'>
						<label>Top Bar Background:</label>
						<input id="style_top_bar_bg" name="style_top_bar_bg" type="text" class="form-control demo demo-1 demo-auto colorpicker-element" value="<?php echo STYLE_TOP_BAR_BG; ?>"> 
					</div>
					
					<div class='input'>
						<label>Top Bar Font:</label>
						<input id="style_top_bar_font" name="style_top_bar_font" type="text" class="form-control demo demo-1 demo-auto colorpicker-element" value="<?php echo STYLE_TOP_BAR_FONT; ?>"> 
					</div>
					
					
					<div class='input'>
						<label>Top Bar Border:</label>
						<input id="style_top_bar_border" name="style_top_bar_border" type="text" class="form-control demo demo-1 demo-auto colorpicker-element" value="<?php echo STYLE_TOP_BAR_BORDER; ?>"> 
					</div>
					
					<div class='input'>
						<label>Results Background:</label>
						<input id="style_results_bg" name="style_results_bg" type="text" class="form-control demo demo-1 demo-auto colorpicker-element" value="<?php echo STYLE_RESULTS_BG; ?>"> 
					</div>
					
					<div class='input'>
						<label>Results Highlighted Background:</label>
						<input id="style_results_hl_bg" name="style_results_hl_bg" type="text" class="form-control demo demo-1 demo-auto colorpicker-element" value="<?php echo STYLE_RESULTS_HL_BG; ?>"> 
					</div>
					
					<div class='input'>
						<label>Results Hover Background:</label>
						<input id="style_results_hover_bg" name="style_results_hover_bg" type="text" class="form-control demo demo-1 demo-auto colorpicker-element" value="<?php echo STYLE_RESULTS_HOVER_BG; ?>"> 
					</div>
					
					<div class='input'>
						<label>Results Font:</label>
						<input id="style_results_font" name="style_results_font" type="text" class="form-control demo demo-1 demo-auto colorpicker-element" value="<?php echo STYLE_RESULTS_FONT; ?>"> 
					</div>
					
					<div class='input'>
						<label>Results Distance Font:</label>
						<input id="style_results_distance_font" name="style_results_distance_font" type="text" class="form-control demo demo-1 demo-auto colorpicker-element" value="<?php echo STYLE_RESULTS_DISTANCE_FONT; ?>"> 
					</div>
					
					<div class='input'>
						<label>Distance Toggle Background:</label>
						<input id="style_distance_toggle_bg" name="style_distance_toggle_bg" type="text" class="form-control demo demo-1 demo-auto colorpicker-element" value="<?php echo STYLE_DISTANCE_TOGGLE_BG; ?>"> 
					</div>
					
					<div class='input'>
						<label>Contact Button Background:</label>
						<input id="style_contact_button_bg" name="style_contact_button_bg" type="text" class="form-control demo demo-1 demo-auto colorpicker-element" value="<?php echo STYLE_CONTACT_BUTTON_BG; ?>"> 
					</div>
					
					<div class='input'>
						<label>Contact Button Font:</label>
						<input id="style_contact_button_font" name="style_contact_button_font" type="text" class="form-control demo demo-1 demo-auto colorpicker-element" value="<?php echo STYLE_CONTACT_BUTTON_FONT; ?>"> 
					</div>
					
					<div class='input'>
						<label>Buttons Background:</label>
						<input id="style_button_bg" name="style_button_bg" type="text" class="form-control demo demo-1 demo-auto colorpicker-element" value="<?php echo STYLE_BUTTON_BG; ?>"> 
					</div>
					
					<div class='input'>
						<label>Buttons Font:</label>
						<input id="style_button_font" name="style_button_font" type="text" class="form-control demo demo-1 demo-auto colorpicker-element" value="<?php echo STYLE_BUTTON_FONT; ?>"> 
					</div>
					
					<div class='input'>
						<label>Number List Background:</label>
						<input id="style_list_number_bg" name="style_list_number_bg" type="text" class="form-control demo demo-1 demo-auto colorpicker-element" value="<?php echo STYLE_LIST_NUMBER_BG; ?>"> 
					</div>
					
					<div class='input'>
						<label>Number List Font:</label>
						<input id="style_list_number_font" name="style_list_number_font" type="text" class="form-control demo demo-1 demo-auto colorpicker-element" value="<?php echo STYLE_LIST_NUMBER_FONT; ?>"> 
					</div>
			
					
					
					
					<div class='input buttons'>
						<button type='button' class="btn" name='default' id='default' onclick="restoreDefault()">Restore Default Settings</button> <button type='submit' class="btn" name='save' id='save'><?php echo $lang['ADMIN_SAVE']; ?></button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
<?php include '../themes/footer.inc.php'; ?>
<link rel="stylesheet" type="text/css" href="js/chosen/chosen.min.css">
<script type="text/javascript" src="js/chosen/chosen.jquery.js"></script>
<script type="text/javascript" src="js/chosen/chosen.proto.min.js"></script>
<script type="text/javascript" src="js/settings-script.js"></script>
</body>
</html>