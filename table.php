

<?php
    include_once 'demos/demo1.php';
    include 'cwindex.php';

            
    if ($_GET['submit']=='INSERT'){ //if we pressed insert

        echo "<p> <font color=white>Enter information:";
        //echo "<br>";
        //echo "<i>For inserting a text, please enclose text with quotation(' ')</i>";
        echo "<br>";
        echo "<br>";

        //form
        echo "<form action = 'insert1.php' method = 'get'>";

        if(!empty($_GET["col"])){
            foreach($_GET["col"] as $col){
                echo "<p> <font color=white>$col<input type = 'checkbox', value = '$col', name = 'col[]' checked> : <input type = 'text' name = 'inscol[]' id='datacol' class='data'>";
                echo "<br>";
                echo "<br>";
            }
            echo "<input type = 'submit' name = 'insert' value = 'submit' id='submit1_btn' class='submit1'>";
        }

        echo "</form>";
        echo "<br>";
    echo "<table border='1' cellpadding='2' bordercolor='#c23616'>";
    echo "<tr>";
    if(isset($_GET['submit'])){
        if(!empty($_GET["col"])){
            foreach($_GET["col"] as $col){
                echo"<th><p> <font color=white>$col</th>";
            }
            echo"<th><p> <font color=white>ACTIONS</th>";
        echo"</tr>";

		$sql = "SELECT * FROM city;";
        $result = mysqli_query($conn, $sql);

			while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                foreach($_GET["col"] as $col){
                    echo "<td><p> <font color=white>".$row["$col"]."</td>";
                }
                echo "<td><input type = 'submit' value = 'UPDATE' id='update_btn' class= 'update'> <input type = 'submit' value = 'DELETE' id='delete_btn' class= 'delete'></td>";
                echo "</tr>";
            }
        }
        else{
            echo "<p> <font color=white>Please select at least one column";
        }
    }
        echo "</table>";
    }

    else { //if we pressed select
    echo "<br>";
    echo "<table border='1' cellpadding='2' bordercolor='#c23616'>";
    echo "<tr>";
    if(isset($_GET['submit'])){
        if(!empty($_GET["col"])){
            foreach($_GET["col"] as $col){
                echo"<th><p> <font color=white>$col</th>";
            }
            echo"<th><p> <font color=white>ACTIONS</th>";
        echo"</tr>";

		$sql = "SELECT * FROM city;";
        $result = mysqli_query($conn, $sql);

			while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                foreach($_GET["col"] as $col){
                    echo "<td><p> <font color=white>".$row["$col"]."</td>";
                }
                echo "<td><input type = 'submit' value = 'UPDATE' id='update_btn' class= 'update'> <input type = 'submit' value = 'DELETE' id='delete_btn' class= 'delete'></td>";
                echo "</tr>";
            }
        }
        else{
            echo "<p> <font color=white>Please select at least one column";
        }
    }
        echo "</table>";
}
?>