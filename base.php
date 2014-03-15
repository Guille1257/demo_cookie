<!DOCTYPE html>
<html>
	<body>
	
	<head>
		<meta charset ="utf-8"/>
			<?php	
			if(isset($_COOKIE['skin_demo']))
			{
				$skin = $_COOKIE['skin_demo'];
				
				switch($skin)
				{
					case "bleu":
					echo '<link rel="stylesheet" href="baseBleu.css"/>';
					break;
					
					case "noir":
					echo '<link rel="stylesheet" href="baseNoir.css"/>';
					break;
				}
			}
			
			else
			{
				try
				{
					setcookie('skin_demo', 'bleu', time() + (86400*7));
				} catch(Exception $e)
				{
				
				}
					echo '<link rel="stylesheet" href="baseBleu.css"/>';				
			}
			?>
			
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
		<script src="base.js"></script>	
		
		<title> Demo cookie </title>
	</head>
	<div id ="base">
	
		<div class="content">
			<p> Allo </p>
		</div>
	
		<div class="content">
			<p> Allo </p>
		</div>
		
		<div id = "button_container">
			<button type="button" id ="switch_noir" onclick="switchNoir();"> Switch noir </button>
			<button type="button" id ="switch_bleu" onclick="switchBleu();"> Switch bleu </button>
		</div>
		
	</div>
	

	
	</body>
</html>