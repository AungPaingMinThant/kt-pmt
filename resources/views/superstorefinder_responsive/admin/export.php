<?php 
error_reporting(0); 
ob_start();
ini_set('max_execution_time', 0);

include_once './includes/config.inc.php';
include_once './includes/validate.php';

// Authenticate user login
auth();
$db = db_connect();
$header  = "";



mysqli_query($GLOBALS["___mysqli_ston"], "SET NAMES utf8"); 
$stores = $db->get_rows("SELECT stores.* FROM stores ORDER BY stores.name ASC");

$data ='"id","name","address","telephone","fax","mobile","email","website","description","approved","latitude","longitude","created","modified","status","openinghour","cat_id","External URL"';
$data .= "\n";

if(!empty($stores)):
					foreach($stores as $k=>$v):
					$data .= '"'.$v['id'].'","'.$v['name'].'","'.$v['address'].'","'.$v['telephone'].'","'.$v['fax'].'","'.$v['mobile'].'","'.$v['email'].'","'.$v['website'].'","'.trim($v['description']).'","'.$v['approved'].'","'.$v['latitude'].'","'.$v['longitude'].'","'.$v['created'].'","'.$v['modified'].'","'.$v['status'].'","'.trim($v['openinghour']).'","'.$v['cat_id'].'","'.$v['ext_url'].'"'; 
					$data .= "\n";
					endforeach; 
				else: 
					echo "";
					
				endif;


$data = str_replace( "\r" , "" , $data );

if ( $data == "" )
{
    $data = "\n(0) Records Found!\n";                        
}
$date = date("Y-m-d");
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=superstorefinder_stores_".$date.".csv");
header("Pragma: no-cache");
header("Expires: 0");
print $data;

?>