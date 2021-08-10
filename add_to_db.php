<?php

include "upload.php";

include "db_connect.php";

$store_Current_number = $_POST["newCurrent_number"];
echo "NUMBER: $store_Current_Number"; 
$store_Title = $_POST["newTitle"];
$store_Name_of_file = $_POST["newName_of_file"];
$store_Preview = basename($_FILES["fileToUpload"]["name"]);
echo "Image: $store_Preview \n";
$store_Type_of_file = $_POST["newType_of_file"];
$store_Original_or_scan_or_copy = $_POST["newOriginal_or_scan_or_copy"];
$store_Original = $_POST["newOriginal"];
$store_Time_period = $_POST["newTime_period"];
$store_When_produced = $_POST["newWhen_produced"];
$store_Where_produced = $_POST["newWhere_produced"];
$store_Author = $_POST["newAuthor"];
$store_Size = $_POST["newSize"];
$store_Description = $_POST["newDescription"];
$store_Source = $_POST["newSource"];
$store_Signature = $_POST["newSignature"];
$store_Copyright_situation = $_POST["newCopyright_situation"];
$store_Where_is_the_object_now = $_POST["newWhere_is_the_object_now"];
$store_Found_by = $_POST["newFound_by"];
$store_Found_when = $_POST["newFound_when"];
$store_Date_of_production = $_POST["newDate_of_production"];
$store_Additional_info = $_POST["newAdditional_info"];


//this "addslashes are made for user to be able to input some special symbols
//$store_Current_Number = addslashes["newCurrent_Number"];
$store_Title = addslashes($store_Title);
$store_Name_of_file = addslashes($store_Name_of_file);
//$store_Preview = addslashes($store_Preview);
$store_Type_of_file = addslashes($store_Type_of_file);
$store_Original_or_scan_or_copy = addslashes($store_Original_or_scan_or_copy);
$store_Original = addslashes($store_Original);
$store_Time_period = addslashes($store_Time_period);
$store_When_produced = addslashes($store_When_produced);
$store_Where_produced = addslashes($store_Where_produced);
$store_Author = addslashes($store_Author);
$store_Size = addslashes($store_Size);
$store_Description = addslashes($store_Description);
$store_Source = addslashes($store_Source);
$store_Signature = addslashes($store_Signature);
$store_Copyright_situation = addslashes($store_Copyright_situation);
$store_Where_is_the_object_now = addslashes($store_Where_is_the_object_now);
$store_Found_by = addslashes($store_Found_by);
$store_Found_when = addslashes($store_Found_when);
$store_Date_of_production = addslashes($store_Date_of_production);
$store_Additional_info = addslashes($store_Additional_info);

//to continue to database if no file was uploaded
if (is_uploaded_file($store_Preview)==true){
    uploadfile();
}else{
    echo"no file was uploaded";
}
//search the database for a specific word
echo "<h2>Added to database: $store_Current_number, $store_Title, $store_Name_of_file, $store_Preview, $store_Type_of_file, $store_Original_or_scan_or_copy,
$store_Original, $store_Time_period, $store_When_produced, $store_Where_produced, $store_Author, $store_Size, $store_Description, $store_Source, $store_Signature,
$store_Copyright_situation, $store_Where_is_the_object_now, $store_Found_by, $store_Found_when, $store_Date_of_production, $store_Additional_info</h2>";

$sql = "INSERT INTO dropbox 
-- (Current_number, Title, Name_of_file, Preview, Type_of_file, Original _or_ scan_or_copy, 
--  Where_is_the_original, Time_period, When_produced, Where_produced, Author, Size, Description, Source, Sigature, Copyright_situation,
--  Where_is_the_object_now, Found_by, Found_when, Date_of_production, Additional_info) 
VALUES ('$store_Current_number','$store_Title', '$store_Name_of_file', 
'$store_Preview', '$store_Type_of_file', '$store_Original_or_scan_or_copy', '$store_Original', '$store_Time_period', '$store_When_produced', '$store_Where_produced', 
'$store_Author', '$store_Size', '$store_Description', '$store_Source', '$store_Signature', '$store_Copyright_situation', '$store_Where_is_the_object_now', 
'$store_Found_by', '$store_Found_when', '$store_Date_of_production', '$store_Additional_info')";
$result = $mysqli->query($sql) or die(mysqli_error($mysqli));



// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
  
// }

// // Check if file already exists
// // if (file_exists($target_file)) {
// //     echo "Sorry, file already exists.";
// //     $uploadOk = 0;
// // }

// //     // Check file size
// // if ($_FILES["fileToUpload"]["size"] > 500000) {
// //     echo "Sorry, your file is too large.";
// //     $uploadOk = 0;
// // }

// //     // Allow certain file formats
// // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// //     && $imageFileType != "gif" && $imageFileType != "pdf" ) {
// //     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
// //     $uploadOk = 0;

// // }

// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
//   // if everything is ok, try to upload file
//     }else {
//     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//       echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
//     } else {
//       echo "Sorry, there was an error uploading your file.";
//     }
// }


include "search_all_db.php";

?>
<!-- <?php

// if(isset($_POST['submit'])){

// }
?> -->

<a href="index.php"> Return to main page </a>