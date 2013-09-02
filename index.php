<?php
$section = 'Work';
if ($_GET['q']) {
	$section = preg_replace('/\/$/', "", $_GET['q']);
}

$qrurl = "http://qrcode.kaywa.com/img.php?d=" . urlencode("http://www.da-puck.com/Resume/");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
		<title>Ian McCall</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="stylesheet" type="text/css" title="orange" href="/Resume/css/style.css">
		<!--<link rel="alternate stylesheet" type="text/css" title="blue" media="screen" href="/Resume/css/blue_style.css">-->
		<link rel="stylesheet" type="text/css" title="print" media="print" href="/Resume/css/print.css">
		<link rel="stylesheet" type="text/css" href="/Resume/css/common.css">
		<script type="text/javascript" src="/Resume/js/libs/modernizr-2.0.6.min.js"></script>
		<script type="text/javascript" src="/Resume/js/libs/prototype.js"></script>
		<script type="text/javascript" src="/Resume/js/libs/s2.js"></script>
		<script type="text/javascript" src="/Resume/js/dynamicPage.js"></script>
		<script type="text/javascript">
			document.observe('dom:loaded', function(){
				dynamicPage.initialize("http://<? echo $_SERVER['HTTP_HOST']; ?>/Resume/","<? echo $section; ?>");
				
				$('navToggle').observe('click', function() {
					$('pageNav').toggle();
				});
			}.bind(this));
		</script>
		<style type="text/css">
			@media only print {

				body {
					line-height: normal;
				}

				p, h1, h2, h3, h4 {
					margin-top: .5em;
					margin-bottom: .5em;
				}

				ul {
					margin-top: 0px;
					margin-bottom: 5px;
				}

				#main article h1 {
					font-size: 1.3em;
				}

				#main article h2 {
					font-size: 1em;
					font-weight: normal;
				}

				#main article h3 {
					font-size: 1em;
					display: inline-block;
				}

				#main article h4 {
					font-size: 0.95em;
					font-weight: normal;
					display: inline-block;
				}

				article {
					display: block !important;
					opacity: 100 !important;
				}

				#title {
					color: black;
				}

				#head-left {
					float: left;
				}

				aside {
					display: none;
				}

				nav {
					display: none;
				}
				
				#header-container {
					background-color: transparent;
				}

				#header-container h1 {
					margin-bottom: 0px;
				}

				/*page-break {
				 display:block;
				 page-break-before:always;
				 }*/

				#header-container {
					border-bottom: none !important;
				}

				#footer-container {
					border-top: none;
				}

				#main {
					padding: 0px;
				}

				a {
					color: black;
				}

				a:visited {
					color: black;
				}

				.about {
					display: none;
				}

				.noprint {
					display: none !important;
				}

				#html5_badge {
					display: none;
				}

				#footer-container {
					display: none;
				}

				h3.role, div.role > * {
					margin-top: 0px;
					margin-bottom: 0px;
				}
			}

			a.active {
				background-color: #1ca46d;
			}

			table tbody tr td {
				border: 1px solid black;
			}

			div#articles article {
				width: 100%;
				overflow: hidden;
			}

			li ul {
				margin: 0;
			}

			#header-container {
				border-bottom: 20px solid #1ca46d;
			}

			#header-container header select {
				width: 100%;
			}

			#main aside {
				border-top: 20px solid #1ca46d;
			}

			#footer-container {
				border-top: 20px solid #1ca46d;
			}

			#qrcode {
				display: none;
			}
			
			#navToggle {
				float: right;
			}
			
			#title {
				float: left;
			}
			
			nav {
				clear: both;
			}

			@media only screen and (min-width: 480px) {
				#head-left {
					float: left;
				}

				div#articles {
					float: none;
					width: 100%;
				}

				#header-container header select {
					width: auto;
				}

				#qrcode {
					display: inline;
				}
				
				#navToggle {
					display: none;
				}
				
				nav {
					clear: none;
					display: block !important;
				}
			}

			@media only screen and (min-width: 768px) {
				div#articles {
					float: left;
					width: 57%;
				}

				#header-container header select {
					width: auto;
				}
			}

			@media only screen and (min-width: 1140px) {
				div#articles {
					float: left;
					width: 57%;
				}

				#header-container header select {
					width: auto;
				}
			}

			@media only screen {
				.hide {
					display: none;
				}

				.page-break {
					display: none;
				}
			}

		</style>
	</head>
	<body>
		<?
		// print $_SERVER['HTTP_HOST'];
		// print "<br />";
		// print $_SERVER['REQUEST_URI'];
		?>
		<div id="header-container">
			<header class="wrapper clearfix">
				<div id="head-left">
					<a style="text-decoration: none;" href="/Resume/"><h1 id="title">Ian McCall</h1></a>
					<h1 id="navToggle" class="noprint">&#9776;</h1>
					<div style="clear:both;" class="print-only">
						<b>Address:</b>
						12 Crows Nest Ct.
						Grayslake, IL, 60030
						<br />
						<b>Phone:</b> (312) 725-9586 <b>E-mail: </b>imccall [at] iit.edu
					</div>
				</div>
				<img class="print-only" style="float: right; width:100px; height: auto;" src="<? print $qrurl; ?>" alt="" />
				<nav id="pageNav">
					<ul>
						<li>
							<a href="Work" class="rewrite <? echo ($section == 'Work') ? 'active' : ''; ?>">Work</a>
						</li>
						<li>
							<a href="Education" class="rewrite <? echo ($section == 'Education') ? 'active' : ''; ?>">Education</a>
						</li>
						<li>
							<a href="Technology" class="rewrite <? echo ($section == 'Technology') ? 'active' : ''; ?>">Technology</a>
						</li>
						<li>
							<a href="Other" class="rewrite <? echo ($section == 'Other') ? 'active' : ''; ?>">Other</a>
						</li>
					</ul>
				</nav>
			</header>
		</div>
		<div id="main-container">
			<div id="main" class="wrapper clearfix">
				<div id="articles">
					<article id="Work" class="page"  <? echo ($section != 'Work') ? 'style="display:none;"' : ''; ?>>
						<? echo file_get_contents('sections/work.html'); ?>
					</article>
					<div class="page-break"></div>
					<article id="Education" class="page" <? echo ($section != 'Education') ? 'style="display:none;"' : ''; ?>>
						<? echo file_get_contents('sections/education.html'); ?>
					</article>
					<div class="page-break"></div>
					<article id="Technology" class="page" <? echo ($section != 'Technology') ? 'style="display:none;"' : ''; ?>>
						<? echo file_get_contents('sections/technology.html'); ?>
					</article>
					<div class="page-break"></div>
					<article id="Other" class="page" <? echo ($section != 'Other') ? 'style="display:none;"' : ''; ?>>
						<? echo file_get_contents('sections/other.html'); ?>
					</article>
				</div>
				<aside>
					<h3>Contact Information</h3>
					<p>
						<b>Address:</b>
						<br />
						12 Crows Nest Ct.
						<br />
						Grayslake, IL, 60030
					</p>
					<p>
						<b>Phone:</b> (312) 725-9586
					</p>
					<p>
						<b>E-mail: </b><a>imccall [at] iit.edu</a>
					</p>
				</aside>
			</div>
			<!-- #main -->
		</div>
		<!-- #main-container -->
		<div id="footer-container">
			<footer class="wrapper">
				<!--<h3>footer</h3>-->
				<img id="qrcode" alt="qrcode" src="img/qr.png" />
				<a href="http://www.w3.org/html/logo/"> <img src="http://www.w3.org/html/logo/badge/html5-badge-h-css3-semantics.png" width="165" height="64" alt="HTML5 Powered with CSS3 / Styling, and Semantics" title="HTML5 Powered with CSS3 / Styling, and Semantics"> </a>
			</footer>
		</div>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-29762064-1']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</body>
</html>
