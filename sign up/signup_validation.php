<?php

$error = "";

if(isset($_POST['submit']))
{

    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['mothername']) && isset($_POST['fathername']) && isset($_POST['address']) && isset($_POST['gender']) && isset($_POST['dob']) && isset($_POST['pincode']) && isset($_POST['mobileno']) && isset($_POST['email']))
    {
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $mothersname = htmlspecialchars($_POST['mothername']);
        $fathersname = htmlspecialchars($_POST['fathername']);
        $address = htmlspecialchars($_POST['address']);
        $gender = htmlspecialchars($_POST['gender']);
        $dob = htmlspecialchars($_POST['dob']);
        $pincode = htmlspecialchars($_POST['pincode']);
        $mobileno = htmlspecialchars($_POST['mobileno']);
        $email = htmlspecialchars($_POST['email']);


        // trimming the data
        $firstname = trim($firstname);
        $lastname = trim($lastname);
        $mothersname = trim($mothersname);
        $fathersname = trim($fathersname);
        $address = trim($address);
        $pincode = trim($pincode);
        $mobileno = trim($mobileno);
        $email = trim($email);

        echo "all the fields are filled up.......";


        // validation for the email id
        if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))
        {
            $error = "Enter valid E-mail id!";
        }



        // validation for the mobileno
        if(!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $mobileno)) 
        {
            $error = "Enter valid mobile number!";
        }



        // validation for the pincode
        if(!preg_match("^[1-9]{1}[0-9]{2}\\s{0, 1}[0-9]{3}$", $pincode)) 
        {
            $error = "Enter valid Pin Code!";
        }



        // validation for the fathersname
        if (!preg_match("/^[a-zA-Z ]*$/",$fathersname)) 
        {
            $error = "Only letter and space allowd in the Father's Name!";
        }



        // validation for the mothersname
        if (!preg_match("/^[a-zA-Z ]*$/",$mothersname)) 
        {
            $error = "Only letter and space allowd in the Mother's Name!";
        }


        // validation for the lasttname
        if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) 
        {
            $error = "Only letter and space allowd in the Last Name!";
        }


        // validation for the firstname
        if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) 
        {
            $error = "Only letter and space allowd in the First Name!";
        }

    }

    else
    {
        $error = "All the fields are necessary to fill!";
        echo "Error occurs........";
        
    }

// echo $firstname;
// echo $lastname;
// echo $mothersname;
// echo $fathersname;
// echo $address;
// echo $gender;
// echo $state;
// echo $city;
// echo $dob;
// echo $pincode;
// echo $mobileno;
// echo $email;
}
?>





<html>
<head>
    <link rel="stylesheet" href="signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="./images_for_sign_up_page/img4.jpg"
                                    alt="Sample photo" class="img-fluid"
                                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Sign Up Now!!!</h3>


 <!-- adding errorspan for the displaying the errors while filling up the form -->

                                    <span id="errorspan">
                                        <?php

                                            if(isset($error) && $error != "")
                                            {
                                                echo $error;
                                            }
                                        ?>
                                    </span>




<!-- ******************************form starts from here************************ -->
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> <!-- redirecting form on the same page after submit -->

                                    <!-- div for the first name -->
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="firstname" name = "firstname"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1m">First name<sup>*</sup></label>
                                            </div>
                                        </div>


                                        <!-- div for the last name -->
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="lastname" name = "lastname"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1n">Last name<sup>*</sup></label>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- div for the mother's name -->
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="mothername" name = "mothername"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1m1">Mother's name<sup>*</sup></label>
                                            </div>
                                        </div>


                                        <!-- div for the father's name -->
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="fathername" name = "fathername"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1n1">Father's name<sup>*</sup></label>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- div for the address -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="address" name = "address" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example8">Address<sup>*</sup></label>
                                    </div>


                                    <!-- div for the gender -->
                                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                        <h6 class="mb-0 me-4">Gender: </h6>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="femaleGender" value="female" />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="maleGender" value="male" />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>

                                        <div class="form-check form-check-inline mb-0">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="otherGender" value="other" />
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>

                                    </div>


                                    <!-- div for the state-->
                                    <!-- <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <select class="select" id = "state" name = "state">
                                                <option value="1">State</option>
                                                <option value="2">Option 1</option>
                                                <option value="3">Option 2</option>
                                                <option value="4">Option 3</option>
                                            </select>

                                        </div> -->


                                        <!-- div for the city -->
                                        <!-- <div class="col-md-6 mb-4">

                                            <select class="select" id = "city" name = "city">
                                                <option value="1">City</option>
                                                <option value="2">Option 1</option>
                                                <option value="3">Option 2</option>
                                                <option value="4">Option 3</option>
                                            </select>

                                        </div>


                                    </div> -->
    


                                    <!-- div for the DOB -->
                                    <div class="form-outline mb-4" >
                                        <input type="date" id = "dob" name = "dob" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example9">DOB<sup>*</sup></label>
                                    </div>


                                    <!-- div for the pin code -->
                                    <div class="form-outline mb-4" >
                                        <input type="text" id = "pincode" name = "pincode" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example90">Pincode<sup>*</sup></label>
                                    </div>


                                    <!-- div for the mobile no -->
                                    <div class="form-outline mb-4" > 
                                        <input type="tel" id = "mobileno" name = "mobileno" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example99">Mobile-No<sup>*</sup></label>
                                    </div>


                                    <!-- div for the email id -->
                                    <div class="form-outline mb-4" >
                                        <input type="text" id = "email" name = "email" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example97">Email ID<sup>*</sup></label>
                                    </div>


                                    <!-- div for the password -->
                                    <div class="form-outline mb-4" >
                                        <input type="text" id = "password" name = "password" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example97">Password<sup>*</sup></label>
                                    </div>


                                    <!-- div for the reset and submit button -->
                                    <div class="d-flex justify-content-end pt-3">
                                        <button type="reset" class="btn btn-light btn-lg" id = "reset" name = "reset">Reset all</button>
                                        <button type="submit" class="btn btn-warning btn-lg ms-2" id = "submit" name = "submit">Submit form</button>
                                    </div>

                                </form>
<!-- **************************form ends here**************************** -->




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>