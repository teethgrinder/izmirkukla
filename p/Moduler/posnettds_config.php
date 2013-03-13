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
     * Kullan�c� Ad� = ucxxanh4
	 * �ifre = xur5dzzh
	 * Anahtar = 72,92,93,111,62,28,0,103
     */
    
    //Posnet Sistemi ile ilgili parametreler
    
    //OOS/TDS sisteminin web adresi
    define('OOS_TDS_SERVICE_URL', 'https://www.posnet.ykb.com/3DSWebService/YKBPaymentService ');
    //Posnet XML Servisinin web adresi
    define('XML_SERVICE_URL', 'https://www.posnet.ykb.com/PosnetWebService/XML');
    
    //�ye ��yeri sayfas� ba�lang�� web adresi (hata durumunda bu sayfaya d�n�l�r.)
    define('MERCHANT_INIT_URL', 'https://www.izmirkuklagunleri.com/Program.php');
    //�ye ��yeri d�n�� sayfas�n�n web adresi
    define('MERCHANT_RETURN_URL', 'https://www.izmirkuklagunleri.com/PaymentReturn.php');
    
    //�ifreleme i�in PHP MCrypt mod�l�n� kullan
	define('USEMCRYPTLIBRARY', true);
    define('OPEN_NEW_WINDOW', '0');
    
    //3D-Secure kontrolleri
    //define('TD_SECURE_CHECK', true);
    //define('TD_SECURE_CHECK_MASK', '1:2:4');
    define('TD_SECURE_CHECK', true);
    define('TD_SECURE_CHECK_MASK', '1:2:3:4');
?>