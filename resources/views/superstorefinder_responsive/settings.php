<script>
var default_distance = '<?php echo DEFAULT_DISTANCE; ?>';
var init_zoom = '<?php echo INIT_ZOOM; ?>';
var zoomhere_zoom = '<?php echo ZOOMHERE_ZOOM; ?>';
var ssf_cont_us_name = '<?php echo $lang['ADMIN_NAME']; ?>';
var ssf_cont_us_email = '<?php echo $lang['EMAIL']; ?>';
var ssf_msg_sucess = '<?php echo $lang['STORE_MSG_SEND_SCS']; ?>';
var ssf_cont_us_msg = '<?php echo $lang['POPUP_MESSAGE']; ?>';
var ssf_show_image_list='<?php echo SHOW_IMAGE_LIST; ?>';
var labeled_marker='<?php echo LABEL_MARKER; ?>';
var ssf_pagination='<?php echo SSF_PAGINATION; ?>';
var ssf_next_label='<?php echo $lang['NEXT_LABEL']; ?>';
var ssf_prev_label='<?php echo $lang['PREV_LABEL']; ?>';
var ssf_mega_distance=<?php echo MEGA_DISTANCE; ?>;
var ssf_google_api='<?php echo MEGA_GOOGLE_API; ?>';

<?php if(isset($_REQUEST['lat']) && $_REQUEST['lat']!='' && isset($_REQUEST['lng']) && $_REQUEST['lng']!='') { ?>
var geo_settings = '0';
var default_location = '<?php echo $_REQUEST['lat']; ?>, <?php echo $_REQUEST['lng']; ?>';
<?php } else if(isset($_REQUEST['location']) && $_REQUEST['location']!='') { ?>
var geo_settings = '0';
var default_location = '<?php echo $_REQUEST['location']; ?>';
<?php } else if(isset($_REQUEST['boxsearch']) && $_REQUEST['boxsearch']!='') { ?>
var geo_settings = '0';
var default_location = '<?php echo $_REQUEST['boxsearch']; ?>';
<?php } else { ?>
var geo_settings = '<?php echo GEO_SETTINGS; ?>';
var default_location = '<?php echo DEFAULT_LOCATION; ?>';
<?php } ?>
<?php 
$defaultcats=''; 
 if(isset($_REQUEST['category']) && $_REQUEST['category']!='') { 
	    $defaultCategory = $_REQUEST['category'];
		$defaultcats='cat'.$defaultCategory;
	}else{
		$defaultcats='';
	}
?>
var default_category = '<?php echo $defaultcats; ?>';
<?php
if(GOOGLE_MAP_REGION=='World'){
$google_map_region='US';
$defulat_map_region='true';
}else{
$google_map_region=GOOGLE_MAP_REGION;
$defulat_map_region='false';
}
?>
var mega_lr_layout='<?php echo MEGA_GRID_VIEW; ?>';
var mega_ext_url_label='<?php echo addslashes($lang['SSF_EXT_URL_LABEL']); ?>';
var mega_mobile_gesture='<?php echo MOBILE_GESTURE; ?>';
var scroll_setting='<?php echo SCROLL_SETTING; ?>';
var ssf_m_rgn='<?php echo $google_map_region; ?>';
var ssf_m_lang='<?php echo GOOGLE_MAP_LANGUAGE; ?>';
var ssf_tel_fax_link='<?php echo TEL_FAX_LINK; ?>';
var ssf_defualt_region='<?php echo $defulat_map_region; ?>';
<?php if(MEGA_GRID_VIEW=='1'){ ?>
	var scroll_to_top=200;
<?php }else{ ?>
	var scroll_to_top=100;
<?php } ?>


var style_map_color = '<?php echo STYLE_MAP_COLOR; ?>';

var SSF_GET_DIRECTION = '<?php echo addslashes($lang['SSF_GET_DIRECTION']); ?>';

var SSF_N1 = '<?php echo addslashes($lang['SSF_N1']); ?>';

var SSF_N2 = '<?php echo addslashes($lang['SSF_N2']); ?>';
var SSF_N3 = '<?php echo addslashes($lang['SSF_N3']); ?>';
var SSF_N4 = '<?php echo addslashes($lang['SSF_N4']); ?>';
var SSF_N5 = '<?php echo addslashes($lang['SSF_N5']); ?>';
var SSF_N6 = '<?php echo addslashes($lang['SSF_N6']); ?>';
var SSF_N7 = '<?php echo addslashes($lang['SSF_N7']); ?>';
var SSF_N8 = '<?php echo addslashes($lang['SSF_N8']); ?>';
var SSF_N9 = '<?php echo addslashes($lang['SSF_N9']); ?>';
var SSF_N10 = '<?php echo addslashes($lang['SSF_N10']); ?>';
var SSF_N11 = '<?php echo addslashes($lang['SSF_N11']); ?>';
var SSF_N12 = '<?php echo addslashes($lang['SSF_N12']); ?>';
var SSF_N13 = '<?php echo addslashes($lang['SSF_N13']); ?>';
var SSF_N14 = '<?php echo addslashes($lang['SSF_N14']); ?>';
var SSF_N15 = '<?php echo addslashes($lang['SSF_N15']); ?>';
var SSF_N16 = '<?php echo addslashes($lang['SSF_N16']); ?>';
var SSF_N17 = '<?php echo addslashes($lang['SSF_N17']); ?>';

var ssf_map_code;
<?php
if(STYLE_MAP_CODE!=""){
 echo "\n\n
 var ssf_map_code=".stripslashes(STYLE_MAP_CODE).";\n\n";
}
?>
var ssf_custom_marker;
<?php 
if(file_exists(ROOT.'images/icons/custom_marker.png')) { ?>
	ssf_custom_marker='<?php echo "custom_marker.png"; ?>'; 
<?php } else { ?>
	ssf_custom_marker= '<?php echo "map-pin.png"; ?>';
<?php } ?>
var ssf_active_marker;
<?php 
if(file_exists(ROOT.'images/icons/custom_marker_active.png')) { ?>
	ssf_active_marker='<?php echo "custom_marker_active.png"; ?>'; 
<?php } else { ?>
	ssf_active_marker='<?php echo "map-pin-active.png"; ?>'; 
<?php } ?>
</script>

<style>
img {
    max-width: none !important;
}

<?php 
if(NOTIFICATION_BAR=='false'){ ?>
	#storeLocator__mapStatus{
	 display:none !important;
	}
<?php } ?>

#clinic-finder form#clinic-finder-form {
<?php if(STYLE_TOP_BAR_BG!=""){ ?>
background-color: <?php echo STYLE_TOP_BAR_BG; ?> !important;
background-image: none !important;
<?php } ?>

<?php if(STYLE_TOP_BAR_BORDER!=""){ ?>
border: 1px solid <?php echo STYLE_TOP_BAR_BORDER; ?> !important;
<?php } ?>
}

<?php 
//megatheme
if(STYLE_TOP_BAR_BG!=""){ ?>
.panel {
  background-color: <?php echo STYLE_TOP_BAR_BG; ?> !important;
  border: 0 solid #ddd;
}

.store-locator__filter-toggler-cell {
background-color: <?php echo STYLE_TOP_BAR_BG; ?>  !important;
}

<?php } ?>

<?php if(STYLE_TOP_BAR_FONT!=""){ ?>
#clinic-finder form#clinic-finder-form label {
color: <?php echo STYLE_TOP_BAR_FONT; ?> !important;
}

.filter__row {
  color: <?php echo STYLE_TOP_BAR_FONT; ?> !important;
}

.filter__items-counter {
  color: <?php echo STYLE_TOP_BAR_FONT; ?> !important;
}

label {
  color: <?php echo STYLE_TOP_BAR_FONT; ?> !important;
}
<?php } ?>



<?php if(STYLE_RESULTS_BG!=""){ ?>
#clinic-finder {
background-color: <?php echo STYLE_RESULTS_BG; ?> !important;
}

.store-locator__infobox {
background-color: <?php echo STYLE_RESULTS_BG; ?> !important;
}
<?php } ?>

<?php if(STYLE_RESULTS_HL_BG!=""){ ?>
#results ol li.active {
background-color:  <?php echo STYLE_RESULTS_HL_BG; ?> !important;
}


.store-locator__infobox.is-active,
.store-locator__infobox:hover {
    background-color: <?php echo STYLE_RESULTS_HL_BG; ?> !important;
}

<?php } ?>

<?php if(STYLE_RESULTS_FONT!=""){ ?>
#clinic-finder #results ol li {
color: <?php echo STYLE_RESULTS_FONT; ?> !important; 
}

.help-block, .help-inline {
color: <?php echo STYLE_RESULTS_FONT; ?> !important;
}

#form_new_store{
color: <?php echo STYLE_RESULTS_FONT; ?> !important;
}

.store-locator__infobox {
color: <?php echo STYLE_RESULTS_FONT; ?> !important;
}
<?php } ?>

<?php if(STYLE_RESULTS_DISTANCE_FONT!=""){ ?>
#clinic-finder #results ol li div.distance {
color: <?php echo STYLE_RESULTS_DISTANCE_FONT; ?>  !important; 
}
<?php } ?>


<?php if(STYLE_DISTANCE_TOGGLE_BG!=""){ ?>
#clinic-finder .distance-units {
background-color: <?php echo STYLE_DISTANCE_TOGGLE_BG; ?>  !important;
background-image: none !important;
}
<?php } ?>


#clinic-finder .blue-button {
<?php if(STYLE_CONTACT_BUTTON_BG!=""){ ?>
background-image: -webkit-gradient(linear, 0% 0%, 0% 90%, from(<?php echo STYLE_CONTACT_BUTTON_BG; ?>  ), to(<?php echo STYLE_CONTACT_BUTTON_BG; ?>  )) !important;
background-image: -moz-linear-gradient(<?php echo STYLE_CONTACT_BUTTON_BG; ?>   0%, <?php echo STYLE_CONTACT_BUTTON_BG; ?>   90%) !important;
<?php } ?>

<?php if(STYLE_CONTACT_BUTTON_FONT!=""){ ?>
color: <?php echo STYLE_CONTACT_BUTTON_FONT; ?> !important; 
<?php } ?>
}

<?php if(STYLE_CONTACT_BUTTON_BG!=""){ ?>
.store-locator__infobox.store-locator__infobox--main {
    background-color: <?php echo STYLE_CONTACT_BUTTON_BG; ?> !important; 

}

.store-locator__infobox.is-active .infobox__marker {
 background-color: $style_contact_button_bg !important;
 color: #fff !important;
   border: 3px solid <?php echo STYLE_CONTACT_BUTTON_BG; ?> !important;
 }

.store-locator-map .store-locator__infobox:before {
        content: '';
        border: 12px solid transparent;
        border-left: 0;
        border-right-color: <?php echo STYLE_CONTACT_BUTTON_BG; ?> !important;
 }
<?php } ?>

<?php if(STYLE_CONTACT_BUTTON_FONT!=""){ ?>
.store-locator__infobox.store-locator__infobox--main {
    color: <?php echo STYLE_CONTACT_BUTTON_FONT; ?> !important; 

}
<?php } ?>


<?php if(STYLE_LIST_NUMBER_BG!=""){ ?>
#clinic-finder #results ol li {

background-image: url('') !important;

}


#clinic-finder #results ol li span.number {
background: <?php echo STYLE_LIST_NUMBER_BG; ?> !important;
font-size: 14px;
display: block;
position: absolute;
top: 10px;
left: 6px!important;

width: 28px;
padding: 4px 0px;
text-align: center;
background: #333;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
}



.infobox__marker {

  background-color: <?php echo STYLE_LIST_NUMBER_BG; ?> !important;

}
<?php } ?>

<?php if(STYLE_LIST_NUMBER_FONT!=""){ ?>
#clinic-finder #results ol li span.number {

color: <?php echo STYLE_LIST_NUMBER_FONT; ?> !important;

}

.infobox__marker {

   border: 3px solid <?php echo STYLE_LIST_NUMBER_FONT; ?> !important;

}
<?php } ?>


<?php if(STYLE_BUTTON_BG!=""){ ?>

.btn-primary {
padding: 10px 10px;

text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25) !important;
background-color: <?php echo STYLE_BUTTON_BG; ?> !important;
background-image: -moz-linear-gradient(top, <?php echo STYLE_BUTTON_BG; ?>, <?php echo STYLE_BUTTON_BG; ?>) !important;
background-image: -webkit-gradient(linear, 0 0, 0 100%, from(<?php echo STYLE_BUTTON_BG; ?>), to(<?php echo STYLE_BUTTON_BG; ?>))  !important;
background-image: -webkit-linear-gradient(top, <?php echo STYLE_BUTTON_BG; ?>, <?php echo STYLE_BUTTON_BG; ?>)  !important;
background-image: -o-linear-gradient(top, <?php echo STYLE_BUTTON_BG; ?>, <?php echo STYLE_BUTTON_BG; ?>)  !important;
background-image: linear-gradient(to bottom, <?php echo STYLE_BUTTON_BG; ?>, <?php echo STYLE_BUTTON_BG; ?>)  !important;
background-repeat: repeat-x  !important;
border-color: #E76804 #E76804 #E76804  !important;
border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25)  !important;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='<?php echo STYLE_BUTTON_BG; ?>', endColorstr='<?php echo STYLE_BUTTON_BG; ?>', GradientType=0)  !important;
filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active,
.btn-primary.disabled,
.btn-primary[disabled] {
  color: #ffffff !important;
  background-color: <?php echo STYLE_BUTTON_BG; ?> !important;
  *background-color: <?php echo STYLE_BUTTON_BG; ?> !important;
}

#applyFilterOptions {
background-color: <?php echo STYLE_BUTTON_BG; ?> !important;
}

#page_navigation .button{
background-color: <?php echo STYLE_BUTTON_BG; ?> !important;

}

<?php } ?>

<?php if(STYLE_BUTTON_FONT!=""){ ?>
.btn-primary {
color: <?php echo STYLE_BUTTON_FONT; ?> !important;
}

.button {
color: <?php echo STYLE_BUTTON_FONT; ?> !important;
}
<?php } ?>

<?php if(STYLE_RESULTS_HOVER_BG!=""){ ?>
#clinic-finder #results ol li:hover {
  background-color: <?php echo STYLE_RESULTS_HOVER_BG; ?> !important;

}

.store-locator__infobox:hover {
    background-color: <?php echo STYLE_RESULTS_HOVER_BG; ?> !important;
}
<?php } ?>

.btn-group{
width:100% !important;
}

<?php 
if(SHOW_IMAGE_LIST=="no"){ 

?> .infobox__row--marker, .ssf_image_setting {

 display: none !important;

 }

<?php } 
else if(SHOW_IMAGE_LIST=="showboth")
{ ?>
	 .infobox__row--marker{

 display: none !important;

 }
 <?php
}

else if(SHOW_IMAGE_LIST=="yes")
{ ?>
	 .ssf_image_setting{

 display: none !important;

 }
<?php } ?>
</style>