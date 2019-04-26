<?php
require 'vendor/autoload.php';
//Default Configuration
$CONFIG = '{"lang":"en","error_reporting":false,"show_hidden":false}';

/**
 * H3K | Tiny File Manager V2.3.5
 * CCP Programmers | ccpprogrammers@gmail.com
 * https://tinyfilemanager.github.io
 */

//TFM version
define('VERSION', '2.3.5');

// Auth with login/password (set true/false to enable/disable it)
$use_auth = true;

// Users: array('Username' => 'Password', 'Username2' => 'Password2', ...)
// Generate secure password hash - https://tinyfilemanager.github.io/docs/pwd.html
$auth_users = array(
    'admin' => '$2y$10$/K.hjNr84lLNDt8fTXjoI.DBp6PpeyoJ.mGwrrLuCZfAwfSAGqhOW', //admin@123
    'user' => '$2y$10$Fg6Dz8oH9fPoZ2jJan5tZuv6Z4Kp7avtQ9bDfrdRntXtPeiMAZyGO' //12345
);

// Readonly users (username array)
$readonly_users = array(
    'user'
);

// user specific directories
// array('Username' => 'Directory path', 'Username2' => 'Directory path', ...)
$directories_users = array();

// Enable highlight.js (https://highlightjs.org/) on view's page
$use_highlightjs = true;

// highlight.js style
$highlightjs_style = 'vs';

// Enable ace.js (https://ace.c9.io/) on view's page
$edit_files = true;

// Default timezone for date() and time() - http://php.net/manual/en/timezones.php
$default_timezone = 'Etc/UTC'; // UTC

// Root path for file manager
$root_path = $_SERVER['DOCUMENT_ROOT'];

// Root url for links in file manager.Relative to $http_host. Variants: '', 'path/to/subfolder'
// Will not working if $root_path will be outside of server document root
$root_url = '';

// Server hostname. Can set manually if wrong
$http_host = $_SERVER['HTTP_HOST'];

// input encoding for iconv
$iconv_input_encoding = 'UTF-8';

// date() format for file modification date
$datetime_format = 'd.m.y H:i';

// allowed file extensions for upload and rename
$allowed_extensions = ''; // 'gif,png,jpg'

// Array of files and folders excluded from listing
$GLOBALS['exclude_items'] = array();

// Google Docs Viewer
$GLOBALS['online_viewer'] = true;

//// always use ?p=
//if (!isset($_GET['p']) && empty($_FILES)) {
//    fm_redirect(FM_SELF_URL . '?p=');
//}

// get path
$p = isset($_GET['p']) ? $_GET['p'] : (isset($_POST['p']) ? $_POST['p'] : '');

// clean path
$p = fm_clean_path($p);
define('BASE_PATH', dirname(__FILE__));
define('BASE_URL','http://file.manager');
define('FRONTEND_URL','http://file.manager/frontend');
define('BASE_UPLOAD_URL','http://file.manager/uploads');
define('UPLOAD','uploads');
// instead globals vars
define('FM_PATH', $p);
define('FM_SHOW_HIDDEN', false);