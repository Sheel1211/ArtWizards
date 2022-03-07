<?php

$error = "";
$flag = 0;
$flag_extention = 0;


if (isset($_POST['submit'])) 
{

    if( $_POST['product_name'] != NULL && $_POST['description'] != NULL && $_POST['cancelled_price'] != NULL && $_POST['original_price'] != NULL && $_FILES['main_image']) 
    {
        $product_name = htmlspecialchars($_POST['product_name']);
        $description = htmlspecialchars($_POST['description']);
        $cancelled_price = htmlspecialchars($_POST['cancelled_price']);
        $original_price = htmlspecialchars($_POST['original_price']);

        $product_name = trim($product_name);
        $description = trim($description);
        $cancelled_price = trim($cancelled_price);
        $original_price = trim($original_price);

        // validation to check whether uploaded file is IMAGE file or not
        $filename = $_FILES['main_image']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        switch($ext)
        {
            case 'jpg' :
                {
                    $flag_extention = $flag_extention + 1;
                    break;
                }

            case 'jpeg' :
                {
                    $flag_extention = $flag_extention + 1;
                    break;
                }
            
            case 'svg' :
                {
                    $flag_extention = $flag_extention + 1;
                    break;
                }
        }

        if($flag_extention == 0)
        {
            $error = "Only image files are allowed!";
            $flag = $flag + 1;
        }


        // validation for the only letters and digits allowed in the product name
        else if(!preg_match("/^[a-zA-Z ]*$/",$product_name)) 
        {
            $error = "Only letter and space allowd in the First Name!";
            $flag = $flag + 1;
        }


        // validation for the only letters and digits allowed in the discription
        else if(!preg_match("/^[a-zA-Z ]*$/",$description)) 
        {
            $error = "Only letter and space allowd in the First Name!";
            $flag = $flag + 1;
        }
        // echo "$flag";


        //if there is no any error then the following code will execte and the image will store at the destination and furher instruction will execute
        if($flag == 0)
        {
            $target = 'main_images/';
            $filename = $_FILES['main_image']['name'];
            $second_argue = $target . $filename . "." . $ext;
            if(move_uploaded_file($_FILES["main_image"]["tmp_name"], $second_rague)) 
            {
                echo "Image is sucessfully moved to the destination folder."; 
            }
        }
    } 
    else 
    {
        $error = "All fields are necessary to fill!";
    }



    // $filename = $_FILES['main_image']['name'];
    // $filesize = $_FILES['main_image']['size'];

    // echo "$filename <br>";
    // echo $filesize;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="./product_upload_form_img.jpg"
                                    alt="Sample photo" class="img-fluid"
                                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Upload Product Details</h3>
    <!-- adding error span to display errors -->
    <span id="errorspan">
        <?php
        if (isset($error)) {
            echo "$error";
        }
        ?>
    </span>


    <!-- *************************form starts from here********************** -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

                                        <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="file" id="main_image" name = "main_image"
                                                    class="form-label form-control form-control-lg" />
                                                <label class="form-label" for="main_image">Upload image for the main display :<sup>*</sup></label>
                                            </div>
                                        </div>
                                        </div>


                                        <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="product_name" name = "product_name"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="product_name">Product Name : <sup>*</sup></label>
                                            </div>
                                        </div>
                                        </div>


                                        <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="description" name = "description"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="description">Description : <sup>*</sup></label>
                                            </div>
                                        </div>
                                        </div>


                                        <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="number" id="cancelled_price" name = "cancelled_price"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="cancelled_price">Cancelled Price : <sup>*</sup></label>
                                            </div>
                                        </div>
                                        </div>


                                        <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="number" id="original_price" name = "original_price"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="original_price">Original Price : <sup>*</sup></label>
                                            </div>
                                        </div>
                                        </div>
                                        

                                        <div class="d-flex justify-content-end pt-3">
                                            <button type="reset" class="btn btn-light btn-lg" id = "reset" name = "reset">Reset all</button>
                                            <button type="submit" class="btn btn-warning btn-lg ms-2" id = "submit" name = "submit">Submit form</button>
                                        </div>
        
    </form>

</body>

</html>