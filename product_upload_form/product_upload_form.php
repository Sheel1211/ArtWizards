<?php

$error = "";

if(isset($_POST['submit']))
{

    if($_FILES['main_image'] != NULL && $_POST['product_name'] != NULL && $_POST['discription'] != NULL && $_POST['cancelled_price'] != NULL && $_POST['original_price'] != NULL)
    {
        $product_name = htmlspecialchars($_POST['product_name']);
        $discription = htmlspecialchars($_POST['discription']);
        $cancelled_price = htmlspecialchars($_POST['cancelled_price']);
        $original_price = htmlspecialchars($_POST['original_price']);

        $product_name = trim($product_name);
        $discription = trim($discription);
        $cancelled_price = trim($cancelled_price);
        $original_price = trim($original_price);

        // validation to check whether uploaded file is IMAGE file or not
        $filename = $_FILES['main_image']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if ($ext !== 'gif' || $ext !== 'png' || $ext !== 'jpg') 
        {
            $error = "Only image files are allowed!";
        }

    }

    else
    {
        $error = "All fields are necessary to fill!";
    }



    $filename=$_FILES['main_image']['name'];
    $filesize = $_FILES['main_image']['size'];

    echo "$filename <br>";
    echo $filesize;
}





// if (isset($_POST["upload"])) {
//     // Get Image Dimension
//     $fileinfo = @getimagesize($_FILES["file-input"]["tmp_name"]);
//     $width = $fileinfo[0];
//     $height = $fileinfo[1];
    
//     $allowed_image_extension = array(
//         "png",
//         "jpg",
//         "jpeg"
//     );
    
//     // Get image file extension
//     $file_extension = pathinfo($_FILES["file-input"]["name"], PATHINFO_EXTENSION);
    
//     // Validate file input to check if is not empty
//     if (! file_exists($_FILES["file-input"]["tmp_name"])) {
//         $response = array(
//             "type" => "error",
//             "message" => "Choose image file to upload."
//         );
//     }    

// Validate file input to check if is with valid extension
//     else if (! in_array($file_extension, $allowed_image_extension)) {
//         $response = array(
//             "type" => "error",
//             "message" => "Upload valiid images. Only PNG and JPEG are allowed."
//         );
//         echo $result;
//     }    

// Validate image file size
//     else if (($_FILES["file-input"]["size"] > 2000000)) {
//         $response = array(
//             "type" => "error",
//             "message" => "Image size exceeds 2MB"
//         );
//     }   


// Validate image file dimension
//     else if ($width > "300" || $height > "200") {
//         $response = array(
//             "type" => "error",
//             "message" => "Image dimension should be within 300X200"
//         );
//     } 


//else {
//         $target = "image/" . basename($_FILES["file-input"]["name"]);
//         if (move_uploaded_file($_FILES["file-input"]["tmp_name"], $target)) {
//             $response = array(
//                 "type" => "success",
//                 "message" => "Image uploaded successfully."
//             );
//         } 

//else {
//             $response = array(
//                 "type" => "error",
//                 "message" => "Problem in uploading image files."
//             );
//         }
//     }
// }
// 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Upload Form</title>
    <style>
        <?php
            include './product_upload_form.css'
        ?>
    </style>
</head>
<body>

<!-- adding error span to display errors -->
<span id="errorspan">
    <?php
        if(isset($error))
        {
            echo "$error";
        }
    ?>
</span>


<!-- *************************form starts from here********************** -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST" enctype = "multipart/form-data">
    <table>
        <tr>
            <td>
                <label for="main_image">Upload image for the main display : </label>
            </td>
            <td>
                <input type="file" name="main_image" id="main_image">
            </td>
        </tr>

        <tr>
            <td>
                <label for="product_name">Product Name : </label>
            </td>

            <td>
                <input type="text" name="product_name" id="product_name">
            </td>
        </tr>

        <tr>
            <td>
                <label for="discription">Discription : </label>
            </td>

            <td>
                <input type="text" name="discription" id="discription">
            </td>
        </tr>

        <tr>
            <td>
                <label for="cancelled_price">Cancled Price : </label>
            </td>

            <td>
                <input type="number" name="cancelled_price" id="cancelled_price">
            </td>
        </tr>

        <tr>
            <td>
                <label for="original_price">Original Price : </label>
            </td>

            <td>
                <input type="number" name="original_price" id="original_price">
            </td>
        </tr>

        <tr>
            <td colspan = "2">
                <input type="submit" value="Submit" name = "submit">
            </td>
        </tr>

    </table>
    </form>

</body>
</html>