<?php
	include_once 'demos/demo1.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-color:#000000">

			<h1 style="color: white;">WORLD DATABASE</h1>
			<img src="globe.gif" class="avatar"/> 

	<form action = "cwindex.php" method = "Get">
	<select name="table" id="option_btn" class="option">
		<option value="0">Select a table</option>
		<option value="city">city</option>
		<option value="country">country</option>
		<option value="language">language</option> 
	</select>
	<input type = "submit" id="submit_btn" class="submit">
	</form>
	<br>

	<?php
if(isset($_GET["table"])){
	$table = $_GET["table"];
	if($table == "city"){
		echo "<p> <font color=white><form name = 'table1' action = 'table.php' method = 'get'>";
		echo "<input type = 'checkbox' name = 'col[]' value = 'ID' checked>ID";
		echo "<br>";
		echo "<input type = 'checkbox' name = 'col[]' value = 'City_Name' checked>City_Name";
		echo "<br>";
		echo "<input type = 'checkbox' name = 'col[]' value = 'Country_abb' checked>Country_abb";
		echo "<br>";
		echo "<input type = 'checkbox' name = 'col[]' value = 'Province' checked>Province";
		echo "<br>";
		echo "<input type = 'checkbox' name = 'col[]' value = 'Population' checked>Population";
		echo "<br>";
		echo "<br>";
		echo "<input type = 'submit' name = 'submit' value = 'SELECT' id=select_btn class= 'select'>";
		echo "<input type = 'submit' name = 'submit' value = 'INSERT' id=insert_btn class= 'insert'>";
		echo "</form>";
		echo "<br>";
			
	
	}
	else if($table == "country"){
		echo "<p> <font color=white><form name = 'table2' action = 'table2.php' method = 'get'>";
		echo "<input type = 'checkbox' name = 'col2[]' value = 'Country_abb' checked>Country_abb";
		echo "<br>";
		echo "<input type = 'checkbox' name = 'col2[]' value = 'Country_Name' checked>Country_Name";
		echo "<br>";
		echo "<input type = 'checkbox' name = 'col2[]' value = 'Continent' checked>Continent";
		echo "<br>";
		echo "<input type = 'checkbox' name = 'col2[]' value = 'Region' checked>Region";
		echo "<br>";
		echo "<input type = 'checkbox' name = 'col2[]' value = 'Area' checked>Area";
		echo "<br>";
		echo "<input type = 'checkbox' name = 'col2[]' value = 'Year_of_Ind' checked>Year_of_Ind";
		echo "<br>";
		echo "<input type = 'checkbox' name = 'col2[]' value = 'Population' checked>Population";
		echo "<br>";
		echo "<input type = 'checkbox' name = 'col2[]' value = 'Life_Expectancy' checked>Life_Expectancy";
		echo "<br>";
		echo "<input type = 'checkbox' name = 'col2[]' value = 'Gnp' checked>Gnp";
		echo "<br>";
		echo "<input type = 'checkbox' name = 'col2[]' value = 'Gnp_old' checked>Gnp_Old";
		echo "<br>";
		echo "<input type = 'checkbox' name = 'col2[]' value = 'Local_Name' checked>Local_Name";
		echo "<br>";
		echo "<input type = 'checkbox' name = 'col2[]' value = 'Gov_Form' checked>Gov_Form";
		echo "<br>";
		echo "<input type = 'checkbox' name = 'col2[]' value = 'Head_of_State' checked>Head_of_State";
		echo "<br>";
		echo "<input type = 'checkbox' name = 'col2[]' value = 'Capital' checked>Capital";
		echo "<br>";
		echo "<input type = 'checkbox' name = 'col2[]' value = 'Country_code' checked>Country_code";
		echo "<br>";
		echo "<br>";
		echo "<input type = 'submit' name = 'submit' value = 'SELECT' id=select_btn class= 'select'>";
		echo "<input type = 'submit' name = 'submit' value = 'INSERT' id=insert_btn class= 'insert'>";
		echo "</form>";
		echo "<br>";
		
	}
	else if($table == "language"){
		echo "<p> <font color=white><form name = 'table3' action = 'table3.php' method = 'get'>";
		echo "<input type = 'checkbox' name = 'col3[]' value = 'Country_abb' checked>Country_abb";
		echo "<br>";
		echo "<input type = 'checkbox' name = 'col3[]' value = 'Language' checked>Language";
		echo "<br>";
		echo "<input type = 'checkbox' name = 'col3[]' value = 'Official' checked>Official";
		echo "<br>";
		echo "<input type = 'checkbox' name = 'col3[]' value = 'Percentage' checked>Percentage";
		echo "<br>";
		echo "<br>";
		echo "<input type = 'submit' name = 'submit' value = 'SELECT' id=select_btn class= 'select'>";
		echo "<input type = 'submit' name = 'submit' value = 'INSERT' id=insert_btn class= 'insert'>";
		echo "</form>";
		echo "<br>";
		
	}
	else
		echo "Please select a table";
}
	?>

</body>
</html>