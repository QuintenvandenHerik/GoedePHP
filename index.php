<?php

date_default_timezone_set("Europe/Amsterdam");
if (date("H") < 12) {
$time = "Goedemorgen";
echo "<h1>Goedemorgen";
}
else if (date("H") < 18) {
$time = "Goedemiddag";
echo "<h1>Goedemiddag";
}
else if (date("H") < 23) {
$time = "Goedenavond";
echo "<h1>Goedenavond";
}
else if (date("H") < 6) {
$time = "Goedenacht";
echo "<h1>Goedenacht";
}
echo "<br>Het is nu " . date("H:i</h1>");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Goedemorgen</title>
</head>
<body class="<?php echo $time ?>";>


</body>
</html>
