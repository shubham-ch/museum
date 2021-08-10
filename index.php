<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php

include "db_connect.php";
//include "search_all_db.php";
?>



<!-- <a href="search_all_db.php" class="btn btn-info" role="button"> Button </a> -->

<form class="form-horizontal", action="search_all_db.php">
<fieldset>

<!-- Form Name -->
<legend>To see database</legend>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="opendatabase">Click here to open database:</label>
  <div class="col-md-4">
    <button id="opendatabase" name="search_all_db.php" class="btn btn-default">Open database</button>
  </div>
</div>

</fieldset>
</form>


<!-- <form action="search_keyword.php">
    <p>Please enter a keyword to search for:</p><br>
  <input type="text" name="keyword"><br>
  <input type="submit" value="Submit">
</form> -->

<form class="form-horizontal", action="search_keyword.php">
<fieldset>

<!-- Form Name -->
<legend>Search in database</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="keyword">Search Input</label>
  <div class="col-md-4">
    <input id="keyword" name="keyword" type="search" placeholder="" class="form-control input-md">
    <p class="help-block">Enter a word to search in database.</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Search</button>
  </div>
</div>

</fieldset>
</form>


<hr>
<!-- this form is for user to input data into the database.  -->
<!-- <form action="add_to_db.php">
  <p>Please enter the serial number:</p>
  <input type="int" name="newCurrent_number"><br>
    <p>Title:</p><br>
  <input type="text" name="newTitle"><br>
    <p>Name of the file:</p><br>
  <input type="text" name="newName_of_file"><br>
  <p>Please upload the file:</p><br>
  <input type="text" name="newPreview"><br>
  <p>Please enter the type of file:</p><br>
  <input type="text" name="newType_of_file"><br>
  <p>Is the file Original or scan/copy?</p><br>
  <input type="text" name="newOriginal_or_scan_or_copy"><br>
  <p>Where is the original file?</p><br>
  <input type="text" name="newOriginal"><br>
  <p>Time period(Flakkaserne and before / Grohn Barracks I / DP Camp Grohn / Grohn Barracks II / Roland-Kaserne / IUB-JU):</p><br>
  <input type="text" name="newTime_period"><br>
  <p>When produced?</p><br>
  <input type="text" name="newWhen_produced"><br>
  <p>Where produced?</p><br>
  <input type="text" name="newWhere_produced"><br>
  <p>Author:</p><br>
  <input type="text" name="newAuthor"><br>
  <p>Size of the file:</p><br>
  <input type="text" name="newSize"><br>
  <p>Description:</p><br>
  <input type="text" name="newDescription"><br>
  <p>Source:</p><br>
  <input type="text" name="newSource"><br>
  <p>Signature:</p><br>
  <input type="text" name="newSignature"><br>
  <p>Copyright situation:</p><br>
  <input type="text" name="newCopyright_situation"><br>
  <p>Where is the object now?</p><br>
  <input type="text" name="newWhere_is_the_object_now"><br>
  <p>Found by?</p><br>
  <input type="text" name="newFound_by"><br>
  <p>Found when?</p><br>
  <input type="text" name="newFound_when"><br>
  <p>Date of Production of the object sheet:</p><br>
  <input type="text" name="newDate_of_production"><br>
  <p>Please add Additional information:</p><br>
  <input type="text" name="newAdditional_info"><br>
  <input type="submit" value="Submit">
</form> -->



<form class="form-horizontal" method="POST" action="add_to_db.php" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Input in database</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newCurrent_number">Please enter the serial number:</label>  
  <div class="col-md-4">
  <input name="newCurrent_number" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newTitle">Title:</label>  
  <div class="col-md-6">
  <input id="newTitle" name="newTitle" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newName_of_file">Name of the file:</label>  
  <div class="col-md-4">
  <input id="newName_of_file" name="newName_of_file" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- File Button --> 
<!-- <form action="upload.php" method= "POST" enctype="multipart/form-data"> -->
<!-- <form class="form-horizontal", action="upload.php", method="POST", enctype="multipart/form-data"> -->
<div class="form-group">
  <label class="col-md-4 control-label" for="fileToUpload">File upload:</label>
  <div class="col-md-4">
    <input name="fileToUpload" class="input-file" type="file">
  </div>
</div>
<!-- </form> -->
<!-- </form> -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newType_of_file">Please enter the type of file:</label>  
  <div class="col-md-4">
  <input id="newType_of_file" name="newType_of_file" type="text" placeholder="" class="form-control input-md">
  <span class="help-block">eg: .pdf, .jpg, .jpeg, .docx e.t.c</span>  
  </div>
</div>

<!-- Select Basic -->
<!-- <div class="form-group">
  <label class="col-md-4 control-label" for="newOriginal_or_scan_or_copy">Is the file Original or scan/copy?</label>
  <div class="col-md-4">
    <select id="newOriginal_or_scan_or_copy" name="newOriginal_or_scan_or_copy" class="form-control">
      <option value="Original">Original</option>
      <option value="Scan">Scan</option>
      <option value="Copy">Copy</option>
    </select>
  </div>
</div> -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newOriginal">Where is the original file?</label>  
  <div class="col-md-4">
  <input id="newOriginal" name="newOriginal" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newTime_period">Time period(Flakkaserne and before / Grohn Barracks I / DP Camp Grohn / Grohn Barracks II / Roland-Kaserne / IUB-JU):</label>  
  <div class="col-md-4">
  <input id="newTime_period" name="newTime_period" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newWhen_produced">When produced?</label>  
  <div class="col-md-4">
  <input id="newWhen_produced" name="newWhen_produced" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newWhere_produced">Where produced?</label>  
  <div class="col-md-4">
  <input id="newWhere_produced" name="newWhere_produced" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newAuthor">Author:</label>  
  <div class="col-md-4">
  <input id="newAuthor" name="newAuthor" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newSize">Size of the file:</label>  
  <div class="col-md-4">
  <input id="newSize" name="newSize" type="text" placeholder="" class="form-control input-md">
  <span class="help-block">Please write in MB(Mega Bytes).</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="newDescription">Description:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="newDescription" name="newDescription">:)</textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newSource">Source:</label>  
  <div class="col-md-4">
  <input id="newSource" name="newSource" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newSignature">Signature</label>  
  <div class="col-md-4">
  <input id="newSignature" name="newSignature" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newCopyright_situation">Copyright situation:</label>  
  <div class="col-md-4">
  <input id="newCopyright_situation" name="newCopyright_situation" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newWhere_is_the_object_now">Where is the object now?</label>  
  <div class="col-md-4">
  <input id="newWhere_is_the_object_now" name="newWhere_is_the_object_now" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newFound_by">Found by?</label>  
  <div class="col-md-4">
  <input id="newFound_by" name="newFound_by" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newFound_when">Found when?</label>  
  <div class="col-md-4">
  <input id="newFound_when" name="newFound_when" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newDate_of_production">Date of Production of the object sheet:</label>  
  <div class="col-md-4">
  <input id="newDate_of_production" name="newDate_of_production" type="text" placeholder="" class="form-control input-md">
  <span class="help-block">please enter in format (DD/MM/YY)</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newAdditional_info">Please add Additional information:</label>  
  <div class="col-md-4">
  <input id="newAdditional_info" name="newAdditional_info" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Click here to submit:</label>
  <div class="col-md-4">
    <input type="submit" name="submit" class="btn btn-success" value="Submit">
  </div>
</div>
<!-- <input type="submit" value="Upload Image" name="submit"> -->


</fieldset>
</form>

<?php

//include "search_keyword.php";

$mysqli->close();

// ?>

<!-- // <form action = "upload.php" method="POST" enctype="multipart/from-data">
//   <input type="file" name="upl">
//   <button type="submit" value="upload" name="uploadfilebutton"> UPLOAD </button>
// </form> -->

<!-- <form action="upload.php" method="post" enctype="multipart/form-data">
   Select image to upload: -->
  <!-- <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form> --> -->


 </body>
 </html>

// <?php
// if(isset($_POST['uploadfilebutton'])){

//   $host = "localhost";
//   $username = "root";
//   $user_password = "@Cuvam123";
//   $database = "museum";
    
//   //create a database connection
//   $conn = mysqli_connect("$host", "$username", "$user_password", "$database");

//   if($conn){
//     echo "Connected to database";
//   }

//   $filename = $_FILES['uploadFile']['name'];
//   $tmpname = $_FILES['uploadFile']['tmp_name'];

//   echo $filename;
//   echo $tmpname;
// }


?>

