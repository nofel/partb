<?php 


 ?>
<html>
<head>
	<title>search</title>
</head>
<body>
	<h1>Test</h1>
<form method="GET" action="result.php">
	<label>Wine Name</label> <input type="text" name="wine_name"><br>
	<label>Winery Name</label> <input type="text" name="winery_name"><br>
	<select name="region">
		<option value="all">All</option>
	</select> <br>
	
	<!-- grape variety -->
	<select name="grape_variety">
		<option value="all">All</option>
	</select><br>

	<select name="year">
		<option value="all">All</option>
	</select> <br>




	<input type="submit" value="search">

</form>
</body>
</html>