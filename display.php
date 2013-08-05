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
	$id= $_GET["id"];
	$file = $id.".txt";
	chdir($txt_dir);
	if(isset($id)){
		if(file_exists($file)){
			readfile($id.".txt");
		}else{
			touch($file);
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
	<textarea name="comment" placeholder="Dein Kommentar" rows="15"></textarea>
	<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/> <br />
	<input type="submit" />
</form>
</body>