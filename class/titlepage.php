<?php
	function getTitlePage(){
		$filename = '.'.$_SERVER[PROJECT_ROOT] . '/article/pt-br/' . REQUEST_URL;
		//$title = '.'.$_SERVER[PROJECT_ROOT] . '/article/pt-br' . REQUEST_URL;
		$handle = file($filename);
		foreach ($handle as $line_num => $line) {
	    	if($line_num == '1'){
	    		$title = strip_tags(trim($line));
	    	}
		}
		if($title != ""){
			return ucfirst($title);
		}else{
			return ucfirst("prefácio");
		}
		
	}

?>