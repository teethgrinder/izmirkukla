<?php 
	date_default_timezone_set('Europe/Athens');

	////////////////////////////////////////////////////////////
	//PHP4 - PHP5 uyumluluk için eklenilmiþtir.
	$POST;
	if ((floatval(phpversion()) >= 5) && ((ini_get('register_long_arrays') == '0') || (ini_get('register_long_arrays') == '')))
	{
		$POST =& $_POST;
	}
	else
	{
		$POST =& $HTTP_POST_VARS;
	}
	////////////////////////////////////////////////////////////
	
	$xid = $POST["XID"];
	$approvedCode = $POST["ApprovedCode"];
	$respText = $POST["RespText"];
	$filename = realpath("../db/ikgpay/orders.xml");
	$dom = new DOMDocument();
	$dom->load($filename);
	//$payments = $dom->documentElement;
	
	$xpath = new DOMXPath($dom);
	$ords = $xpath->query("/orders/order[@xid='$xid']");
	$cnt=0;
	foreach($ords as $ord) {
		$cnt = $cnt + 1;
		/*echo"Attributes: $cnt";
		foreach ($ord->attributes as $attr) {
			$name = $attr->nodeName;
			$value = $attr->nodeValue;
			echo "Attribute '$name' :: '$value'<br />";
		}*/

		$custName=$ord->getAttribute('custName');
		$mPid=$ord->getAttribute('pid');
		$mOyun=$ord->getAttribute('Oyun');
		$mTarih=$ord->getAttribute('Tarih');
		$mSalon=$ord->getAttribute('Salon');
		$mSeans=$ord->getAttribute('Seans');
		
		$mOyunId=$ord->getAttribute('OyunId');
		$mGunId=$ord->getAttribute('GunId');
		$mSalonId=$ord->getAttribute('SalonId');
		$mSeansId=$ord->getAttribute('SeansId');
		$mAdet=$ord->getAttribute('Adet');
		$mBiletFiyatý=$ord->getAttribute('BiletFiyati');
		$mFiyat=$ord->getAttribute('Fiyat');
		//echo("Oyun: $mOyun");
	}
	
	
	
	
	function right($value, $count){
		return substr($value, ($count*-1));
	}
	
	function left($string, $count){
		return substr($string, 0, $count);
	}
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Bilet Satýþ</title>
<META HTTP-EQUIV="Content-Type" content="text/html; charset=ISO-8859-9" />
<META HTTP-EQUIV="expires" CONTENT="0" />
<META HTTP-EQUIV="cache-control" CONTENT="no-cache" />
<META HTTP-EQUIV="Pragma" CONTENT="no-cache" />
<style type="text/css" media="screen">
		html, body { height:100%; background-color: #ffffff;}
		body { margin:0; padding:0; }
		#flashContent { width:100%; height:100%; }
		.tbl {
			font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
			font-size: 16px;
			font-style: italic;
			color: #BF8773;
			font-weight: normal;
			margin: 0px, 0px, 0px, 0px;
			white-space: nowrap;
		}
		.tbl tr { height: 30px; }
		.tbl td { height: 30px; }
		.tbl span { color: #968770}
		.tbl a{ text-decoration: none; }
		.tbl a:hover{ text-decoration: underline; }
		.tbl a:visited{ text-decoration: none; color: #BF8773;}
		.hdr { font-size: 22px; text-align: center; }
		.textbox { font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif; color: #24201E;}
		.fiyat {
			font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif; 
			color: #24201E;
			width : 100px;
			background-color: #FFF;
			border-top-width: thin;
			border-right-width: thin;
			border-bottom-width: thin;
			border-left-width: thin;
			border-top-style: inset;
			border-right-style: inset;
			border-bottom-style: inset;
			border-left-style: inset;
		}
</style>
<script type="text/javascript">
	function GoBack() {
		history.go(-1);return true;
	}

	function printit(){ 
		window.print() ;
		/*
		var NS = (navigator.appName == "Netscape");
		var VERSION = parseInt(navigator.appVersion);
		 
		if (NS) {
		 	window.print() ; 
		} else {
			if (VERSION<5) {
			 var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';
			 document.body.insertAdjacentHTML('beforeEnd', WebBrowser);
			 WebBrowser.ExecWB(6, 2);
			 var WebBrowser1 = document.getElementById('WebBrowser1');
			 WebBrowser1.ExecWB(6, 2);
			} else { window.print(); }
		}*/
	}		 
	
	function sktHesapla() {
		var elAy = document.getElementById('selAy');
		var elYil = document.getElementById('selYil');
		var elExpDate = document.getElementById('expdate');
		elExpDate.value = '';
		if ((elAy.selectedIndex>0) && (elYil.selectedIndex>0) ){
			elExpDate.value = elYil.options[elYil.selectedIndex].value + '' + elAy.options[elAy.selectedIndex].value; 
		}
	}
	function validate() {
		var lreturn = false;
		if (document.getElementById('custName').value.replace(/ /g, "").length<=0) { alert("Ad Soyad boþ olamaz!");} else {
		if (document.getElementById('ccno').value.replace(/ /g, "").length!=16) { alert("Kredi Karti numarasý 16 haneli olmalýdýr!");} else {
		if (document.getElementById('expdate').value.replace(/ /g, "").length!=4) { alert("Son kullanma tarihinin girilmesi gerekmektedir!");} else {
		if (document.getElementById('cvv').value.replace(/ /g, "").length!=3) { alert("CVV2 Güvenlik numarasýný 3 hane olarak girilmesi gerekmektedir.");} else {
			lreturn = true;}}}}
		return lreturn;
	}

	function submitForm(frm) {
		if (validate()) { document.frmPosNet.submit(); }
	}
</script>
</head>

<body background="images/background.jpg" >
<!--  https://www.izmirkuklagunleri.com/ -->
<form name="frmPosNet" method="post" action="https://www.izmirkuklagunleri.com/Payment.php">

  <table width="1024" align="center" cellpadding="0" cellspacing="0" bordercolor="#ffffff" border="0" class="tbl">
  	<tr>
  		<td colspan="3">
  		<div id="flashContent">
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="1024" height="100" id="StaticHeader" align="middle">
				<param name="movie" value="staticheader.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ff0000" />
				<param name="play" value="true" />
				<param name="loop" value="true" />
				<param name="wmode" value="transparent" />
				<param name="scale" value="showall" />
				<param name="menu" value="true" />
				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="staticheader.swf" width="1024" height="100">
					<param name="movie" value="staticheader.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#ff0000" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="transparent" />
					<param name="scale" value="showall" />
					<param name="menu" value="true" />
					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="sameDomain" />
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflash">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
		</div>
		</td>
  	</tr>
  	
  	<tr>
  		<td colspan="3" class="hdr" style="width:1024;"><br /><b>Kukla Günleri Bilet Satýþ</b><br />&nbsp;</td>
  	</tr>

  	<tr>
  		<td colspan="2" style="width:500px; ">Sayýn <?php echo($custName);?>, <br/><br/>
  		<?php if ($approvedCode=="1") {?>
  				Biletinizi baþarýyla satýn aldýnýz. Oyunun baþlamasýndan 1 saat öncesinden itibaren biletinizi oyunun oynanacaðý salonda teslim alabilirsiniz.. 3D SECURE özelliðine sahip olmayan kartlarla yaptýðýnýz alýþveriþlerde biletlerinizi teslim alýrken kredi kartý sahibinin kimlik ibraz etmesi gerekecektir.
		<?php } else {
			if ($approvedCode=="2") { ?>
				Bilet alma isleminizi daha önce tamamlanmýþ. Tekrar ayný referans koduyla bilet alýmý yapýlamaz.<br/>
				Alinan hata: <?php echo($respText);?>
		<?php } else {?>
				Bilet satýþýnýz tamamlanamadý. Lütfen kart bilgilerinizi kontrol edip tekrar deneyin.<br/>
				Alinan hata: <?php echo($respText);?>
		<?php } }?>  				
  				<br/><br/>	
  		</td>
  		<td style="width:524px;">&nbsp;</td>
  	</tr>
  	
  	<tr style=" height: 20px;">
		<td colspan="2" style="width:500px; font-size: 14;"><b>Bilet Detaylarý</b></td>
		<td>&nbsp;</td>
	</tr>
	<tr style=" height: 20px;">
		<td style="width:150px; height: 20px;">Oyun</td>
		<td style="width:874px; height: 20px;" colspan="2"><span><?php echo $mOyun; ?></span></td>
	</tr>
	<tr style=" height: 20px;">
		<td style="width:150px; height: 20px;">Tarih / Salon</td>
		<td style="width:874px; height: 20px;" colspan="2"><span><?php echo "$mTarih <b>/</b> $mSalon"; ?></span></td>
	</tr>
	<tr style=" height: 20px;">
		<td style="width:150px; height: 20px;">Seans</td>
		<td style="width:300px; height: 20px;"><span><?php echo "$mSeans"; ?></span></td>
		<td style="width:574px; ">&nbsp;</td>
	</tr>
	<tr style=" height: 20px;">
		<td style="width:150px; height: 20px;">Bilet Adedi</td>
		<td style="width:300px; height: 20px;"><span><?php echo "$mAdet Adet"; ?></span></td>
		<td style="width:574px; ">&nbsp;</td>
	</tr>
	<tr style=" height: 20px;">
		<td style="width:150px; height: 20px;">Toplam Ödenen</td>
		<td style="width:300px; height: 20px;"><span><?php echo "$mFiyat"; ?></span></td>
		<td style="width:574px; ">&nbsp;</td>
	</tr>
	<tr style=" height: 20px;">
		<td style="width:150px; height: 20px;">Referans #</td>
		<td style="width:300px; height: 20px;"><span><?php echo "$xid"; ?></span></td>
		<td style="width:574px; ">&nbsp;</td>
	</tr>
	
	<tr>
		<td colspan="3">&nbsp;</td>
	</tr>
	<?php if ($approvedCode=="1") {?>
	<tr>
		<td colspan="2" style="width:450px;white-space: normal;">Biletlerinizi teslim almak için isminiz ya da referans numaranýz yeterli olacaktýr ancak dilerseniz aldýðýnýz bilete dair bilgileri gösteren bu sayfayý da print edebilirsiniz. <br/></td>
		<td style="width:574px; ">&nbsp;</td>
	</tr>
	<?php } ?>

	<tr>
		<td style="width:150px;">&nbsp;</td>
		<td style="width:300px; "><a href="javascript:void(0)" onClick="printit();"><b>Sayfayý Yazdýr</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Program.php" target="_self" ><i><b>Yeni Bilet Satýn Al</b></i></a></td>
		<td style="width:574px; ">&nbsp;</td>
	</tr>
  </table>

  <?php 
  /*
  foreach($POST as $formfield => $value)
  {
  	//$payment->setAttribute($formfield, $value);
  	echo("<b>".$formfield."</b> : ".$value);
  	echo("<br><br>");
  }
  
  	echo "from XML \n";
  	echo "<input type=\"hidden\" id=\"pid\" name=\"pid\" value=\"$mPid\" />";
  	echo "<input type=\"hidden\" id=\"txtOyun\" name=\"txtOyun\" value=\"$mOyun\" />";
	echo "<input type=\"hidden\" id=\"txtTarih\" name=\"txtTarih\" value=\"$mTarih\" />";
	echo "<input type=\"hidden\" id=\"txtSalon\" name=\"txtSalon\" value=\"$mSalon\" />";
	echo "<input type=\"hidden\" id=\"txtSeans\" name=\"txtSeans\" value=\"$mSeans\" />";
	
	echo "<input type=\"hidden\" id=\"selOyun\" name=\"selOyun\" value=\"$mOyunId\" />";
	echo "<input type=\"hidden\" id=\"selGun\" name=\"selGun\" value=\"$mGunId\" />";
	echo "<input type=\"hidden\" id=\"selSalon\" name=\"selSalon\" value=\"$mSalonId\" />";
	echo "<input type=\"hidden\" id=\"selSeans\" name=\"selSeans\" value=\"$mSeansId\" />";
	echo "<input type=\"hidden\" id=\"selAdet\" name=\"selAdet\" value=\"$mAdet\" />";
	echo "<input type=\"hidden\" id=\"txtBiletFiyati\" name=\"txtBiletFiyati\" value=\"$mBiletFiyat\" />";
	echo "<input type=\"hidden\" id=\"txtToplamFiyat\" name=\"txtToplamFiyat\" value=\"$mFiyat\" />";
*/  

?>
</form>
<p>&nbsp;</p>
<?php 
/*
echo("approvedCode: $approvedCode");
echo("<br/>");
foreach($POST as $formfield => $value)
{
	//$payment->setAttribute($formfield, $value);
	echo("<b>".$formfield."</b> : ".$value);
	echo("<br/>");
}
*/
?>
</body>
</html>