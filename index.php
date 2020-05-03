<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>homework2</title>
<link rel="stylesheet" href="styles/style.css">

</head>
<body>
	<h1>Lorem ipsum</h1>
	<section class="txt">
		<p>"Lorem ipsum dolor sit amet,
			consectetur adipiscing elit, 
			sed do eiusmod tempor incididunt 
			ut labore et dolore magna aliqua.
			Ut enim ad minim veniam, quis nostrud 
			exercitation ullamco laboris nisi ut
			aliquip ex ea commodo consequat. Duis
			aute irure dolor in reprehenderit in 
			voluptate velit esse cillum dolore eu 
			fugiat nulla pariatur. Excepteur sint 
			occaecat cupidatat non proident, sunt
			in culpa qui officia deserunt mollit
			anim id est laborum."</p>
	</section>
<form action="index.php" method="GET">
<label>Текст:</label>
<textarea name="text_box"></textarea>

<label for="Font-family"  class="indent">Font-family</label>
	
	<?php
	 $s = array("Arial", "Times New Roman", "Comic Sans MS", "Calibri", "Consolas", "Lucida Calligraphy");

	echo "<select name='family'>";
	$select="";
 
	foreach($s as $k => $v) {
  	$select .= "<option value='$k'>$v\n";
	}
		echo "$select </select>";
	?>

	<label  class="indent">Font-size</label>

	<?php
		$arr = [10];
		$result = 0;
		foreach ($arr as $elem) {
		$result += $elem;
		}
		echo "<input  name=\"size\" style=\"margin: 10px 0;\" min=\"1\" max=\"$result\" type=\"number\">"; 
	?>
	<?php
		echo "<select name='sel'>";
			$select="";
			$mark = ["bold", "italic", "underline"];
			foreach($mark as $k => $v) {
			$select .= "<option value='$k'>$v\n";
			}
		echo "$select</select>";
	?>	
	<label  class="indent">Color: <input type="color" name="color" style="width: 150px;"></label>
	<label  class="indent">Использовать фон?</label>
	<?php
	$bgcolor = "<body id='bgcolorYes'>";
	echo "<input checked=\"checked\" name=\"bgcolor\" type=\"radio\" value=\"$bgcolor\" id=\"bgcolorYes\"><label for=\"bgcolorYes\">Да</label>";
	
	$NullColor = "<body id='bgcolorNo'>";
	echo "<input name=\"bgcolor\" type=\"radio\" value=\"$NullColor\" id=\"bgcolorNo\"><label for=\"bgcolorNo\">Нет</label>";
	?>
	<div  class="indent button">
		<input type=submit name='doSend' value='Вывести' style="padding: 5px 80px;">
	</div>
  </form>
 </body>
</html>

<?php

if (isset($_GET['doSend'])){
	if(($_GET['text_box'] == "")) {
		echo "<div style=\"color: red; padding: 10px; margin: 30px;\">Введите в поле текст!</div>";
	   }
	   
	   else {
		$text_box = $_GET['text_box'];
		$family = $_GET['family'];
		$sel = $_GET['sel'];
		$size = $_GET['size'];
		$color = $_GET['color'];
		$bgcolor = $_GET['bgcolor'];
		echo "$bgcolor";
		echo '<div class=\'container\'><span style="color:' .$color. ';font-family:', $s[$family],'; font-size:' , $size . 'em; font-weight:'.$mark[$sel],'; font-style:'  .$mark[$sel],'; text-decoration: ' .$mark[$sel], ';">' . $text_box . '</span></div>';
	   }
	}
?>