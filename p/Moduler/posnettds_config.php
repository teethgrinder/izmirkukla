<?php
    /*
     * posnetoos_config.php
     *
     */

    /**
     * @package posnet oos
     */

    //Configuration parameters
    define('MID', '6783952747');
    define('TID', '67338964');
    define('POSNETID', '18093');
    define('ENCKEY', '72,92,93,111,62,28,0,103');
    /*
     * Kullanýcý Adý = ucxxanh4
	 * Þifre = xur5dzzh
	 * Anahtar = 72,92,93,111,62,28,0,103
     */
    
    //Posnet Sistemi ile ilgili parametreler
    
    //OOS/TDS sisteminin web adresi
    define('OOS_TDS_SERVICE_URL', 'https://www.posnet.ykb.com/3DSWebService/YKBPaymentService ');
    //Posnet XML Servisinin web adresi
    define('XML_SERVICE_URL', 'https://www.posnet.ykb.com/PosnetWebService/XML');
    
    //Üye Ýþyeri sayfasý baþlangýç web adresi (hata durumunda bu sayfaya dönülür.)
    define('MERCHANT_INIT_URL', 'https://www.izmirkuklagunleri.com/Program.php');
    //Üye Ýþyeri dönüþ sayfasýnýn web adresi
    define('MERCHANT_RETURN_URL', 'https://www.izmirkuklagunleri.com/PaymentReturn.php');
    
    //Þifreleme için PHP MCrypt modülünü kullan
	define('USEMCRYPTLIBRARY', true);
    define('OPEN_NEW_WINDOW', '0');
    
    //3D-Secure kontrolleri
    //define('TD_SECURE_CHECK', true);
    //define('TD_SECURE_CHECK_MASK', '1:2:4');
    define('TD_SECURE_CHECK', true);
    define('TD_SECURE_CHECK_MASK', '1:2:3:4');
?>