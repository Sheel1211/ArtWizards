<?php

// getting connect with the database
require '../databse_connectivity/sign_up_table_connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agency - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />



</head>

<body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="../servicies_and_about_page/servicies_and_about.html#services">Services</a></li>
                    <div class="dropdown">


            <!-- CATAGORY drop down manu starts from here -->
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              CATEGORY
                            </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Papers &raquo;</a></li>
                            <li><a class="dropdown-item" href="#">Painting &raquo;</a></li>
                            <li><a class="dropdown-item" href="#">Make your Mark &raquo;</a></li>
                            <li><a class="dropdown-item" href="#">Textiles &raquo;</a></li>
                            <li><a class="dropdown-item" href="#">Stringing & Beading &raquo;</a></li>
                            <li><a class="dropdown-item" href="#">Printing &raquo;</a></li>
                            <li><a class="dropdown-item" href="#">Tools &raquo;</a></li>
                            <li><a class="dropdown-item" href="#">Fun to Have &raquo;</a></li>
                        </ul>
                    </div>


            <!-- code for the ABOUT , TEAM , CONTACT , SIGN UP , SIGN IN strts from here -->
                    <li class="nav-item"><a class="nav-link" href="../servicies_and_about_page/servicies_and_about.html#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">CONTACT</a></li>
                    <li class="nav-item"><a class="nav-link" href="../login/login_validation.php"><button type="button" id="signin_button" class="btn btn-secondary">SIGN IN</button></a></li>
                    <li class="nav-item"><a href="../sign up/signup_validation.php"><button type="button"class="btn btn-secondary" id="signup_button">SIGN UP</button></a></li>


            <!-- code for the SEARCH starts from the here -->
                    <li class="nav-item" id="search_li">
                        <div class="input-group rounded">
                            <input type="search" class="form-control rounded" placeholder="Search Here" aria-label="Search" aria-describedby="search-addon" id="search_textbox" />
                            <span class="input-group-text border-0" id="search-addon">
                                      <i class="fas fa-search"></i>
                                    </span>
                        </div>
                    </li>


            <!-- code for the ADD TO CART starts from here -->
                    <button class="addtocart" id="addtocart">
                            <div class="Addtocart">
                                <span>Add to Cart</span>
                                <i class="fa fa-shopping-basket"></i>
                            </div>
                    </button>

            </div>
            </ul>
        </div>
        </div>
    </nav>
    <!-- ************code of the NAVBAR finished here************** -->




    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To Your Art World!</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <div class="masthead-subheading"><span class="auto-input" style="color: chartreuse;"></span></div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
        </div>
    </header>
    



<!-- **********************code for the catagory starts from the here ************************* -->
    <section class="page-section bg-light" id="portfolio">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Products which you like to buy</h2>
            <h3 class="section-subheading text-muted">Choose the Best that fits You.</h3>
        </div>

        <div class="container2">
            <div class="row text-center py-5">

            <?php

                // echo "<div class=\"col-md-3 col-sm-6 my-3 my-md-0 \">";
                //     echo "<form action=\"index.php \" method=\"post \">";
                //         echo "<div class=\"cardshadow \">";
                //             echo "";
                //             echo "";
                //         echo "</div>";
                //     echo "</form>";
                // echo "</div>";

                echo " <div class = \"col-md-3 col-sm-6 my-3 my-md-0 \">
                <form action = \"index.php \" method = \"post \">
                    <div class = \"cardshadow \">
                    </div>
                    <div>
                        <img src = \"assets/img/portfolio/papers.jpg\" alt=\" \" class = \"img-fluid1 card-img-top \">
                    </div>
                    <div class = \"card-body \">
                        <h5 class = \"card-title \">Papers</h5>
                        <h6>
                            <i class = \"fas fa-star \"></i>
                            <i class = \"fas fa-star \"></i>
                            <i class = \"fas fa-star \"></i>
                            <i class = \"fas fa-star \"></i>
                            <i class = \"far fa-star \"></i>
                        </h6>
                        <p class = \"card-text \">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum </p>
                        <h5>
                            <small><s class = \"text-secondary \">$50</s></small>
                            <span class = \"price \">$40</span>
                            <button type = \"submit \" class = \"btn btn-warning my-3 \" name = \"add \">Add to Cart <i class= \"fas fa-shopping-cart \"></i></button>
                        </h5>
                    </div>
                </form>
            </div>
                ";
            ?>

             <!--   <div class="col-md-3 col-sm-6 my-3 my-md-0 ">
                    <form action="index.php " method="post ">
                        <div class="cardshadow ">
                        </div>
                        <div>
                            <img src="assets/img/portfolio/papers.jpg" alt=" " class="img-fluid1 card-img-top ">
                        </div>
                        <div class="card-body ">
                            <h5 class="card-title ">Papers</h5>
                            <h6>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="far fa-star "></i>
                            </h6>
                            <p class="card-text ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum </p>
                            <h5>
                                <small><s class= "text-secondary ">$50</s></small>
                                <span class="price ">$40</span>
                                <button type="submit " class="btn btn-warning my-3 " name="add ">Add to Cart <i class= "fas fa-shopping-cart "></i></button>
                            </h5>
                        </div>
                    </form>
                </div> -->

                <div class="col-md-3 col-sm-6 my-3 my-md-0 ">
                    <form action="index.php " method="post ">
                        <div class="cardshadow ">
                        </div>
                        <div>
                            <img src="assets/img/portfolio/paint_color.jpeg" alt=" " class="img-fluid1 card-img-top ">
                        </div>
                        <div class="card-body ">
                            <h5 class="card-title ">Painting</h5>
                            <h6>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="far fa-star "></i>
                            </h6>
                            <p class="card-text ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum </p>
                            <h5>
                                <small><s class= "text-secondary ">$50</s></small>
                                <span class="price ">$40</span>
                                <button type="submit " class="btn btn-warning my-3 " name="add ">Add to Cart <i class= "fas fa-shopping-cart "></i></button>
                            </h5>
                        </div>
                    </form>
                </div>

                <div class="col-md-3 col-sm-6 my-3 my-md-0 ">
                    <form action="index.php " method="post ">
                        <div class="cardshadow ">
                        </div>
                        <div>
                            <img src="assets/img/portfolio/make_fun.jpeg.jpeg " alt=" " class="img-fluid1 card-img-top ">
                        </div>
                        <div class="card-body ">
                            <h5 class="card-title ">Make your Mark</h5>
                            <h6>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="far fa-star "></i>
                            </h6>
                            <p class="card-text ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum </p>
                            <h5>
                                <small><s class= "text-secondary ">$50</s></small>
                                <span class="price ">$40</span>
                                <button type="submit " class="btn btn-warning my-3 " name="add ">Add to Cart <i class= "fas fa-shopping-cart "></i></button>
                            </h5>
                        </div>
                    </form>
                </div>

                <div class="col-md-3 col-sm-6 my-3 my-md-0 ">
                    <form action="index.php " method="post ">
                        <div class="cardshadow ">
                        </div>
                        <div>
                            <img src="assets/img/portfolio/textiles.jpeg.jpeg" alt=" " class="img-fluid1 card-img-top ">
                        </div>
                        <div class="card-body ">
                            <h5 class="card-title ">Textiles</h5>
                            <h6>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="far fa-star "></i>
                            </h6>
                            <p class="card-text ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum </p>
                            <h5>
                                <small><s class= "text-secondary ">$50</s></small>
                                <span class="price ">$40</span>
                                <button type="submit " class="btn btn-warning my-3 " name="add ">Add to Cart <i class= "fas fa-shopping-cart "></i></button>
                            </h5>
                        </div>
                    </form>
                </div>


                <div class="col-md-3 col-sm-6 my-3 my-md-0 ">
                    <form action="index.php " method="post ">
                        <div class="cardshadow ">
                        </div>
                        <div>
                            <img src="assets/img/portfolio/Stringing&Beading.jpg.jpeg" alt=" " class="img-fluid1 card-img-top ">
                        </div>
                        <div class="card-body ">
                            <h5 class="card-title ">Stringing & Beading</h5>
                            <h6>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="far fa-star "></i>
                            </h6>
                            <p class="card-text ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum </p>
                            <h5>
                                <small><s class= "text-secondary ">$50</s></small>
                                <span class="price ">$40</span>
                                <button type="submit " class="btn btn-warning my-3 " name="add ">Add to Cart <i class= "fas fa-shopping-cart "></i></button>
                            </h5>
                        </div>
                    </form>
                </div>


                <div class="col-md-3 col-sm-6 my-3 my-md-0 ">
                    <form action="index.php " method="post ">
                        <div class="cardshadow ">
                        </div>
                        <div>
                            <img src="assets/img/portfolio/printing.jpeg" alt=" " class="img-fluid1 card-img-top ">
                        </div>
                        <div class="card-body ">
                            <h5 class="card-title ">Printing</h5>
                            <h6>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="far fa-star "></i>
                            </h6>
                            <p class="card-text ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum </p>
                            <h5>
                                <small><s class= "text-secondary ">$50</s></small>
                                <span class="price ">$40</span>
                                <button type="submit " class="btn btn-warning my-3 " name="add ">Add to Cart <i class= "fas fa-shopping-cart "></i></button>
                            </h5>
                        </div>
                    </form>
                </div>


                <div class="col-md-3 col-sm-6 my-3 my-md-0 ">
                    <form action="index.php " method="post ">
                        <div class="cardshadow ">
                        </div>
                        <div>
                            <img src="assets/img/portfolio/tools.jpg.jpeg" alt=" " class="img-fluid1 card-img-top ">
                        </div>
                        <div class="card-body ">
                            <h5 class="card-title ">Tools</h5>
                            <h6>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="far fa-star "></i>
                            </h6>
                            <p class="card-text ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum </p>
                            <h5>
                                <small><s class= "text-secondary ">$50</s></small>
                                <span class="price ">$40</span>
                                <button type="submit " class="btn btn-warning my-3 " name="add ">Add to Cart <i class= "fas fa-shopping-cart "></i></button>
                            </h5>
                        </div>
                    </form>
                </div>



                <div class="col-md-3 col-sm-6 my-3 my-md-0 ">
                    <form action="index.php " method="post ">
                        <div class="cardshadow ">
                        </div>
                        <div>
                            <img src="assets/img/portfolio/fun_to_have1.jpeg" alt=" " class="img-fluid1 card-img-top ">
                        </div>
                        <div class="card-body ">
                            <h5 class="card-title ">Fun to Have</h5>
                            <h6>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="far fa-star "></i>
                            </h6>
                            <p class="card-text ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum </p>
                            <h5>
                                <small><s class= "text-secondary ">$50</s></small>
                                <span class="price ">$40</span>
                                <button type="submit " class="btn btn-warning my-3 " name="add ">Add to Cart <i class= "fas fa-shopping-cart "></i></button>
                            </h5>
                        </div>
                    </form>
                </div>
            </div>
        </div>





    
<!-- *********************************code for the TEAM starts from here********************************** -->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Work is worship.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                            <h4>Parveen Anand</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                            <h4>Parveen Anand</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                    </div>
                </div>
            </div>
        </section>




<!-- *********************************code for the CLIENTS starts from here**************************** -->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." /></a>
                    </div>
                </div>
            </div>
        </div>




<!-- ********************************code for thee CONTACT starts from here*********************** -->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="contact_validation.php" method="POST">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" name="name" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" name="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" name="contact" placeholder="Your Phone *" data-sb-validations="required" pattern="[0-9]{10}" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" name="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <!-- <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div> -->
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <!-- Submit Button-->
                    <div class="text-center"><input type="submit" name="submit" id="submitButton" value="Send Message"></button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong> Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong> Illustration
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong> Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong> Graphic Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong> Finish
                                        </li>
                                        <li>
                                            <strong>Category:</strong> Identity
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong> Lines
                                        </li>
                                        <li>
                                            <strong>Category:</strong> Branding
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong> Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong> Website Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong> Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong> Photography
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script>
            var typed = new Typed(".auto-input", {
                strings: ["Imagine. Draw. Paint. Create!", "Art is Where Work Meets Love.", "Listen To Your Art."],
                typeSpeed: 100,
                backSpeed: 0,
                loop: true
            })
        </script>



</body>

</html>