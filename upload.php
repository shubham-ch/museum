<?php
// if(isset($_POST['upload'])){
//     $file = $_FILES['file'];
//     print_r($file);

//     $fileName = $_FILES['file']['name'];
//     $fileTmpName = $_FILES['file']['tmp_name'];
//     $fileSize = $_FILES['file']['size'];
//     $fileError = $_FILES['file']['error'];
//     $fileType = $_FILES['file']['type'];

//     $fileExt = explode('.', $fileName);
//     $fileActualExt = strtolower(end($fileExt));

//     $allowed = array('jpg', 'jpeg', 'png', 'pdf');

//     if(in_array($fileActualExt, $allowed)){
//         if($fileError === 0){
//             if($fileSize < 1000000){
//                 $fileNameNew = uniqid('', true).".".$fileActualExt;
//                 $fileDestination = "data/" .$fileNameNew;
//                 move_uploaded_file($fileTmpName, $fileDestination);
//                 header("Location: index.php?uploadsuccess");
                
//             }else{
//                 echo "Your file is too big!";
//             } 
//         }else{
//             echo "There was an error uploading your file!";
//         }

//     }else{
//         echo "You cannot upload files of this type!";
//     }
// }
// include "db_connect.php";
// //include "add_to_db.php";
// if(isset($_POST['upload'])){
//     $target = "data/".basename($_FILES['file']['name']);

//     $file = $_FILES['file']['name'];
//     //$text = $POST['text'];

//     $host = "localhost";
//     $username = "root";
//     $user_password = "@Cuvam123";
//     $database = "museum";
    
//     //create a database connection
//     $mysqli = new mysqli("$host", "$username", "$user_password", "$database");

//     $sql = "INSERT INTO dropbox(file, text) VALUES ('$file')";
//     mysqli_query($mysqli, $sql);

//     if(move_uploaded_file($_FILES['dropbox']['tmp_name'], $target)){
//         $msg = "success";
//     }else{
//         $msg = "problem";
//     }

// }
function uploadfile(){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    echo "TARGET FILE: $target_file";
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        echo "SET POST";
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    } else {
        echo "Post is not set";
    }

    //default value
    if ($target_file != true){
        $FILES["fileToUpload"]["N/A"];
    }

    // Check if file already exists
    if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
        echo "Sorry, there was an error uploading your file.";
        }
    }
}

?>

