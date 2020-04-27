<?php
    include_once 'demos/demo1.php';
    include 'cwindex.php';

    if(isset($_GET['delete'])){ //if we pressed insert

        $key = $_GET["primKey"];
        $inssql = "'" . $key . "'";
        //echo "$key";

        $sql = "DELETE FROM city WHERE ID=($inssql)";

        if(mysqli_query($conn,$sql)){
            echo "<p> <font color=white>Row deleted";
        }
        else
            echo "<p> <font color=white>Row not deleted";

        echo "<br>";

    }


?>
