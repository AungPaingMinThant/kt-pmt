<?php
@session_start();
// define the root path to the frontend folder
define('ROOT', '');
// define the root URL to the frontend section
define('ROOT_URL', 'http://localhost/superstorefinder_responsive/');
// General settings
define('DEFAULT_LANGUAGE', 'en_US');
define('DEFAULT_DISTANCE', 'mi');
define('INIT_ZOOM','0');
define('ZOOMHERE_ZOOM','0');
define('GEO_SETTINGS','1');
define('DEFAULT_LOCATION','New York, US');
define('SHOW_IMAGE_LIST','yes');
define('LABEL_MARKER','1');
define('SSF_PAGINATION','0');
define('MEGA_DISTANCE','30');
define('SHOW_MOBILE_FIELD','false');
define('MEGA_SCROLL_TOP','0');
define('MEGA_GOOGLE_API','AIzaSyAVY3wQ5BPvNz9eKrNcV-1eaEwbNA-rDEI');
define('MEGA_GEOCODE_GOOGLE_API','AIzaSyAVY3wQ5BPvNz9eKrNcV-1eaEwbNA-rDEI');

define('GOOGLE_MAP_REGION','MM');
define('GOOGLE_MAP_LANGUAGE','en');
define('SCROLL_SETTING','true');
define('TEL_FAX_LINK','false');
define('NOTIFICATION_BAR','true');

// Styles settings

define('STYLE_MAP_COLOR','');
define('STYLE_TOP_BAR_BG','');
define('STYLE_TOP_BAR_FONT','');
define('STYLE_TOP_BAR_BORDER','');

define('STYLE_RESULTS_BG','');
define('STYLE_RESULTS_HL_BG','');
define('STYLE_RESULTS_HOVER_BG','');
define('STYLE_RESULTS_FONT','');
define('STYLE_RESULTS_DISTANCE_FONT','');

define('STYLE_DISTANCE_TOGGLE_BG','');
define('STYLE_CONTACT_BUTTON_BG','');
define('STYLE_CONTACT_BUTTON_FONT','');

define('STYLE_BUTTON_BG','');
define('STYLE_BUTTON_FONT','');

define('STYLE_LIST_NUMBER_BG','');
define('STYLE_LIST_NUMBER_FONT','');
// map style code patch 2.6
define('STYLE_MAP_CODE','');
define('MEGA_GRID_VIEW','1');
define('MOBILE_GESTURE','true');
//GDPR
define('GDPR','false');
define('GDPR_PRIVACY','');


if(isset($_REQUEST['langset']) && !empty($_REQUEST['langset'])){
   $_SESSION['language']=$_REQUEST['langset'];
}


// default language file
if(isset($_SESSION['language'])){
	include_once ROOT.'language/'.htmlspecialchars($_SESSION['language']).'.php';
} else {
	include_once ROOT.'language/'.DEFAULT_LANGUAGE.'.php';
	$_SESSION['language'] = DEFAULT_LANGUAGE;
}

// include library file
include_once ROOT.'includes/library.php';
// include database class
include_once ROOT.'includes/class.database.php';
// include image class
include_once ROOT.'includes/class.img.php';


// define database settings
define('HOSTNAME','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','megastore');
// admin email address
define('ADMINISTRATOR_EMAIL','maykhaing@saltnpixel.com');

//trigger install
if(DB_USERNAME=="your_database_username"){
echo "<script>document.location.href='install.php'</script>";
}

// new db instance
$db = new DB(array(
	'hostname'=>HOSTNAME,
	'username'=>DB_USERNAME,
	'password'=>DB_PASSWORD,
	'db_name'=>DB_NAME
));

// stop on db fail
if($db===FALSE) {
	$db_errors = $db->errors;
}

?>


