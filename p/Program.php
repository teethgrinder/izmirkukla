<?php 
	date_default_timezone_set('Europe/Athens');
	
	if ((floatval(phpversion()) >= 5) && ((ini_get('register_long_arrays') == '0') || (ini_get('register_long_arrays') == '')))
	{
		$POST =& $_POST;
	}
	else
	{
		$POST =& $HTTP_POST_VARS;
	}
	$mOyunId=$_GET['id'];
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
			font-weight: bold;
			margin: 0px, 0px, 0px, 0px;
			white-space: nowrap;
		}
		.tbl a{ text-decoration: none; }
		.tbl a hover{ text-decoration: underline; }
		.hdr { font-size: 20px; text-align: center; }
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
</head>

<script type="text/javascript">
<!--

	function compareOptionText(a,b) {
		/*
		* return >0 if a>b
		*         0 if a=b
		*        <0 if a<b
		*/
		// textual comparison
		//öşığü
		var aT = a.toLowerCase().replace(/ç/g, 'c').replace(/ö/g, 'o').replace(/ş/g, 's').replace(/ı/g, 'i').replace(/ğ/g, 'g').replace(/ü/g, 'u');
		var bT = b.toLowerCase().replace(/ç/g, 'c').replace(/ö/g, 'o').replace(/ş/g, 's').replace(/ı/g, 'i').replace(/ğ/g, 'g').replace(/ü/g, 'u');
		//return a.text.toLowerCase()!=b.text.toLowerCase() ? a.text.toLowerCase()<b.text.toLowerCase() ? -1 : 1 : 0;
		return aT!=bT ? aT<bT ? -1 : 1 : 0;
		// numerical comparison
		//  return a.text - b.text;
	}

	function sortarray(arr) {
		var tmpAry = new Array(); 
        for (var i=0;i<arr.length;i++) { 
            	if (arr[i]) {
	                tmpAry[i] = new Array(); 
	                tmpAry[i][0] = i; 
	                tmpAry[i][1] = arr[i];
            	} 
        } 
		tmpAry.sort(function (a,b) {
			aT = a[1];
			bT = b[1];
			return compareOptionText(aT, bT);
		});
		return tmpAry;
	}
<?php 

	function right($value, $count){
		return substr($value, ($count*-1));
	}
	
	function left($string, $count){
		return substr($string, 0, $count);
	}

	if (!$mOyunId) { $mOyunId = "null"; }
      
	echo "var mOyun = $mOyunId; \n";

	echo "var oyunlar = []; \n";	
	$doc = new DOMDocument();
	$doc->load( 'oyunlar.xml' );	
	$oyunlar = $doc->getElementsByTagName( "image" );
	//$oyunArr = [];

	foreach( $oyunlar as $oyun )
	{
		$lOyunid = $oyun->getAttribute('id');
		$lGrupid = $oyun->getAttribute('grupid');
		$lGrup = $oyun->getAttribute('grup');
		$lOyun = $oyun->getAttribute('oyun');
		if ($lOyunid>=0) {
			//$strtmp = "oyunlar[" . $lOyunid . "] = '" . addslashes(mb_convert_encoding($lOyun, "ISO-8859-9", "UTF-8")) . "'; \n";
			$strtmp = "oyunlar[" . $lOyunid . "] = '" . addslashes(mb_convert_encoding($lOyun, "ISO-8859-9", "UTF-8")) . "'; \n";
			echo $strtmp;
			$oyunArr[$lOyunid] = addslashes(mb_convert_encoding($lOyun, "ISO-8859-9", "UTF-8"));
			$oyungrupArr[$lOyunid] = $lGrupid;
		}		
	}
	//echo "oyunlar.sort(compareOptionText); \n";
	echo "oyunlarsort = sortarray(oyunlar); \n";
	//print_r($oyungrupArr);
	echo "var oyungrup = []; \n";
	foreach ($oyungrupArr as $oyungrupArrI => $oyungrup) {
		//echo "'$oyungrup' \n";
		echo "oyungrup[$oyungrupArrI] = '$oyungrupArr[$oyungrupArrI]'; \n";
	}
	echo " \n";
	
	echo "var fiyatlar = []; \n";	
	$doc = new DOMDocument();
	$doc->load( 'fiyatlar.xml' );
	$oyunlar = $doc->getElementsByTagName( "image" );
	foreach( $oyunlar as $oyun )
	{
		$lOyunid = $oyun->getAttribute('id');
		$lFiyat = $oyun->getAttribute('fiyat');
		echo "fiyatlar[$lOyunid] = '$lFiyat'; \n";
	}
	
	echo "var mekanlar = []; \n";
	$doc = new DOMDocument();
	$doc->load( 'mekanlar.xml' );
	$mekanlar = $doc->getElementsByTagName( "image" );
	foreach( $mekanlar as $mekan )
	{
		$lMekanid = $mekan->getAttribute('id');
		$lBaslik = $mekan->getAttribute('baslik');
		$mekanArr[$lMekanid] = $lBaslik;
		$mekanstr = "mekanlar[".$lMekanid."] = '".str_replace("'", "\'", mb_convert_encoding($lBaslik, "ISO-8859-9", "UTF-8"))."'; \n";
		echo $mekanstr;
	}
	
	$doc = new DOMDocument();
	$doc->load( 'program.xml' );
	$programlar = $doc->getElementsByTagName( "image" );
	//echo "var gunler = []; \n";
	$programArr = array(array(array(array())));
	foreach( $oyunlar as $oyun )
	{
		$lOyunId = $oyun->getAttribute('id');
		$lOyun = $oyun->getAttribute('oyun');
		$lGunlerStr = ",";
		//echo "OyunId= $lOyunId";
		
		unset($seanslarArr);
		foreach( $programlar as $program )
		{
			$lPid = $program->getAttribute('pid');
			$lId = $program->getAttribute('id');
			$lYer = $program->getAttribute('yer');
			$lGun = $program->getAttribute('gun');
			$lBas = $program->getAttribute('bas');
			$lFiyat = $program->getAttribute('fiyat');
			$lSatilacak = $program->getAttribute('satilacak');
			//echo " Id= $lId \n";
			if (lFiyat!="yok") {
				if ($lOyunId == $lId) {
					//echo "ID= $lId - GUN= $lGun \n";
					//$programArr[$lOyunId][$lGun][$lYer] .= $lBas.",";
					$iarr = sizeof($programArr[$lOyunId][$lGun][$lYer]); 
					//echo "sizeof(programArr[$lOyunId][$lGun][$lYer])= $iarr";					
					//echo "programArr[$lOyunId][$lGun][$lYer][$I][$iarr][0] = $lBas;";
					//echo "programArr[$lOyunId][$lGun][$lYer][$I][$iarr][1] = $lFiyat;";
					$programArr[$lOyunId][$lGun][$lYer][$iarr][0] = $lBas;
					$programArr[$lOyunId][$lGun][$lYer][$iarr][1] = $lFiyat;
					$programArr[$lOyunId][$lGun][$lYer][$iarr][2] = $lPid;
					$programArr[$lOyunId][$lGun][$lYer][$iarr][3] = $lSatilacak;
					
				}
			}
		}
		//$oyunSeanslar[$lOyunId] = $seanslarArr;
		//$lGunlerStr = Left($lGunlerStr, strlen($lGunlerStr)-1);
		//$lGunlerStr = Right($lGunlerStr, strlen($lGunlerStr)-1);
		//echo "gunler[$lOyunId] = '$lGunlerStr'; \n";
	}
	//print_r($programArr);
	$tmpstr = "{";
	//echo "var program = [[[]]]; \n";
	foreach( $programArr as $programI => $programGunler )
	{
		if (($programGunler) && ($programI>0)) {
			//echo "tmparr = []; \n";
			$tmpstr .= $programI . ":{";
			foreach( $programGunler as $programGunI => $programSalonlar )
			{
				if (($programSalonlar) && ($programGunI>0)) {
					//echo "tmparr2 = []; \n";
					$tmpstr .= $programGunI . ":{";
					foreach( $programSalonlar as $programSalonI => $programSeanslar )
					{
						//$tmpstr .= $programSalonI . ":'" . $programSalon . "',";
						$tmpstr .= $programSalonI . ":{";
						foreach( $programSeanslar as $programSeansI => $programSeans )
						{
							//$tmpstr .= $programSalonI . ":'" . $programSalon . "',";
							$tmpstr .= $programSeansI . ":{0:'" . $programSeans[0] . "', 1:'" . $programSeans[1] ."',2:'" . $programSeans[2] ."',3:'" . $programSeans[3] . "'},";
						}
						$tmpstr .= "},";
					}
					$tmpstr .= "},";
					//echo " \n";
					//echo "tmparr[$programGunI] = tmparr2; \n";
				}				
			}	
			$tmpstr .= "},";
			//echo " \n";
			//echo "program[$programI] = tmparr; \n";
		}
	}
	
	$tmpstr = str_replace(',}', '}', $tmpstr . "}");
	//$tmpstr = Left($tmpstr, strlen($tmpstr)-1) . "}"; 
	echo "var program = $tmpstr;";
	
	echo " \n";
	/*echo "var seanslar = [[]]; \n";
	echo "var tmparr = []; \n";
	foreach( $oyunSeanslar as $oyunI => $gunSeanslar )
	{
		echo "tmparr = []; \n";
		//$gunSeanslar = $oyunSeanslar[$oyunI];
		if ($gunSeanslar) {
			foreach( $gunSeanslar as $gunI => $gunSeans )
			{	
				$gunSeans = Left($gunSeans, strlen($gunSeans)-1);
				echo "tmparr[$gunI] = '" . $gunSeans . "';";
			}
		}
		echo " \n";
		echo "seanslar[$oyunI] = tmparr; \n";
	}*/
	
	//echo "var mOyun1 = $mOyunId; \n";
	echo "var ct=new Date(" . Date('Y') . ',' . (Date('m')-1) .','.Date('d').','.Date('H').','.Date('i').','.Date('s').',0);';
?>

function findObj(n, d) { //v4.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=findObj(n,d.layers[i].document);
  if(!x && document.getElementById) x=document.getElementById(n); return x;
}

function Left(str, n) {
    if (n <= 0)
      return "";
    else if (n > String(str).length)
      return str;
    else
      return String(str).substring(0, n);
  }
  function Right(str, n) {
    if (n <= 0)
      return "";
    else if (n > String(str).length)
      return str;
    else {
      var iLen = String(str).length;
      return String(str).substring(iLen, iLen - n);
    }
  }     

  function submitForm(frm) {
	  var el = document.getElementById('btnSubmit');
	  if (!el.disabled) { document.frmProgram.submit(); }
  }
	
  function setCmbValue(cmb, v) {
	  var optionEls = cmb.getElementsByTagName('option');
		for (var i = 0, oEl; oEl = optionEls[i]; i++) {
			// loop counts start from 0, so the 3rd option: 0, 1, 2
			oEl.selected = (oEl.value == v) ? 'selected' : false;
		}	  
  }

  function cmbGrupChanged(cmb) {
	  fillCmbOyun('selOyun');	
  }

  function start()
  {
	  var elAdet = document.getElementById('selAdet');
	  elAdet.selectedIndex = -1;
	  fillCmbOyun('selOyun');
  }
  
  function fillCmbOyun(elID) {
    var elSel = document.getElementById(elID);
    var selGrup = document.getElementById('selGrup');
    var grpVal = '';
    if (selGrup.selectedIndex>=0) {
       grpVal = selGrup.options[selGrup.selectedIndex].value; 
    }
    elSel.options.length = 0;
    for (i in oyunlarsort) {
      //document.writeln(i + ':' + associativeArray[i] + ', ');
      // outputs: one:First, two:Second, three:Third
      if ((grpVal=='') || ((grpVal!='') && (oyungrup[oyunlarsort[i][0]]==grpVal))) {
	      var elOptNew = document.createElement('option');
	      elOptNew.text = oyunlarsort[i][1]; //oyunlar[i];
	      elOptNew.value = oyunlarsort[i][0]; //i;
	      try {
	        elSel.add(elOptNew, null); // standards compliant; doesn't work in IE
	      }
	      catch (ex) {
	        elSel.add(elOptNew); // IE only
	      }
      }
    }
    if (elSel.options.length==1) {
    	elSel.selectedIndex = 0;
    } else {
    	elSel.selectedIndex = -1;    
	    if (mOyun != null) {
	      //elSel.selectedValue = mOyun;
	      setCmbValue(elSel, mOyun);
	      mOyun = null;	      
	    }
    }
    //fillCmbGun(elSel, 'selGun');
    fillCmbGun(elSel, 'selGun');
  }
  
  function fillCmbGun(elOyun, elGunID) {
    var elSel = document.getElementById(elGunID);
    elSel.options.length = 0;
    
    if (elOyun.selectedIndex != -1) {
      lOyun = elOyun.options[elOyun.selectedIndex].value;
      var selGrup = document.getElementById('selGrup');
      setCmbValue( selGrup, oyungrup[lOyun]);

      GunlerArr = program[lOyun];
      //GunlerStr = gunler[lOyun];
      //GunlerArr = GunlerStr.split(',');
      for (i in GunlerArr) {
         var elOptNew = document.createElement('option');
         //elOptNew.text = Right('0' + GunlerArr[i], 2)+'/03/2012';
         //elOptNew.value = GunlerArr[i];
         elOptNew.text = Right('0' + i, 2)+'/03/2012';
         elOptNew.value = i;
          try {
            elSel.add(elOptNew, null); // standards compliant; doesn't work in IE
          }
          catch (ex) {
            elSel.add(elOptNew); // IE only
          }
      }
      elSel.selectedIndex = -1;
      if (elSel.options.length == 1) {
        elSel.selectedIndex = 0;
      } 
      
    }   
    fillCmbSalon('selOyun', elSel, 'selSalon'); 
  }

  function fillCmbSalon(elOyunID, elGun, elSalonID) {
	    var elOyun = document.getElementById(elOyunID);
	    var elSel = document.getElementById(elSalonID);
	    elSel.options.length = 0;
	    
	    if ((elOyun.selectedIndex != -1) && (elGun.selectedIndex != -1)) {
	      lOyun = elOyun.options[elOyun.selectedIndex].value;
	      lGun = elGun.options[elGun.selectedIndex].value;
	      
	      //SalonlarArr = salonlar[lOyun];
	      SalonlarArr = program[lOyun][lGun];
	      for (i in SalonlarArr) {
	         var elOptNew = document.createElement('option');
	         elOptNew.text = mekanlar[i]; //Right('0' + GunlerArr[i], 2)+'/03/2012';
	         elOptNew.value = i; //GunlerArr[i];
	          try {
	            elSel.add(elOptNew, null); // standards compliant; doesn't work in IE
	          }
	          catch (ex) {
	            elSel.add(elOptNew); // IE only
	          }
	      }
	      elSel.selectedIndex = -1;
	      if (elSel.options.length == 1) {
	        elSel.selectedIndex = 0;
	      } 
	      
	    }   
	    
	    fillCmbSeans('selOyun', 'selGun', elSel, 'selSeans');     
}

  function fillCmbSeans(elOyunID, elGunID, elSalon, elSeansID) {
    var elOyun = document.getElementById(elOyunID);
    var elGun = document.getElementById(elGunID);
    var elSel = document.getElementById(elSeansID);
    elSel.options.length = 0;
    
    if ((elOyun.selectedIndex != -1) && (elGun.selectedIndex != -1) && (elSalon.selectedIndex != -1)) {
      lOyun = elOyun.options[elOyun.selectedIndex].value;
      lGun = elGun.options[elGun.selectedIndex].value;
      lSalon = elSalon.options[elSalon.selectedIndex].value;
      
      /*SeanslarStr = program[lOyun][lGun][lSalon];
      if (!SeanslarStr) {
    	  SeanslarArr = [];
      } else {
      	SeanslarArr = SeanslarStr.split(',');
      } */
      SeanslarArr = program[lOyun][lGun][lSalon];
      for (i in SeanslarArr) {
          if (SeanslarArr[i]) {
	        var elOptNew = document.createElement('option');
	        elOptNew.text = SeanslarArr[i][0];
	        elOptNew.value = i; //SeanslarArr[i][0];
	        try {
	          elSel.add(elOptNew, null); // standards compliant; doesn't work in IE
	        }
	        catch (ex) {
	          elSel.add(elOptNew); // IE only
	        }
          }
      }
      elSel.selectedIndex = -1;
      if (elSel.options.length == 1) { elSel.selectedIndex = 0; }
      
    }
    cmbSeansChanged('selOyun', 'selGun', 'selSalon', 'selSeans', 'txtBiletFiyat');
  }

  function cmbSeansChanged(elOyunID, elGunID, elSalonID, elSeansID, elFiyatID) {
    var elOyun = document.getElementById(elOyunID);
    var elGun = document.getElementById(elGunID);    
    var elSalon = document.getElementById(elSalonID);
    var elSeans = document.getElementById(elSeansID);
    var elFiyat = document.getElementById(elFiyatID);
    var elAdet = document.getElementById("selAdet");
    var lFiyat = '';
    if ((elOyun.selectedIndex != -1) && (elGun.selectedIndex != -1) && (elSalon.selectedIndex != -1) && (elSeans.selectedIndex != -1)) {
      //lFiyat = fiyatlar[elOyun.options[elOyun.selectedIndex].value];
      lOyun = elOyun.options[elOyun.selectedIndex].value;
      lGun = elGun.options[elGun.selectedIndex].value;
      lSalon = elSalon.options[elSalon.selectedIndex].value;
      lSeans = elSeans.options[elSeans.selectedIndex].value;
        lFiyat = program[lOyun][lGun][lSalon][lSeans][1];
    } else { lFiyat = ''; }
    if (lFiyat=='yok') {elFiyat.innerHTML = ''; elAdet.selectedIndex = -1; } else { elFiyat.innerHTML = lFiyat  + ' TL'; 
    }
    fiyatHesapla();
  }

  function fiyatHesapla()
  {
	  var elOyun = document.getElementById('selOyun');
	  var elGun = document.getElementById('selGun');
	  var elSalon = document.getElementById('selSalon');
	  var elSeans = document.getElementById('selSeans');
	  var elAdet = document.getElementById("selAdet");
	  var elFiyat = document.getElementById("txtFiyat");
	  var elSubmit = document.getElementById("btnSubmit");
	  var elError = document.getElementById("txtErrMessage");
	  var lBiletFiyat = 0;
	  var lSatilacak = 0;
	  var lAdet = 0;
	  var lPid = 0;
	  elError.innerHTML = '';
	  if ((elOyun.selectedIndex != -1) && (elGun.selectedIndex != -1) && (elSeans.selectedIndex != -1)) {
		  lOyun = elOyun.options[elOyun.selectedIndex].value;
	      lGun = elGun.options[elGun.selectedIndex].value;
	      lSalon = elSalon.options[elSalon.selectedIndex].value;
	      lSeans = elSeans.options[elSeans.selectedIndex].value;
	      lBiletFiyat = program[lOyun][lGun][lSalon][lSeans][1];
	      lSatilacak = parseInt(program[lOyun][lGun][lSalon][lSeans][3]);
	      //lBiletFiyat = fiyatlar[elOyun.options[elOyun.selectedIndex].value];
	      var sSeans = elSeans.options[elSeans.selectedIndex].text;
	      var lSaat = sSeans.substr(0,2);
	      var lDak =  sSeans.substr(3,2);
	      var dSeans = new Date(2012, 2, lGun, lSaat, lDak, 0, 0);
	      if (ct > dSeans) { lBiletFiyat='yok'; }
	      if ((!lSatilacak>0) && (lBiletFiyat!='yok')) { elError.innerHTML = 'Bu seansa ait tüm biletler tükenmiştir.'; } 	 
	      else {
				if ((ct < dSeans) && (dSeans - ct) < 14400000) { 
					lSatilacak = 0;
					elError.innerHTML = 'Bu gösterinin biletlerini AKM/Konak gişemizden ya da oyundan 1 saat önce salondan satın alabilirsiniz.';
					}
		      }
	  }

	  if (elAdet.selectedIndex != -1) {
	  	lAdet = elAdet.options[elAdet.selectedIndex].value;
	  }
	  var kontrol = false;
	  if ((lBiletFiyat!='yok') && (lSatilacak>0)) { kontrol=true; }	  
	  
	  if (!kontrol) {
		  elAdet.disabled = true;
		  elSubmit.disabled = true;
		  elFiyat.innerHTML = '';
		  
	  } else {
		  elAdet.disabled = false;
		  elSubmit.disabled = false;
		  elFiyat.innerHTML = lBiletFiyat * lAdet;
	
		  if ((elOyun.selectedIndex != -1) && (elGun.selectedIndex != -1) && (elSeans.selectedIndex != -1) && (elAdet.selectedIndex != -1)) {
			  document.getElementById('txtOyun').value = elOyun.options[elOyun.selectedIndex].text;
		      document.getElementById('txtTarih').value = elGun.options[elGun.selectedIndex].text;
		      document.getElementById('txtSalon').value = elSalon.options[elSalon.selectedIndex].text;
		      document.getElementById('txtSeans').value = elSeans.options[elSeans.selectedIndex].text;
		      document.getElementById('txtBiletFiyati').value = lBiletFiyat;
		      document.getElementById('txtToplamFiyat').value = lBiletFiyat * lAdet;
		      document.getElementById('pid').value = program[lOyun][lGun][lSalon][lSeans][2];
		  }
	  }
  }

  function appendOptionLast(num) {
    var elOptNew = document.createElement('option');
    elOptNew.text = 'Append' + num;
    elOptNew.value = 'append' + num;
    var elSel = document.getElementById('selectX');

    try {
      elSel.add(elOptNew, null); // standards compliant; doesn't work in IE
    }
    catch (ex) {
      elSel.add(elOptNew); // IE only
    }
  }

-->

</script>
<body background="images/background.jpg" onload="start();">

<form name="frmProgram" method="post" action="https://www.izmirkuklagunleri.com/BiletSatis.php">
	
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
  		<td colspan="3" class="hdr"><br /><br />Festival oyunlarının biletlerini kredi kartınız ile buradan alabilirsiniz.<br />&nbsp;</td>
  	</tr>
  	<tr>
		<td style="width:100px;">Gruplar</td>
		<td style="width:450px;">    
		<select id="selGrup" name="selGrup" style="width:400px;" class="textbox" onchange="javascript: cmbGrupChanged(this);"> 
			<option value="">&lt;Tüm Oyunlar&gt;</option>
			<?php 
			$doc = new DOMDocument();
			$doc->load( 'oyunlar.xml' );
			$oyunlar = $doc->getElementsByTagName( "image" );
			foreach( $oyunlar as $oyun )
			{
				$lGrupid = $oyun->getAttribute('grupid');
				$lGrup = $oyun->getAttribute('grup');
				if ($lGrupid>=0) {
					if (!$grupArr[$lGrupid]) {
						$grupArr[$lGrupid] = mb_convert_encoding($lGrup, "ISO-8859-9", "UTF-8");
						//$tmp = "<option value=\"".$lGrupid."\">" . mb_convert_encoding($lGrup, "ISO-8859-9", "UTF-8") . "</option> \n";
						//echo $tmp;
					}
				}
			}
			natcasesort($grupArr);
			
			foreach ($grupArr as $grupid => $grupname) {
				if ($grupname!="") {
					//$tmp = "<option value=\"".$grupid."\">" . mb_convert_encoding($grupname, "ISO-8859-9", "UTF-8") . "</option> \n";
					$tmp = "<option value=\"".$grupid."\">" . $grupname . "</option> \n";
					echo $tmp;
				}
			}
			?>
		</select> <br /> </td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td style="width:100px;">Oyunlar</td>
		<td style="width:450px;">    
			<select id="selOyun" name="selOyun" style="width:400px;" class="textbox" onchange="javascript: fillCmbGun(this, 'selGun');"></select>
			<input type="hidden" id="txtOyun" name="txtOyun" value="" />
		</td>
		<td>&nbsp;</td>
	</tr>
		<tr>
		<td style="width:100px;">Tarih / Salon</td>
    	<td style="width:450px;">
    		<select id="selGun" name="selGun" style="width:100px;" class="textbox" onchange="javascript: fillCmbSalon('selOyun', this, 'selSalon');"> </select>
    		<select id="selSalon" name="selSalon" style="width:296px;" class="textbox" onchange="javascript: fillCmbSeans('selOyun', 'selGun', this, 'selSeans');"> </select>
    		<input type="hidden" id="txtTarih" name="txtTarih" value="" />
    		<input type="hidden" id="txtSalon" name="txtSalon" value="" />    		
    	</td>
		<td>&nbsp;</td>
    </tr>
    <tr>
    	<td style="width:100px;">Seans</td>
    	<td style="width:450px;">
    		<select id="selSeans" name="selSeans" style="width:100px;" class="textbox" onchange="javascript: cmbSeansChanged('selOyun', 'selGun', 'selSalon', 'selSeans', 'txtBiletFiyat');"> </select>
    		<input type="hidden" id="txtSeans" name="txtSeans" value="" /> 
    	</td>
		<td>&nbsp;</td>
    </tr>
    <tr>
    	<td style="width:100px;">Bilet Fiyatı</td>
    	<td style="width:450px;">
    		<span id="txtBiletFiyat" class="fiyat" ></span>&nbsp;<span id="txtErrMessage" style="color: #FF0000; font-size:16px;"></span>
    		<input type="hidden" id="txtBiletFiyati" name="txtBiletFiyati" value="" /> 
    	</td>
		<td>&nbsp;</td>
    </tr>
    <tr>
    	<td style="width:100px;">Bilet Adedi</td>
    	<td style="width:450px;">
    		<input type="hidden" id="txtToplamFiyat" name="txtToplamFiyat" value="" /> 
    		<select id="selAdet" name="selAdet" style="width:100px; text-align: center;" class="textbox" onchange="javascript: fiyatHesapla()">
    			<?php 
    				for ($i=1;$i<10;$i++)
    				{
    					echo "<option value=\"$i\">$i Adet</option>";
    				}
    			?>
    		</select>
    		&nbsp;&nbsp;Toplam:&nbsp;
    		<div id="txtFiyat" class="fiyat" style="text-align: right;width:90px; display: inline;" ></div>TL&nbsp;&nbsp;&nbsp; =&gt;&nbsp;&nbsp;&nbsp; 
    		<div id="btnSubmit" style="display: inline;" ><a href="#" onclick="submitForm();"><i>Satın Al</i></a></div>
    		</td>
		<td>&nbsp;</td>
    </tr>
    <tr>
    	<td style="width:100px;">&nbsp;</td>
    	<td style="width:450px;text-align: center;"><br /><img id="imgKart" src="/images/visa-master.jpg" alt="Kart logo" width="100px" /></td>
    	<td>&nbsp;</td>
    </tr>
    <tr>
    	<td colspan="2" style="text-align: center;"><br />Oyun biletlerini gösterilerden 4 saat öncesine kadar sitemizden satın alabilirsiniz.<br />Sitemizden satın aldığınız biletleri oyunun oynanacağı salonda, <br />oyunun başlamasından 1 saat öncesinden itibaren teslim alabilirsiniz.	</td>
    	<td style="width: 400px">&nbsp;</td>
    </tr>
  </table>
  <input type="hidden" id="pid" name="pid" value="" />
</form>
<p>&nbsp;</p>
</body>
</html>