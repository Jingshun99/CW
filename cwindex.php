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
		echo " ID<input type = 'checkbox' name = 'col[]' value = 'ID' checked>";
		echo " City_Name<input type = 'checkbox' name = 'col[]' value = 'City_Name' checked>";
		echo " Country_abb<input type = 'checkbox' name = 'col[]' value = 'Country_abb' checked>";
		echo " Province<input type = 'checkbox' name = 'col[]' value = 'Province' checked>";
		echo " Population<input type = 'checkbox' name = 'col[]' value = 'Population' checked>";
		echo "<br>";
		echo "<input type = 'submit' name = 'submit' value = 'SELECT' id=select_btn class= 'select'>";
		echo "<input type = 'submit' name = 'submit' value = 'INSERT' id=insert_btn class= 'insert'>";
		echo "</form>";
		echo "<br>";
			
	
	}
	else if($table == "country"){
		echo "<p> <font color=white><form name = 'table2' action = 'table2.php' method = 'get'>";
		echo "Country_abb<input type = 'checkbox' name = 'col2[]' value = 'Country_abb' checked>";
		echo " Country_Name<input type = 'checkbox' name = 'col2[]' value = 'Country_Name' checked>";
		echo " Continent<input type = 'checkbox' name = 'col2[]' value = 'Continent' checked>";
		echo " Region<input type = 'checkbox' name = 'col2[]' value = 'Region' checked>";
		echo " Area<input type = 'checkbox' name = 'col2[]' value = 'Area' checked>";
		echo " Year_of_Ind<input type = 'checkbox' name = 'col2[]' value = 'Year_of_Ind' checked>";
		echo " Population<input type = 'checkbox' name = 'col2[]' value = 'Population' checked>";
		echo " Life_Expectancy<input type = 'checkbox' name = 'col2[]' value = 'Life_Expectancy' checked>";
		echo " Gnp<input type = 'checkbox' name = 'col2[]' value = 'Gnp' checked>";
		echo " Gnp_old<input type = 'checkbox' name = 'col2[]' value = 'Gnp_old' checked>";
		echo " Local_Name<input type = 'checkbox' name = 'col2[]' value = 'Local_Name' checked>";
		echo " Gov_Form<input type = 'checkbox' name = 'col2[]' value = 'Gov_Form' checked>";
		echo " Head_of_State<input type = 'checkbox' name = 'col2[]' value = 'Head_of_State' checked>";
		echo " Capital<input type = 'checkbox' name = 'col2[]' value = 'Capital' checked>";
		echo " Country_code<input type = 'checkbox' name = 'col2[]' value = 'Country_code' checked>";
		echo "<br>";
		echo "<input type = 'submit' name = 'submit' value = 'SELECT' id=select_btn class= 'select'>";
		echo "<input type = 'submit' name = 'submit' value = 'INSERT' id=insert_btn class= 'insert'>";
		echo "</form>";
		echo "<br>";
		
	}
	else if($table == "language"){
		echo "<p> <font color=white><form name = 'table3' action = 'table3.php' method = 'get'>";
		echo "Country_abb<input type = 'checkbox' name = 'col3[]' value = 'Country_abb' checked>";
		echo " Language<input type = 'checkbox' name = 'col3[]' value = 'Language' checked>";
		echo " Official<input type = 'checkbox' name = 'col3[]' value = 'Official' checked>";
		echo " Percentage<input type = 'checkbox' name = 'col3[]' value = 'Percentage' checked>";
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