<?php
 if(isset($_POST['submit'])){
$allowed_ext = array('png','jpg', 'jpeg', 'gif', 'svg'); //allowed photo extensions

    if(!empty($_FILES['upload']['name'])){
        //print_r($_FILES); //run this to see what files has. It is an array which we will use to get information.
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/{$file_name}"; //choosing a directory to upload

        //Get file extension of uploaded file
        $file_ext = explode(".", $file_name); //It will get the parts of the file name after the period i.e extension type
        $file_ext = strtolower(end($file_ext)); //lowers the extension string case and takes the end of the array which is the exact extension type
        
        //Validate the extension of the uploaded file
        if(in_array($file_ext, $allowed_ext)){
            if($file_size <= 1000000){
                move_uploaded_file($file_tmp, $target_dir);
                $message = '<p style="color: green;">File Uploaded</p>';
            } else{
                $message = '<p style="color: red;">File Too Large</p>';
            }
            echo "Your file's extension is : " . $file_ext;
        } else{
            $message = '<p style="color: red;"> Invalid File Type </p>';
        }
    } else {
        $message = '<p style="color: red;">Please Upload a File</p>';
    }
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data"> 
    <?php //When form uploading, it is a must to use an enctype
    echo $message ?? null; //Will print message if there is no file uploaded
    ?>
        Select an Image to Upload: <br>
        <input type="file" name="upload"> <br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>