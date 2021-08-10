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
<?php

include "db_connect.php";
$keyword_from_form = $_GET["keyword"];
echo $keyword_from_form;

//search the database for a specific word
echo "<h2>Search of the database with the word provided.</h2>";

// $sql = "SELECT * FROM dropbox WHERE Current_number, Title, Preview, Type_of_file, Original_or_scan_or_copy, Original, Time_period, 
// When_produced, Where_produced, Author, Size, Description, Source, Signature, Copyright_situation, Where_is_the_object_now, Found_by, 
// Found_when, Date_of_production, Additional_info LIKE '%" . $keyword_from_form . "%'";

//getting some errors with preview for searching
$sql = "SELECT * FROM dropbox WHERE Current_number LIKE '%" . $keyword_from_form . "%' OR 
Title LIKE '%" . $keyword_from_form . "%' OR Name_of_file LIKE '%" . $keyword_from_form . "%'
OR Type_of_file LIKE '%" . $keyword_from_form . "%' OR Original_or_scan_or_copy LIKE '%" . $keyword_from_form . "%'
OR Where_is_the_original LIKE '%" . $keyword_from_form . "%' OR Time_period LIKE '%" . $keyword_from_form . "%' OR When_produced LIKE '%" . $keyword_from_form . "%' 
OR Where_produced LIKE '%" . $keyword_from_form . "%' OR Author LIKE '%" . $keyword_from_form . "%' OR Size LIKE '%" . $keyword_from_form . "%' 
OR Description LIKE '%" . $keyword_from_form . "%' OR Source LIKE '%" . $keyword_from_form . "%' OR Signature LIKE '%" . $keyword_from_form . "%'
OR Copyright_situation LIKE '%" . $keyword_from_form . "%' OR Where_is_the_object_now LIKE '%" . $keyword_from_form . "%' OR Found_by LIKE '%" . $keyword_from_form . "%' 
OR Found_when LIKE '%" . $keyword_from_form . "%' OR Date_of_production LIKE '%" . $keyword_from_form . "%' OR Additional_info LIKE '%" . $keyword_from_form . "%'";
// $sql = "SELECT * FROM dropbox WHERE Title LIKE '%" . $keyword_from_form . "%'";
// $sql = "SELECT * FROM dropbox WHERE Name_of_file LIKE '%" . $keyword_from_form . "%'";
// $sql = "SELECT * FROM dropbox WHERE Preview LIKE '%" . $keyword_from_form . "%'";
// $sql = "SELECT * FROM dropbox WHERE Type_of_file LIKE '%" . $keyword_from_form . "%'";
// $sql = "SELECT * FROM dropbox WHERE Original_or_scan_or_copy LIKE '%" . $keyword_from_form . "%'";
// $sql = "SELECT * FROM dropbox WHERE Original LIKE '%" . $keyword_from_form . "%'";
// $sql = "SELECT * FROM dropbox WHERE Time_period LIKE '%" . $keyword_from_form . "%'";
// $sql = "SELECT * FROM dropbox WHERE When_produced LIKE '%" . $keyword_from_form . "%'";
// $sql = "SELECT * FROM dropbox WHERE Where_produced LIKE '%" . $keyword_from_form . "%'";
// $sql = "SELECT * FROM dropbox WHERE Author LIKE '%" . $keyword_from_form . "%'";
// $sql = "SELECT * FROM dropbox WHERE Size LIKE '%" . $keyword_from_form . "%'";
// $sql = "SELECT * FROM dropbox WHERE Description LIKE '%" . $keyword_from_form . "%'";
// $sql = "SELECT * FROM dropbox WHERE Source LIKE '%" . $keyword_from_form . "%'";
// $sql = "SELECT * FROM dropbox WHERE Signature LIKE '%" . $keyword_from_form . "%'";
// $sql = "SELECT * FROM dropbox WHERE Copyright_situation LIKE '%" . $keyword_from_form . "%'";
// $sql = "SELECT * FROM dropbox WHERE Where_is_the_object_now LIKE '%" . $keyword_from_form . "%'";
// $sql = "SELECT * FROM dropbox WHERE Found_by LIKE '%" . $keyword_from_form . "%'";
// $sql = "SELECT * FROM dropbox WHERE Found_when LIKE '%" . $keyword_from_form . "%'";
// $sql = "SELECT * FROM dropbox WHERE Date_of_production LIKE '%" . $keyword_from_form . "%'";
// $sql = "SELECT * FROM dropbox WHERE Additional_info LIKE '%" . $keyword_from_form . "%'";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "number: " . $row["Current_Number"]. " - Title: " . $row["Title"]. " " . $row["NameOfFile"]. "<br>";
  ?>
<tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $row['Current_number'];?></td>
                <td><?php echo $row['Title'];?></td>
                <td><?php echo $row['Name_of_file'];?></td>
                <td><?php echo $row['Preview'];?></td>
                <td><?php echo $row['Type_of_file'];?></td>
                <td><?php echo $row['Original_or_scan_or_copy'];?></td>
                <td><?php echo $row['Where_is_the_original'];?></td>
                <td><?php echo $row['Time_period'];?></td>
                <td><?php echo $row['When_produced'];?></td>
                <td><?php echo $row['Where_produced'];?></td>
                <td><?php echo $row['Author'];?></td>
                <td><?php echo $row['Size'];?></td>
                <td><?php echo $row['Description'];?></td>
                <td><?php echo $row['Source'];?></td>
                <td><?php echo $row['Signature'];?></td>
                <td><?php echo $row['Copyright_situation'];?></td>
                <td><?php echo $row['Where_is_the_object_now'];?></td>
                <td><?php echo $row['Found_by'];?></td>
                <td><?php echo $row['Found_when'];?></td>
                <td><?php echo $row['Date_of_production'];?></td>
                <td><?php echo $row['Additional_info'];?></td>
            </tr>
            <?php
  }
} else {
  echo "0 results";
}
?>

</section>
  </body>
  
</html>