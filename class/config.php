<?php
/**********************************************************
*** CONJUNTO DE DEFINIÇÕES DE VARIÁVEIS GLOBAIS
***
*** @author Everton William Constantino
*** @link http://www.evertonwilliam.com.br
/**********************************************************/
if(isset($_POST['lang'])){
	setcookie('LANG',$_POST['lang'],time() + (86400 * 30), "/");
	header("location:.");
}else if(!isset($_COOKIE["LANG"])){
	setcookie('LANG','pt-br',time() + (86400 * 30), "/");
	header("location:.");
}

// DIRECTORY RAIZ
if(!defined('PROJECT_DIR'))
	define('PROJECT_DIR', '/guiafedora/');

// DIRECTORY APPLICATION
if(!defined('APPLICATION_DIR'))
	define('APPLICATION_DIR', 'article/'.$_COOKIE['LANG']);

// URL SEND
if(!defined('REQUEST_URI'))
	define('REQUEST_URI',str_replace(PROJECT_DIR,'/',$_SERVER['REQUEST_URI']));

// URL SERVER HOST
if(!defined('REQUEST_URLF'))
	define('REQUEST_URLF', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].PROJECT_DIR);

// FILE READY
if(!defined('REQUEST_URL')){
	$url = str_replace(PROJECT_DIR,'',$_SERVER['REQUEST_URI'].'.html');
	if($url == '.html'){
		define('REQUEST_URL','introducao/prefacio.html');
	}else{
		define('REQUEST_URL',str_replace(PROJECT_DIR,'/',$_SERVER['REQUEST_URI'].'.html'));
	}
}
?>
