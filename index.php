<?php include("config/db_config.php"); ?>
<?php include("content/paginanaam.php"); ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Workshop CRUD</title>
	
<link href="css/mijnstijltje.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<div class="container">
		
	<?php //include("content/menu.php"); ?>
		
	<h1>CRUD worksjopje</h1>
		
		<?php if($paginanaam=="home") { ?>
	
		
		Een "crud" bevat de 4 belangrijkste interacties tussen je applicatie en de database:
		<ol>
			<li><a href="index.php?pagina=select">.....</a></li>
			<li><a href="index.php?pagina=insert">.....</a></li>
			<li><a href="index.php?pagina=delete&stap=1">.....</a></li>
			<li><a href="index.php?pagina=bewerken">.....</a></li>
		</ol>
		
		<h3>Hiervoor heb je nodig:</h3>
		<ul>
			<li>Een database</li>
			<li>Een tabel</li>
			<li>Een verbinding tussen je applicatie en je DB</li>
			<li>Een pagina met de query</li>
		</ul>
		
		<?php } ?>
		
		<?php if($paginanaam=="select") 	{ include("content/select.php"); }?>
		<?php if($paginanaam=="insert") 	{ include("content/insert.php"); }?>
		<?php if($paginanaam=="delete") 	{ include("content/delete.php"); }?>
		<?php if($paginanaam=="bewerken") 	{ include("content/bewerken.php"); }?>
		<?php if($paginanaam=="update") 	{ include("content/update.php"); }?>
	
	</div>
	
</body>
</html>