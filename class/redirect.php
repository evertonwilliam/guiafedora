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
	$msg = '';
	foreach ($urlpatterns as $pcre => $app) {
		$file = '.'.$_SERVER[PROJECT_ROOT] . '/article/pt-br/' . $app;
		if (file_exists($file)) {
			if (preg_match("@^{$pcre}$@", REQUEST_URI, $_GET)) {
				include (APPLICATION_DIR . '/' . $app);
				break;
			}
		}else{
			include('./content/404.html');
		}
	}
	return;
}
?>