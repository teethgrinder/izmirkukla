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
	$mBiletFiyati=$_POST['txtBiletFiyati'];
	$mFiyat=$_POST['txtToplamFiyat'];
	$xid= Right("0".$mPid, 2) . date("dHis") . Right("0".$mOyunId, 2) . Right("0".$mGunId, 2) . Right("0".$mSalonId, 2) . Left($mSeans,2) . Right("0".$mAdet, 2);
	//$RefNo= Right($RefNo, strlen($RefNo)-1);
			
	$custName=$_POST['custName'];
	$ccno=$_POST['ccno'];
	$expdate=$_POST['expdate'];
	$cvv=$_POST['cvv'];
	$tutar=$_POST['tutar'];
	$amount=$_POST['amount'];
	$instalment=$_POST['instalment'];
	$tranType=$_POST['tranType'];
	$currency=$_POST['currency'];
	$vftCode=$_POST['vftCode'];
	
	/*$myFile = "/ikgpay/orders.xml";
	$fh = fopen($myFile, 'a') or die("Sipariþ dosyasý açýlamýyor. Daha sonra tekrar deneyin");
	
	$sData = "<order ";
	$sData .= "xid=\"$xid\" ";
	$sData .= "date=\"" . date("y-m-d") ."\" ";
	$sData .= "time=\"" . date("H:i:s") ."\" ";
	$sData .= "OyunId=\"$mOyunId\" ";
	$sData .= "GunId=\"$mGunId\" ";
	$sData .= "SalonId=\"$mSalonId\" ";
	$sData .= "SeansId=\"$mSeansId\" ";
	$sData .= "Adet=\"$mAdet\" ";
	$sData .= "BirimFiyat=\"$mBirimFiyat\" ";
	$sData .= "Fiyat=\"$mFiyat\" ";
	
	$sData .= "Oyun=\"$mOyun\" ";
	$sData .= "Tarih=\"$mTarih\" ";
	$sData .= "Salon=\"$mSalon\" ";
	$sData .= "Seans=\"$mSeans\" ";
	
	$sData .= "custName=\"$custName\" ";
	$sData .= "ccno=\"$ccno\" ";
	$sData .= "expdate=\"$expdate\" ";
	$sData .= "cvv=\"$cvv\" ";
	$sData .= "tutar=\"$tutar\" ";
	$sData .= "amount=\"$amount\" ";
	$sData .= "instalment=\"$instalment\" ";
	$sData .= "tranType=\"$tranType\" ";
	$sData .= "currency=\"$currency\" ";
	$sData .= "vftCode\"$vftCode\" ";
		
	$sData .= " /> \n";
	
	fwrite($fh, $sData);
	fclose($fh);*/
		
	$filename = realpath("../db/ikgpay/orders.xml");
	//echo($filename);
	$dom = new DOMDocument();
	$dom->preserveWhiteSpace = true;
	$dom->load($filename);
	$orders = $dom->documentElement;
	//$orders = $dom->getElementsByTagName("order");
	
	$order = $dom->createElement("order");
	
	$order->setAttribute("xid",$xid);
	$order->setAttribute("date", date("y-m-d"));
	$order->setAttribute("time", date("H:i:s"));
	$order->setAttribute("OyunId", $mOyunId);
	$order->setAttribute("GunId", $mGunId);
	$order->setAttribute("SalonId", $mSalonId);
	$order->setAttribute("SeansId", $mSeansId);
	$order->setAttribute("Adet", $mAdet);
	$order->setAttribute("BiletFiyati", $mBiletFiyati);
	$order->setAttribute("Fiyat", $mFiyat);
	
	$order->setAttribute("Oyun", mb_convert_encoding(tr2en($mOyun), "ISO-8859-9", "UTF-8"));
	$order->setAttribute("Tarih", $mTarih);
	$order->setAttribute("Salon", mb_convert_encoding(tr2en($mSalon), "ISO-8859-9", "UTF-8"));
	$order->setAttribute("Seans", $mSeans);
	
	$order->setAttribute("custName", mb_convert_encoding(tr2en($custName), "ISO-8859-9", "UTF-8"));
	$order->setAttribute("ccno", substr_replace($ccno, "********", 4, 8)); //$order->setAttribute("ccno", $ccno);	
	$order->setAttribute("expdate", "****"); //$order->setAttribute("expdate", $expdate);
	$order->setAttribute("cvv", "***"); //$order->setAttribute("cvv", $cvv);
	$order->setAttribute("tutar", $tutar);
	$order->setAttribute("amount", $amount);
	$order->setAttribute("instalment", $instalment);
	$order->setAttribute("tranType", $tranType);
	$order->setAttribute("currency", $currency);
	$order->setAttribute("vftCode", $vftCode);
	
	$orders->appendChild($order);
	//$dom->saveXML();
	$dom->save($filename);
	
	
	function right($value, $count){
		return substr($value, ($count*-1));
	}
	
	function left($string, $count){
		return substr($string, 0, $count);
	}

	function tr2en($strtr) {
		$TRLetters = array("ö", "ç", "þ", "ý", "ð", "ü", "Ö", "Ç", "Þ", "Ý", "Ð", "Ü");
		$ENLetters = array("o", "c", "s", "i", "g", "u", "O", "C", "S", "I", "G", "U");
		return str_replace($TRLetters, $ENLetters, $strtr);
	}
?>

<html>
<head>
<META HTTP-EQUIV="expires" CONTENT="0" />
<META HTTP-EQUIV="cache-control" CONTENT="no-cache" />
<META HTTP-EQUIV="Pragma" CONTENT="no-cache" />
<script type="text/javascript">
	function submitFormEx() {
		document.frmPayment.submit();
	}
</script>
</head>
<body onLoad="submitFormEx();">

	<form id="frmPayment" name="frmPayment" action="https://www.izmirkuklagunleri.com/Moduler/posnettds.php" method="post" >
		<input type="hidden" id="XID" name="XID" value="<?php echo $xid; ?>"/>	
		<input type="hidden" id="custName" name="custName" value="<?php echo $custName; ?>"/>	
		<input type="hidden" id="ccno" name="ccno" value="<?php echo $ccno; ?>"/>	
		<input type="hidden" id="expdate" name="expdate" value="<?php echo $expdate; ?>"/>	
		<input type="hidden" id="cvv" name="cvv" value="<?php echo $cvv; ?>"/>	
		<input type="hidden" id="amount" name="amount" value="<?php echo $amount; ?>"/>	
		<input type="hidden" id="instalment" name="instalment" value="<?php echo $instalment; ?>"/>	
		<input type="hidden" id="tranType" name="tranType" value="<?php echo $tranType; ?>"/>	
		<input type="hidden" id="currency" name="currency" value="<?php echo $currency; ?>"/>	
		<input type="hidden" id="vftCode" name="vftCode" value="<?php echo $vftCode; ?>"/>	
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
	?>
	<!--  <input type="button" value="submit" onclick="submit();" /> -->
	</form>
</body>
</html>