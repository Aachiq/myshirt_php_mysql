<?php
 include 'database/connexion.php';
 $project_name = "My T-Shirt";
?>  
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>myshirt</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/styles.css"/>

        <!-- Add JQuery-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <!-- Jquery Confirm -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top"><?php echo $project_name;?></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">The Time To Choose Your Favorite T-shirt</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!</p>
                        <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">We've got what you need!</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
                        <a class="btn btn-light btn-xl" href="#choose_fav_t-shirt">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">At Your Service</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Sturdy Themes</h3>
                            <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Up to Date</h3>
                            <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Ready to Publish</h3>
                            <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Made with Love</h3>
                            <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpeg" title=<?php echo $project_name;?>>
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpeg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name"><?php echo $project_name;?></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpeg" title=<?php echo $project_name;?>>
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpeg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name"><?php echo $project_name;?></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpeg" title=<?php echo $project_name;?>>
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpeg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name"><?php echo $project_name;?></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpeg" title=<?php echo $project_name;?>>
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpeg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name"><?php echo $project_name;?></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpeg" title=<?php echo $project_name;?>>
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpeg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name"><?php echo $project_name;?></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpeg" title=<?php echo $project_name;?>>
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpeg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name"><?php echo $project_name;?></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section id="choose_fav_t-shirt" class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">CHOOSE YOUR FAVORITE T-SHIRT</h2>
                <a class="btn btn-light btn-xl" onclick="$('#choice_section').slideToggle();" >Start</a>
            </div>
        </section>
        <!-- START INTEGRATED PART -->
        <div class="container" style="display:none" id="choice_section">
            <div class="row p-4" >
                <div class="col-md-6">
                    <div id="tshirt-div" style="width: 452px;height: 548px;position: relative;background-color: #fff;">
                        <img id="tshirt-backgroundpicture" src="assets/img/background_tshirt.png" />
                        <div id="drawingArea" class="drawing-area" style="position: absolute;top: 60px;left: 122px;z-index: 10;width: 200px;height: 400px;">					
                            <div class="canvas-container" style="width: 200px; height: 400px; position: relative; user-select: none;">
                                <canvas id="tshirt-canvas" width="200" height="400" style="position: absolute;width: 200px;height: 400px; left: 0px; top: 0px; user-select: none; cursor: default;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">  
                
                  <h3 class="text-primary">Commander</h3> 
                    <label for="tshirt-color">T-Shirt Color:</label>
                    <select id="tshirt-color">
                        <option value="#fff">White</option>
                        <option value="#f00">Red</option>
                        <option value="#008000">Green</option>
                        <option value="#00f">Blue</option>
                        <option value="#ff0">Yellow</option>
                    </select>
                    <br><br>
                    <label type="btn-add-text">Add Text</label>
                    <input type="text" id="txt-text">
                    <button class="btn btn-primary" id="btn-add-text" onclick="add_Text();">Add Text</button>
                    <br><br>
                    <label for="tshirt-custompicture">Upload your own design:</label>
                    <input type="file" id="tshirt-custompicture" />
                    <!--br>
                    <label for="Download-image-result">Download image Result </label>
                    <button class="btn btn-primary" onclick="Download_image()">Download </button-->
                    <br>
                    <form id="frm_Add_Order" action="add_order.php" method="post" >
                        <lable>Nom Complet </lable>
                        <input class="form-control" name="fullname" id="txt_fullname"type="text">
                        <lable>Adresse Electronique </lable>
                        <input class="form-control" name="email" id="txt_email" type="email">
                        <lable>Numéro Telephone </lable>
                        <input class="form-control" name="phone" id="txt_phone" type="text" maxlength="10">
                        <lable>Adresse </lable>
                        <input class="form-control" name="adress" id="txt_adress" type="text"> <br>
                        <label for="tshirt-qte">Quantité</label>
                        <input type="number" id="txt_qte" step="1" value="1" min="1" mx="150">
                        <input id="frm_Add_Order_Submit" type="submit" class="btn btn-primary"  value="Valider"/>
                    </form>

                </div>

                
            </div>
               
        </div>
        <!-- END INTEGRATED PART -->
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">CONTACT US</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form method="post" action="contact.php">
                            <div class="form-group">
                                <label for="exampleInputFullname">FullName</label>
                                <input type="text" name="fullname" class="form-control" id="fullname" placeholder="FullName">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPhone">Phone</label>
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputMessage">Message</label>
                                <input type="text" name="message" class="form-control" id="message" placeholder="Message">
                            </div>
                            <!-- <button type="button" onclick="sendata()" class="btn btn-primary">Submit</button> -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - Company Name</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>

       
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- Js Library -->
        <!-- Include Fabric.js in the page -->
        <script src="js/fabric.min.js"></script>
        <!-- Include dom-to-image.js in the page -->
        <script src="js/dom-to-image.min.js"></script>
        <script src="js/script2.js" ></script>
         <!-- Include validate_form.js in the page -->
        <script src="js/validate_form.js"></script>
        <!-- end JS library link -->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!--script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script-->


     
        <script>
    
    function sendata(){
       const fullname = document.getElementById('fullname').value;
       const email = document.getElementById('email').value;
       const phone = document.getElementById('phone').value;
       const message = document.getElementById('message').value;
       alert(fullname + " " + email + " " +phone+" "+ message);
      
      }
  </script>
    </body>
</html>

