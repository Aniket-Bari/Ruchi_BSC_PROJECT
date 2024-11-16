<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('db_connect')) {
function db_connect($db_name)
{
    $config = array(
        'dsn'	=> '',
        'hostname' => DB_HOST,
        'username' => DB_USERNAME,
        'password' => DB_PASSWORD,
        'database' => DB_PREFIX.$db_name,
        'dbdriver' => 'mysqli',
        'dbprefix' => '',
        'pconnect' => FALSE,
        'db_debug' => FALSE,//(ENVIRONMENT !== 'production'),
        'cache_on' => FALSE,
        'cachedir' => '',
        'char_set' => 'utf8',
        'dbcollat' => 'utf8_general_ci',
        'swap_pre' => '',
        'encrypt' => FALSE,
        'compress' => FALSE,
        'stricton' => FALSE,
        'failover' => array(),
        'save_queries' => TRUE
    );

    return $config;
}
}
if (!function_exists('do_in_background')) {
function do_in_background($url, $params)
{
    $post_string = http_build_query($params);
    $parts = parse_url($url);
    $errno = 0;
    $errstr = "";

    //Use SSL & port 443 for secure servers
	//Use otherwise for localhost and non-secure servers
	if($parts['scheme'] == 'http'){
    	//For localhost and un-secure server
    	$fp = fsockopen($parts['host'], isset($parts['port']) ? $parts['port'] : 80, $errno, $errstr, 30);
	}
	else{
    	//For secure server
    	$fp = fsockopen('ssl://' . $parts['host'], isset($parts['port']) ? $parts['port'] : 443, $errno, $errstr, 30);
	}
	
    if(!$fp)
    {
    echo "Some thing Problem";
    }
    $out = "POST ".$parts['path']." HTTP/1.1\r\n";
    $out.= "Host: ".$parts['host']."\r\n";
    $out.= "Content-Type: application/x-www-form-urlencoded\r\n";
    $out.= "Content-Length: ".strlen($post_string)."\r\n";
    $out.= "Connection: Close\r\n\r\n";
    if (isset($post_string)) $out.= $post_string;
    fwrite($fp, $out);
    fclose($fp);
}
}