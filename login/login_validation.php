<?php
if(isset($_POST['submit'])){
$conn = mysqli_connect('localhost','root','','the_artwizards');
if($conn){
    echo"Connection Successful";
}
else{
    echo "Connection Failed...";
}
$email=$_POST['email'];
$password=$_POST['password'];
if($email !=NULL && $password !=NULL)
{

    
    $sql="SELECT * FROM sign_up WHERE email='$email' AND password = '$password'";
    $result=mysqli_query($conn,$sql);
    $arr=mysqli_fetch_array($result);
    
    if(mysqli_num_rows($result)==1){
        echo "Welcome Mr. $email";
    
    }
    else{
        echo "Invalid Credentials...";
    }
}
else{
   echo  '<script type ="text/JavaScript">';  
   echo 'alert("Fill Out All The Fields")';  
   echo '</script>';
}
}
?>

<html>
<head>
  <link rel="stylesheet" href="login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="TEAM (1).png" style="width: 300px;" alt="logo">
                    <!---<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp" style="width: 185px;" alt="logo">--->
                    <h4 class="mt-1 mb-5 pb-1">We are The ArtWizards</h4>
                  </div>
  
                  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">  <!--Redirecting at same page       -->
                    <p>Please login to your account</p>
  
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example11" class="form-control" name="email" placeholder="Phone number or email address"/>
                      <label class="form-label" for="form2Example11">Username</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example22" class="form-control" name="password" placeholder="Enter your Password" />
                      <label class="form-label" for="form2Example22">Password</label>
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="submit" >Log in</button>
                      <a class="text-muted" href="#!">Forgot password?</a>
                    </div>
  
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Don't have an account?</p>
                      <a href="signup.html"><button type="button" class="btn btn-outline-danger">Create new</a></button>
                    </div>
  
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">We are more than just a company</h4>
                  <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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