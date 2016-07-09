<?php
/**********************************************************
 *** Função Resposável pelo tratamento da URL
 ***
 *** @author Everton William Constantino
 *** @link http://www.evertonwilliam.com.br
 *** @param string $urlpatterns array com os modelos de url
 *** @return url
 /**********************************************************/
function url_response($urlpatterns) {
	foreach ($urlpatterns as $pcre => $app) {
		$file = $_SERVER['DOCUMENT_ROOT'].PROJECT_DIR.'article/pt-br' . $app;
		if (file_exists($file)) {
			if (preg_match("@^{$pcre}$@", REQUEST_URI, $_GET)) {
				include (APPLICATION_DIR . '/' . $app);
				break;
			}
		}else{
			//echo '<pre>';
			//print_r($_SERVER);
			include('./content/404.html');
		}
	}
	return;
}
?>
