<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<nav class="nav">
		<ul class="ul">
			<li class="li"><a href="index.php">Home</a></li>
			<li class="li"><a href="what.php">What</a></li>
			<li class="li"><a href="skills.php">Skills</a></li>
			<li class="li"><a href="pricing.php">Pricing</a></li>
			<li class="li"><a href="blog.php">Blog</a></li>
			<li class="li"><a href="experiences.php">Experiences</a></li>
		</ul>
	</nav>

    <table class="what_form">
		<tr>
			<th><input type="text" placeholder="title" name="var_name" class="conf_input"></th>
			<th><input type="text" placeholder="description" name="var_value" class="conf_input"></th>
			<th><input type="text" placeholder="img" name="var_description" class="conf_input"></th>
			<th><input type="text" placeholder="title" name="var_title" class="conf_input"></th>
			<button class="save" action="saveInDb.php" method="post">Save</button>
		</tr>
	</table>
</body>
</html>