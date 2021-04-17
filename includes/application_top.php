<?php 
ob_start();
session_start();

error_reporting(E_ALL); 

putenv("TZ=Asia/Kolkata"); 
date_default_timezone_set("Asia/Kolkata"); 
 
/* Kindly Put Local Or server Path */

$config['base_path']='';
/* Kindly Put Local Or server Path */

/* SITE URL */
$config['SITE_URL']='';
/* SITE URL */

require_once($config['base_path'].'system/configs/common-config.php');
require_once($config['base_path'].'system/functions/common-functions.php');




?>