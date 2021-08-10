
<!-- <table>
<tr>
<th>Number</th>
<th>Title</th>
<th>Name of File</th>
<th>Preview</th>
<th>Type of file</th>
<th>Original/scan/copy</th>
<th>Where is the Original?</th>
<th>Time period</th>
<th>When produced?</th>
<th>Where produced?</th>
<th>Author</th>
<th>Size</th>
<th>Description</th>
<th>Source</th>
<th>Signature</th>
<th>Copyright situation</th>
<th>Where is the object now?</th>
<th>Found by</th>
<th>Found when</th>
<th>Date of Production</th>
<th>Additional info</th>
</tr>

<?php
//outputs if there are any error
// if($mysqli->connect_errno){
//     echo "Failed to connect to MySQL." . $mysqli->connect_errno. $mysqli->connect_error;
// }

//echo $mysqli->host_info . "<br>";

// echo "<h2>The database.</h2>";

// //connects to the databse's table
// $sql = "SELECT * FROM dropbox";
// $result = $mysqli->query($sql);

// if ($result->num_rows > 0) {
  // output data of each row
//   while($row = $result->fetch_assoc()) {
//     //echo "number: " . $row["Current_number"]. " - Title: " . $row["Title"]. " " . $row["Name_of_file"]. "<br>";
//     echo "<tr><td>" . $row["Current_number"]. "</td><td>" . $row["Title"] . "</td><td>" . $row["Name_of_file"]. "</td></tr>". $row["Preview"] 
//     . "</td><td>" . $row["Type_of_file"] . "</td><td>" . $row["Original_or_scan_or_copy"] . "</td><td>" . $row["Where_is_the_original"] . "</td><td>"
//     . $row["Time_period"] . "</td><td>" . $row["When_produced"] . "</td><td>" . $row["Where_produced"] . "</td><td>" . $row["Author"] . "</td><td>" 
//     . $row["Size"] . "</td><td>" . $row["Description"] . "</td><td>" . $row["Source"] . "</td><td>" . $row["Signature"] . "</td><td>" . $row["Copyright_situation"]
//     . "</td><td>" . $row["Where_is_the_object_now"] . "</td><td>" . $row["Found_by"] . "</td><td>" . $row["Found_when"] . "</td><td>" 
//     . $row["Date_of_production"] . "</td><td>" . $row["Additional_info"] . "</td></tr>";
//   }
//   echo "</table>";
// } else {
//   echo "0 results";
// }
include "db_connect.php";
?> -->

<!-- while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"] . "</td><td>"
. $row["password"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; } -->

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>The database</title>
    <!-- CSS FOR STYLING THE PAGE -->
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
  
<body>
    <section>
        <h1>The Database</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
            <th>Number</th>
            <th>Title</th>
            <th>Name of File</th>
            <th>Preview</th>
            <th>Type of file</th>
            <th>Original/scan/copy</th>
            <th>Where is the Original?</th>
            <th>Time period</th>
            <th>When produced?</th>
            <th>Where produced?</th>
            <th>Author</th>
            <th>Size</th>
            <th>Description</th>
            <th>Source</th>
            <th>Signature</th>
            <th>Copyright situation</th>
            <th>Where is the object now?</th>
            <th>Found by</th>
            <th>Found when</th>
            <th>Date of Production</th>
            <th>Additional info</th> 
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php  
            
            //outputs if there are any error
             if($mysqli->connect_errno){
                 echo "Failed to connect to MySQL." . $mysqli->connect_errno. $mysqli->connect_error;
             }
            
            //echo $mysqli->host_info . "<br>";
            
            //echo "<h2>The database.</h2>";
            $sql = "SELECT * FROM dropbox";
            $result = $mysqli->query($sql);

            // LOOP TILL END OF DATA
            while($rows=$result->fetch_assoc()){
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['Current_number'];?></td>
                <td><?php echo $rows['Title'];?></td>
                <td><?php echo $rows['Name_of_file'];?></td>
                <td><?php echo $rows['Preview'];?> 
                  <embed src="uploads/<?php echo $rows['Preview'];?>" onerror="this.onerror=null; this.src='uploads/NA.jpg'" style="width: 5vw; min-width: 210px;">
                </td>
                <td><?php echo $rows['Type_of_file'];?></td>
                <td><?php echo $rows['Original_or_scan_or_copy'];?></td>
                <td><?php echo $rows['Where_is_the_original'];?></td>
                <td><?php echo $rows['Time_period'];?></td>
                <td><?php echo $rows['When_produced'];?></td>
                <td><?php echo $rows['Where_produced'];?></td>
                <td><?php echo $rows['Author'];?></td>
                <td><?php echo $rows['Size'];?></td>
                <td><?php echo $rows['Description'];?></td>
                <td><?php echo $rows['Source'];?></td>
                <td><?php echo $rows['Signature'];?></td>
                <td><?php echo $rows['Copyright_situation'];?></td>
                <td><?php echo $rows['Where_is_the_object_now'];?></td>
                <td><?php echo $rows['Found_by'];?></td>
                <td><?php echo $rows['Found_when'];?></td>
                <td><?php echo $rows['Date_of_production'];?></td>
                <td><?php echo $rows['Additional_info'];?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </section>
  </body>
  
</html>