<?php
	require_once('class/config.php');
	require_once('class/redirect.php');
	require_once('class/language/'.$_COOKIE[LANG].'.php');
	require_once('class/titlepage.php');
?>
<!DOCTYPE HTML>
	<html lang="pt-br" xmlns='http://www.w3.org/1999/xhtml' xmlns:og='http://ogp.me/ns#' />
	  <head>
		<meta charset="UTF-8" />
		<meta name="language" content="pt-br"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<title>Guia Fedora - <?=getTitlePage()?></title>

		<meta name="msapplication-TileImage" content="<?=REQUEST_URLF?>design/logo.png">
		<meta itemprop="name" content="Guia Fedora" />
		<meta itemprop="url" content="<?=REQUEST_URLF?>" />
		<meta name="twitter:title" content="Guia Fedora" />
		<meta name="twitter:description" content="Guia Fedora - Seu guia de consultas sobre o sistema operacional Linux Fedora" />

		<meta property="og:locale" content='pt_BR' />
		<meta property='og:type' content='Guias e Manuais' />
		<meta property="og:site_name" content='Guia Fedora' />
		<meta property="article:tag" content='Linux, Fedora, Red Hat, Pós Instalação Fedora, Configuração Linux Fedora' />
		<meta property='og:title' content='Guia Fedora - Seu guia de consultas sobre o sistema operacional Linux Fedora' />
		<meta property='og:description' content='Guia do usuario do sistema Linux Fedora - tudo o que voce precisa saber sobre o Linux Fedora' />
		<meta property='og:url' content='<?=REQUEST_URLF?>' />
		<meta property='og:image' content='<?=REQUEST_URLF?>design/logo.png'/>

		<meta name="twitter:card" content="summary"/>
		<meta name="twitter:site" content="@evertonwilliamc"/>
		<meta name="twitter:domain" content="Everton William Constantino"/>
		<meta name="twitter:creator" content="http://www.twitter.com/evertonwilliamc"/>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">

		<!-- For iPad with high-resolution Retina display running iOS: -->
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?=REQUEST_URLF?>design/152x152.png">
		<!-- For iPad with high-resolution Retina display running iOS: -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=REQUEST_URLF?>design/144x144.png">
		<!-- For iPhone with high-resolution Retina display running iOS: -->
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?=REQUEST_URLF?>design/120x120.png">
		<!-- For iPhone with high-resolution Retina display running iOS: -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=REQUEST_URLF?>design/114x114.png">
		<!-- For the iPad mini and the first- and second-generation iPad on iOS: -->
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?=REQUEST_URLF?>design/76x76.png">
		<!-- For the iPad mini and the first- and second-generation iPad on iOS: -->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=REQUEST_URLF?>design/72x72.png">
		<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
		<link rel="apple-touch-icon-precomposed" href="<?=REQUEST_URLF?>design/144x144.png">
		<!-- Tile icon for Win8 (144x144 + tile color) -->

		<meta name="google-site-verification" content="YIv32qaTUhgsLeijqA_zb5P-9yhubKpqfoWB00NCFeI" />
		<meta name="classification" content="Como Instalar o Fedora, Instalação de Sistemas Operacionais, Manual do Usuário, Guia do Usuário, Tecnologias, Informática, TI" />
		<meta name="Description" content="Guia do usuário do sistema Linux Fedora - tudo o que você precisa saber sobre o Linux Fedora" />
		<meta name="Keywords" content="Linux, Fedora, RHEL, Red-Hat, manual, guia, instalação, configuração, pos-instalação, utilitários, aplicativos, programas, GNU, GNU Linux, Aprendendo Linux, Entendendo o Linux, GNU-Linux, Documentação Fedora" />
		<meta name="robots" content="index,follow" />
		<meta name="robots" content="noarchive" />
		<meta name="author" content="Everton William Constantino"/>
		<meta name="reply-to" content="contato@evertonwilliam.com.br" />
		<meta name="Custodian" content="Everton William Constantino" />
		<meta name="generator" content="Notepad++" />
		<meta name="copyright" content="1996-GNU" />
		<meta http-equiv="pragma" content="no-cache" />
		<meta name="revisit-after" content="5 days" />
		<meta name="rating" content="general" />
		<link rel="icon" type="image/png" href="<?=REQUEST_URLF?>design/favicon.png" />

		<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Comfortaa:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Gruppo&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Poiret+One&subset=latin,latin-ext,cyrillic' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="<?=REQUEST_URLF?>frontend/css/reset.css" />
		<link rel="stylesheet" href="<?=REQUEST_URLF?>frontend/css/normalize-min.css" />

		<link rel="stylesheet" href="<?=REQUEST_URLF?>frontend/css/style.css" />
		<link rel="stylesheet" href="<?=REQUEST_URLF?>frontend/css/m250.css" />
		<link rel="stylesheet" href="<?=REQUEST_URLF?>frontend/css/m300.css" />
		<link rel="stylesheet" href="<?=REQUEST_URLF?>frontend/css/m400.css" />
		<link rel="stylesheet" href="<?=REQUEST_URLF?>frontend/css/m600.css" />
		<link rel="stylesheet" href="<?=REQUEST_URLF?>frontend/css/m800.css" />
		<link rel="stylesheet" href="<?=REQUEST_URLF?>frontend/css/m-all.css" />

		<link type="text/css" rel="stylesheet" href="<?=REQUEST_URLF?>frontend/syntax-high-lighter/styles/shCore.css"/>
		<link type="text/css" rel="stylesheet" href="<?=REQUEST_URLF?>frontend/syntax-high-lighter/styles/shThemeDefault.css"/>

		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- FACEBOOK CONNECT -->
		<script src="http://connect.facebook.net/pt_BR/all.js#xfbml=1"></script>

	</head>
	<body>
		<div id="all">

		<!-- INIT HEADER -->

			<div id="header">

				<div id="barra">
					<div class="url">
					<?='...'.(REQUEST_URI != '/' ? REQUEST_URI : "/introducao/prefacio") ?>
					</div>
					<div class="idioma">
						<form id="lang" action="." method="post">
							<select name="lang">
								<option value="pt-br" selected="selected">PT-BR</option>
							</select>
							<input type="submit" value="OK">
						</form>
					</div>
				</div>

				<div class="bandheader">
						<a id="btmainmenu" href="#"><span class="fa fa-bars medium"></span></a>
						<h1><a href="<?=REQUEST_URLF?>">Guia Fedora</a></h1>
				</div>

				<div class="social">
					<ul>
						<li><a href="javascript: void(0);" onclick="window.open('http://www.facebook.com/share.php?u=<?=REQUEST_URLF?>&t=Guia Linux Fedora','fcompart', 'toolbar=0, status=0, width=650, height=450');"><span class="fa fa-facebook-square small"></span></a></li>
						<li><a href="javascript: void(0);" onclick="window.open('https://plus.google.com/share?url=<?=REQUEST_URLF?>','gcompart', 'toolbar=0, status=0, width=650, height=450');"><span class="fa fa-google-plus-square small"></span></a></li>
						<li><a href="javascript: void(0);" onclick="window.open('http://twitter.com/share?text=Guia Linux Fedora&url=<?=REQUEST_URLF?>&counturl=http://guiafedora.evertonwilliam.com.br&via=evertonwilliamc','tcompart', 'toolbar=0, status=0, width=650, height=450');"><span class="fa fa-twitter-square small"></span></a></li>
						<li><a href="javascript: void(0);" onclick="window.open('http://pinterest.com/pin/create/button/?url=<?=REQUEST_URLF?>&media=<?=REQUEST_URLF?>/design/favicon.png&description=Guia Fedora','pcompart', 'toolbar=0, status=0, width=650, height=450');"><span class="fa fa-pinterest-square small"></span></a></li>
					</ul>
				</div>

			</div>

			<!-- INIT MAINMENU -->
			<div id="mainmenu">
				<?php require_once('content/mainmenu.php'); ?>
			</div>


			<!-- INIT CONTENT -->
			<div id="content">
				<?php require_once('class/urlmap.php'); ?>
			</div>

			<!-- INIT publicity -->
			<div id="publicity">
					<h1>Publicidade</h1>
					<?php require_once('content/adsense.php'); ?>
			</div>

			<!-- INIT FOOTER -->
			<div id="footer">
				<footer>
				  <p>Copyright&copy; 2015 - Guia Fedora</p>
				</footer>
			</div>

		</div>

		<!-- INIT SCRIPT SESSION -->
		<script src="<?=REQUEST_URLF?>frontend/js/jquery.min.js"></script>
		<script src="<?=REQUEST_URLF?>frontend/js/function.js"></script>

		<!--
			syntax-high-lighter:
			https://about.me/alexgorbatchev
			http://alexgorbatchev.com/SyntaxHighlighter/manual/brushes/
		-->
		<script type="text/javascript" src="<?=REQUEST_URLF?>frontend/syntax-high-lighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="<?=REQUEST_URLF?>frontend/syntax-high-lighter/scripts/shBrushBash.js"></script>
		<script type="text/javascript" src="<?=REQUEST_URLF?>frontend/syntax-high-lighter/scripts/shBrushPhp.js"></script>
		<script type="text/javascript" src="<?=REQUEST_URLF?>frontend/syntax-high-lighter/scripts/shBrushXml.js"></script>
		<script type="text/javascript">
			SyntaxHighlighter.config.clipboardSwf = '<?=REQUEST_URLF?>frontend/syntax-high-lighter/scripts/clipboard.swf';
			SyntaxHighlighter.config.bloggerMode = true;
			SyntaxHighlighter.defaults['html-script'] = true;
			SyntaxHighlighter.defaults['toolbar'] = false;
			SyntaxHighlighter.all();
		</script>

	</body>
</html>
