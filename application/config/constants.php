<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

//Constantes de Bootstrap
define('BOOTSTRAP_CSS', "assets/bootstrap/css/bootstrap.css");
define('BOOTSTRAP_JS', "assets/bootstrap/js/bootstrap.js");
define('BOOTSTRAP_MIN', "assets/bootstrap/js/bootstrap.min.js");
define('JQUERY_BOOTSTRAP', "assets/bootstrap/js/jquery.min.js");

//jQuery UI
define('JQUERY_UI', "assets/jquery_ui/js/jquery-ui-1.10.4.custom.js");
define('JQUERY_UI_CSS', "assets/jquery_ui/css/smoothness/jquery-ui-1.10.4.custom.css");

//CSS
define('CSS', "assets/css.css");

//Plantilla
//Header
#FontAwesome Styles
define('FONT', "assets/plantilla/css/font-awesome.css");
#Custom
define('CUSTOM', "assets/plantilla/css/custom-styles.css");
#Google Fonts
define('GOOGLE_FONTS', "assets/plantilla/fonts.css");
//Footer
#Metis Menu Js
define('MENU', "assets/plantilla/js/jquery.metisMenu.js");
#Morris
define('CUSTOM_JS', "assets/plantilla/js/custom-scripts.js");

//Cargar el archivo de las funciones
define('FUNCIONES', "assets/funciones.js");

/* End of file constants.php */
/* Location: ./application/config/constants.php */