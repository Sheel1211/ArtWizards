<?php

$server="localhost";
$directory="root";
$password="";
$databasename="hackathon";
$conn = mysqli_connect($server,$directory,$password,$databasename);

function test_input($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

    if(isset($_POST['submit']))
    {
        $name = test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $contact = test_input($_POST['contact']);
        $message = test_input($_POST['message']);
        $flag = 0;
            if(!preg_match("/^[a-zA-Z-' ]*$/",$name))
            {
                echo "<h3 style='color:red;'>Only Letters & white space are allowed!</h3>"; 
                $flag = $flag+1;              
           }

            if(!preg_match("/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/",$email))
            {
                echo "<h3 style='color:red;'>Invalid Formate for email!</h3>";
                $flag = $flag+1;
            }

            if(!preg_match("/^([9]{1})([234789]{1})([0-9]{8})$/", $contact)) 
            {
                echo "<h3 style='color:red;'>Enter valid mobile number!</h3>";
                $flag = $flag + 1;
            }

            if($flag == 0)
            {

                $query=mysqli_query($conn,"INSERT INTO contact (name,email,contact,message) VALUES('$name','$email','$contact','$message')");
            }
           
        }
        // if($query)
        // {
        //     echo "inserted";
        // }
        // else
        // {
        //     echo "Not inserted";
        // }


    
?>
