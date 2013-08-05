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
	if(isset($_POST['name'], $_POST['comment'])){
		$comment = "
		<div class='comment'>
			<img src='http://gravatar.com/avatar/". md5($_POST['mail']) . "'/>
			<span class='name'>". $_POST['name'] . "</span>
			<p>". htmlspecialchars($_POST['comment']) . "</p>
		</div>
		";
		#echo $comment;
		chdir($txt_dir);
		$file = $_POST['id'].".txt";
		$handle = fopen($file, "a");
		fwrite($handle, $comment);
		fclose($handle);
		echo "Kommentar eingetragen. <a href='display.php?id=". $_POST['id'] . "'>Zurück</a>";
	}else{
		echo "Du hast ein paar Felder vergessen... <a href='display.php?id=". $_POST['id'] . "'>Zurück</a>";
	}
?>
</body>