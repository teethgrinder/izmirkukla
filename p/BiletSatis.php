<?php 
	date_default_timezone_set('Europe/Athens');

	$mPid=$_POST['pid'];
	$mOyun=$_POST['txtOyun'];
	$mTarih=$_POST['txtTarih'];
	$mSalon=$_POST['txtSalon'];
	$mSeans=$_POST['txtSeans'];

	$mOyunId=$_POST['selOyun'];
	$mGunId=$_POST['selGun'];
	$mSalonId=$_POST['selSalon'];
	$mSeansId=$_POST['selSeans'];
	$mAdet=$_POST['selAdet'];	
	$mBiletFiyat=$_POST['txtBiletFiyati'];
	$mFiyat=$_POST['txtToplamFiyat'];
	$RefNo= date("mdhis") . Right("0".$mOyunId, 2) . Right("0".$mGunId, 2) . Right("0".$mSalonId, 2) . Left($mSeans,2) . Right("0".$mAdet, 2); 
	//$RefNo= Right($RefNo, strlen($RefNo)-1); 
	
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
<title>Bilet Satış</title>
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
		if (document.getElementById('custName').value.replace(/ /g, "").length<=0) { alert("Ad Soyad boş olamaz!");} else {
		if (document.getElementById('ccno').value.replace(/ /g, "").length!=16) { alert("Kredi Karti numarası 16 haneli olmalıdır!");} else {
		if (document.getElementById('expdate').value.replace(/ /g, "").length!=4) { alert("Son kullanma tarihinin girilmesi gerekmektedir!");} else {
		if (document.getElementById('cvv').value.replace(/ /g, "").length!=3) { alert("CVV2 Güvenlik numarasını 3 hane olarak girilmesi gerekmektedir.");} else {
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
  		<td colspan="3" class="hdr"><br /><b>Kukla Günleri Bilet Satış</b><br />&nbsp;</td>
  	</tr>
  	<?php 
  		$kontrol = 0;
  		If (is_numeric($mOyunId) && is_numeric($mGunId) && is_numeric($mSalonId) && is_numeric($mAdet) && is_numeric($mBiletFiyat) && is_numeric($mFiyat) )
  		{
  			If (($mOyunId>0) && ($mGunId>0) && ($mSalonId>0) && ($mAdet>0) && ($mBiletFiyat>0) && ($mFiyat>0) )
  			{
  				$kontrol = 1;
  			} //else {echo "Kontrol2 0 \n";}
  		} //else {echo "Kontrol1 0 \n";}
  		If ($kontrol==0) {
  	?>
  	<tr style=" height: 20px;">
		<td colspan="3" style="font-size: 16;"><b>Bilet bilgileri okunamıyor. <a href="http://www.izmirkuklagunleri.com/Program.php" target="_self">Buraya</a> tıklayarak tekrar seçim yapabilrsiniz.</b></td>
	</tr>
  	
  	<?php } else 
  		{	
  		$ct = new DateTime();
  		$sSeans = '2012-03-'.substr(('0'.$mGunId), -2).' '.substr($mSeans, 0 ,2).':'.substr($mSeans, -2).':00';
  		$dSeans = new DateTime($sSeans);
  		
  		//$IntervalFark = date_diff($dSeans, $ct); //$dSeans - $ct;
  		$secFark = strtotime($sSeans) - time();
  		
  		//print_r($secFark);
  		if (($ct < $dSeans) && ($secFark < 14400)) //seconds not milisecond
  		{?>
	<tr style=" height: 20px;">
		<td colspan="3" style="font-size: 16;"><b>Seçtiğiniz gösterinin başlamasına 4 saatten az bir zaman kaldı. Biletleri AKM/Konak gişemizden ya da oyundan 1 saat önce salondan satın alabilirsiniz. <a href="http://www.izmirkuklagunleri.com/Program.php" target="_self">Buraya</a> tıklayarak tekrar seçim yapabilrsiniz.</b></td>
	</tr>
  	
  	<?php } else {?>
  	<tr style=" height: 20px;">
		<td colspan="2" style="width:500px; font-size: 18;"><b>Satın Alınacak Bilet Detayları</b></td>
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
	
	<tr>
		<td colspan="3">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="2" style="width:500px; font-size: 18;"><b>Kredi Kart Bilgileri</b></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td style="width:150px;">Ad Soyad</td>
		<td style="width:300px; "><input name="custName" id="custName" value="" size ="25" maxlength="30" /></td>
		<td style="width:574px; "><span>Kredi kartı sahibinin ismi</span></td>
	</tr>
	<tr>
		<td style="width:150px;">Kredi Kartı</td>
		<td style="width:300px; "><input name="ccno" id="ccno" value="" size="22" maxlength="16" /></td>
		<td style="width:574px; "><span>Kredi Kartı Numarası</span></td>
	</tr>
	<tr>
		<td style="width:150px;">SKT</td>
		<td style="width:300px; ">
			<select id="selAy" name="selAy" style="width:45px; text-align: center;" class="textbox" onchange="javascript: sktHesapla()">
				<option value="-1">Ay</option>
    			<?php 
    				for ($i=1;$i<=12;$i++)
    				{
    					$val = sprintf("%1$02d", $i);
    					echo "<option value=\"$val\">$i</option>";
    				}
    			?>
    		</select>
    		<select id="selYil" name="selYil" style="width:60px; text-align: center;" class="textbox" onchange="javascript: sktHesapla()">
    			<option value="-1">Yıl</option>
    			<?php 
    				for ($i=date("Y");$i<date("Y")+10;$i++)
    				{
    					$val = Right($i ,2); //sprintf("%1$02d", $i-2000); 
    					//echo "<option value=\"$val\">$i</option>";
    					echo "<option value=\"$val\">$val</option>";
    				}
    			?>
    		</select>
			</td>
		<td style="width:574px; "><span>Kredi Kartı Son Kullanma Tarihi </span></td>
	</tr>
	<tr>
		<td style="width:150px;">CVV2</td>
		<td style="width:300px; "><input style="width: 40px;" name="cvv" id="cvv" value="" size="6" maxlength="3" ></td>
		<td style="width:574px; "><span>Kredi Kartının arkasında bulunan 3 haneli güvenlik numarası</span></td>
	</tr>
	<tr>
		<td style="width:150px;">Tutar</td>
		<td style="width:300px; ">
			<input style="font-size: 16;font-weight: bold; width: 40px;" name="tutar" id="tutar" value="<?php echo $mFiyat; ?>" size="6" maxlength="13" disabled="disabled" />&nbsp;TL
		</td>
		<td style="width:574px; "><span>Kredi Kartından tahsil edilecek tutar.</span>

		</td>
	</tr>
	<tr>
		<td style="width:150px;">&nbsp;</td>
		<td style="width:300px; "><a href="#" onClick="GoBack();">&Ouml;nceki sayfaya git</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onClick="submitForm(this.form);" ><i>Satın Al</i></a></td>
		<td style="width:574px; ">&nbsp;</td>
	</tr>
	<tr>
    	<td style="width:100px;">&nbsp;</td>
    	<td style="width:300px;text-align: center;"><br /><img id="imgKart" src="/images/visa-master.jpg" alt="Kart logo" width="100px" /></td>
    	<td style="width:574px;">&nbsp;</td>
    </tr>
	<tr>
		<td colspan="2" style="width:450px;white-space: normal;">3D SECURE özelliğine sahip kredi kartlarıyla alacağınız biletler için bankanızın ekranına yönlendirilecek ve işlemlerinizi tamamladıktan sonra referans numaranızı almak ve bilet detaylarınızı görüntülemek için tekrar sitemize yönlendirileceksiniz.</td>
		<td style="width:574px; ">&nbsp;</td>
	</tr>
	<?php } } ?>
  </table>
    <input type="hidden" name="expdate" id="expdate" value="" size="6" maxlength="4" >
  	<input type="hidden" name="amount" id="amount" value="<?php echo $mFiyat*100; ?>" />
	<input type="hidden" name="instalment" id="instalment" value="00"  />
	<input type="hidden" name="tranType" id="tranType" value="Sale" />
	<input type="hidden" name="currency" id="currency" value="TL" />
	<input type="hidden" name="vftCode" id="vftCode" value="K001" >
  <?php 
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
  

/*	echo "mOyunId= |$mOyunId|",  PHP_EOL;
	echo "mGunId= |$mGunId|",  PHP_EOL;
	echo "mSalonId= |$mSalonId|",  PHP_EOL;
	echo "mSalon= |$mSalon|",  PHP_EOL;
	echo "mSeansId= |$mSeansId|",  PHP_EOL;
	echo "mSeans= |$mSeans|",  PHP_EOL;
	echo "mAdet= |$mAdet|",  PHP_EOL;
	echo "mBiletFiyat= |$mBiletFiyat|",  PHP_EOL;
	echo "mFiyat= |$mFiyat|",  PHP_EOL;
	echo "mOyun= |$mOyun|",  PHP_EOL;
	echo "mTarih= |$mTarih|",  PHP_EOL;
	echo "mSalon= |$mSalon|",  PHP_EOL;
	echo "mSeans= |$mSeans|",  PHP_EOL;
*/
?>
</form>
<p>&nbsp;</p>
</body>
</html>