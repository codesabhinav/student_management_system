<!doctype html>
<html>
<head>
    <?php
    include("dbmanagment.php");
 
    if(isset($_POST['but_upload'])){
        $name = $_FILES['file']['name'];
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
            
            // Upload file
            if(move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$name)){
                // Convert to base64 
                $image_base64 = base64_encode(file_get_contents('upload/'.$name) );
                $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
    
                // Insert record
               $query = "insert into images(name,image) values('".$name."','".$image."')";
                mysqli_query($conn,$query) or die(mysqli_error($conn));
            }

        }
    
    }
    ?>
<body>
    <form method="post" action="" enctype='multipart/form-data'>
        <input type='file' name='file' />
        <input type='submit' value='Save name' name='but_upload'>
        
    </form>

</body>
</html>
