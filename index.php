<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylsheet" href="style.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <header>
        <?php include('navbar.php') ?>
              <div id="demo" class="carousel slide" data-ride="carousel">
                    
                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>
              
                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                        
                    <img src="images/diagnostic.jpg" alt="Los Angeles">
                  </div>
                  
                  <div class="carousel-item">
                    <img src="images/diagnostic.jpg" alt="Chicago">
                  </div>

                  <div class="carousel-item">
                    <img src="images/diagnostic.jpg" alt="New York">
                  </div>

                </div>
              
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              
              </div>
    
        </header>

        <!-- services start -->

        <section>
            <div class="container">
                <h1 class="text-center text-capitalize pt-5">Services</h1>
                <hr class="w-25 mx-auto pt-5">
                
                <div class="row text-center pb-5">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card" >
                            <img class="card-img-top" src="images/bloodtest.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Blood Test</h4>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card" >
                            <img class="card-img-top" src="images/delivery.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Delivery</h4>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card" >
                            <img class="card-img-top" src="images/operation.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Operation</h4>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services end  -->

        <!-- gallery start -->

        <section>
                <div class="container">
                    <h1 class="text-center text-capitalize pt-5">Gallery</h1>
                    <hr class="w-25 mx-auto pt-5">
                    <div class="row text-center pb-5">
                        <div class="col-lg-4 col-md-4 col-12 mb-4">
                            <img src="images/diagnostic.jpg" class="img-fluid">
                        </div>

                        <div class="col-lg-4 col-md-4 col-12 mb-4">
                                <img src="images/diagnostic.jpg" class="img-fluid">
                        </div>

                        <div class="col-lg-4 col-md-4 col-12 mb-4">
                                    <img src="images/diagnostic.jpg" class="img-fluid">
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 mb-4">
                                <img src="images/diagnostic.jpg" class="img-fluid">
                            </div>
    
                            <div class="col-lg-4 col-md-4 col-12 mb-4">
                                    <img src="images/diagnostic.jpg" class="img-fluid">
                            </div>
    
                            <div class="col-lg-4 col-md-4 col-12 mb-4">
                                        <img src="images/diagnostic.jpg" class="img-fluid">
                            </div>

                           
                    </div>
                   

                </div>
        </section>   
        <!-- gallery end -->

        <!-- register form  -->

        <section class="bg-primary">
            <article class="py-5">
                <div class="text-center text-white">
                    <h3>Want to join</h3>
                    <p>Be a part of Surya Diagnostic family</p>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#myModal">Join now</button>
                </div>

                <!-- The Modal -->
            <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    
                        <!-- Modal Header -->
                        <div class="modal-header">
                        <h4 class="modal-title">Sign Up</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body">
                        
                                <form method="POST" action="server.php">
                                    <div class="form-group">
                                      <label for="username">Username:</label>
                                      <input type="text" class="form-control" placeholder="Enter eusername" name="username" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                      <label for="email">Email:</label>
                                      <input type="email" class="form-control" placeholder="Enter email" name="email">
                                    </div>
                                    <div class="form-group">
                                      <label for="password">Password:</label>
                                      <input type="password" class="form-control" placeholder="Enter password" name="password">
                                    </div>
                                    <div class="form-group">
                                      <label for="repassword">Confirm Password:</label>
                                      <input type="password" class="form-control" placeholder="Confirm password" name="con_password">
                                    </div>
                                    <!-- <div class="form-group form-check">
                                      <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox"> Remember me
                                      </label>
                                    </div> -->
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>

                        </div>
                        
                        <!-- Modal footer -->
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        
                    </div>
                    </div>
                </div>
      

            </article>
        </section>

        <!-- register form end  -->

       

        <!-- footer  -->

        <footer>
            <p class="text-center bg-dark text-white">@copyright developer.com 2019</p>
        </footer>
        <!-- footer end  -->

        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    </body>
</html>