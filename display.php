<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Kommentare zu <?php echo $_GET['id']; ?></title>
	<link rel="stylesheet" href="./comments.css" />
</head>
<body>
	<?php
	require_once("config.php");
	# the magic begins!
	$id = str_replace(".", "", str_replace("/", "", $_GET["id"]));
	$file = $id.".comment";
	chdir($txt_dir);
	if($id != ""){
		if(file_exists($file)){
			echo nl2br(file_get_contents($file));
		}else{
			echo "Noch keine Kommentare"; 
			//touch($file);
		}
	}else{
		exit("Sorry. But THIS went wrong.");
	}
?>
<hr />
<form action="post.php" method="post">
	<input type="text" name="name" placeholder="Dein Name" />
	<input type="e-mail" name="mail" placeholder="deine@mail.de (optional)" />
	<input type="text" name="website" placeholder="Deine Website (optional)" /> <br/>
	<textarea name="comment" placeholder="Dein Kommentar" rows="15"></textarea> <br />
	Was ist der Sinn des Lebens? <input type="text" name="spam-protection"/> Falls du das Buch "Per Anhalter durch die Galaxis" nicht gelesen hast, <a href="http://www.wolframalpha.com/input/?i=sense+of+life">hilft dir vielleicht das weiter.</a>
	<input type="hidden" name="id" value="<?php echo $id; ?>"/> <br />
	<input type="submit" />
</form>
</body>
