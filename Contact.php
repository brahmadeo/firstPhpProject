<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
        
        

    </head>

    <body>

        <?php
            include('navbar.php'); 
        ?>

        <div class="jumbotron">
            <h1>Contact us section</h1>
            <p>Bootstrap is the most popular HTML, CSS...</p>
        </div>

         <!-- contact demo -->

         <section>
                <div class="container">
                    <h1 class="text-center text-capitalize pt-5">Contact Us</h1>
                    <hr class="w-25 mx-auto pt-5">
                    <div class="w-50 mx-auto mb-4">
                            <form action="/action_page.php">
                                <div class="form-group">
                                  <label for="email">Email address:</label>
                                  <input type="email" class="form-control" placeholder="Enter email" id="email">
                                </div>
                                <div class="form-group">
                                  <label for="pwd">Password:</label>
                                  <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                                </div>
                                
                                <div class="form-group form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Remember me
                                  </label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                    </div>
                </div>
        </section>    

        <!-- contact demo end  -->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
</html>




