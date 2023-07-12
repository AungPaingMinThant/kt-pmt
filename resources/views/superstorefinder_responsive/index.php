<?php include_once './includes/config.inc.php';
@session_start();
 ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="no-js">
<head>
	<meta charset="UTF-8">
	<title>Super Store Finder - Mega Theme</title>
	 <meta name="author" content="Joe Iz">
                  <meta name="keywords" content="mega locator theme, super store finder, street view, google direction, ajax, bootstrap, embed, geo ip, geolocation, gmap, google maps, jquery, json, map, responsive, store admin, store finder, store locator" />
				  <meta name="description" content="Super Store Finder &amp;#8211; Easy to use Google Maps API Store Finder Super Store Finder is a multi-language fully featured PHP Application integrated with Google Maps API v3 that allows customers to..." />

	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/demo.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/jresize.js"></script>

	<script>
	$(function() {
		$.jResize({
			 viewPortSizes   : ['320px', '480px', '768px', '960px', '1024px', '1280px'], // ViewPort Widths
			 backgroundColor : '000', // HEX Code
			 fontColor       : 'FFF' // HEX Code
		});

		$(".viewlist").on("click", ".Label", function(event){
   	 	document.location.href='index.php';
		});
	});


function isMobileCheck() {
    var check = false
        a     = navigator.userAgent||navigator.vendor||window.opera;
    if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true;
    return check;
  }

var isInIframe = (window.location != window.parent.location) ? true : false;

function msie() {
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE ");

            if (msie > 0)      // If Internet Explorer, return version number
                return true;
            else                 // If another browser, return 0
                return false;

            return false;
        }


if(isMobileCheck()){
 document.location.href="mega-embed.php";
}
</script>
</head>
<body>
	<div id="Head">
    		<div id="language" style="display:none;"><select onChange='changeLang(this.value)'><option value='en_US' <?php if(!isset($_SESSION['language']) || $_SESSION['language']=='en_US') { ?>selected<?php } ?>>English</option><option value='sv_SE' <?php if(isset($_SESSION['language']) && $_SESSION['language']=='sv_SE') { ?>selected<?php } ?>>Swedish</option><option value='es_ES' <?php if(isset($_SESSION['language']) && $_SESSION['language']=='es_ES') { ?>selected<?php } ?>>Spanish</option><option value='fr_FR' <?php if(isset($_SESSION['language']) && $_SESSION['language']=='fr_FR') { ?>selected<?php } ?>>French</option><option value='de_DE' <?php if(isset($_SESSION['language']) && $_SESSION['language']=='de_DE') { ?>selected<?php } ?>>German</option><option value='cn_CN' <?php if(isset($_SESSION['language']) && $_SESSION['language']=='cn_CN') { ?>selected<?php } ?>>Chinese</option><option value='kr_KR' <?php if(isset($_SESSION['language']) && $_SESSION['language']=='kr_KR') { ?>selected<?php } ?>>Korean</option><option value='jp_JP' <?php if(isset($_SESSION['language']) && $_SESSION['language']=='jp_JP') { ?>selected<?php } ?>>Japanese</option><option value='ar_AR' <?php if(isset($_SESSION['language']) && $_SESSION['language']=='ar_AR') { ?>selected<?php } ?>>Arabic</option></select></div>
    </div>
    <div id="Demo">
		<iframe src="mega-embed.php?boxsearch=<?php if(isset($_REQUEST['boxsearch'])){ echo $_REQUEST['boxsearch']; } ?>&category=<?php if(isset($_REQUEST['category'])){ echo $_REQUEST['category']; } ?>&langset=<?php if(isset($_REQUEST['langset'])){ echo $_REQUEST['langset']; } ?>" scrolling="yes" style="width:100%;display:block;border:0;height:900px;"></iframe>

    </div>

		<div id="Description">

    	<div class="Specs">
              <center>
		<a href="index.php" rel="nofollow"><img src="https://superstorefinder.net/img/store.jpg" alt="Super Store Finder - Mega Theme"></a>
		<a href="admin/" rel="nofollow"><img src="https://superstorefinder.net/img/admin.jpg" alt="Super Store Finder Admin"></a>
		
		<br><br>
        <h4 id="embedCode">Embed Store Finder to any website :</h4>
       <br><br>
        <textarea id="embed" style="width:650px;" onclick="this.select()"><iframe src="<?php echo ROOT_URL; ?>mega-embed.php" width="100%" height="900px" allow="geolocation" scrolling="yes" frameborder=no></iframe></textarea>
       <br><br><br>
       </center>
	   
	   </div>
	   </div>
       

</body>
</html>