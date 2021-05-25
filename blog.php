<?php
  session_start();
  if(isset($_SESSION['login'])){
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cake - Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">The Perfect Cake</div>
    <div class="address-bar">A-10, Sanjeevni Palace | Upper Road, Noida | 9988776655</div>

    <!-- Navigation -->
    <?php require_once('nav.php'); ?>
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                  <h2 class="text-center">Welcome <?php echo($fname." ");echo($lname." ");?> - <a href="logout.php">Logout</a></h2>
                    <hr>
                    <h2 class="intro-text text-center">The Perfect Cake
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>Black Currant
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>The dark purple clusters popping out are the eye stealers. The tangy blackcurrants swirled with the creamy cake are attractive in their own.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal1">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>Black Forest
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>Black Forest gâteau or Black Forest cake is a chocolate sponge cake with a rich cherry filling based on the German dessert Schwarzwälder Kirschtorte, literally "Black Forest Cherry-torte".</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>Coffee Chocolate
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>Simple coffee chocolate cake recipe that's covered in chocolate buttercream and topped off with espresso ganache and chocolate chips. Perfect for birthdays.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
    
    <!--MOdal 1-->
    <div id="modal1" class="modal fade" role="dialoge">
      <div class="modal-dialog">
        
        <!--Modal Content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Black Currant</h4>
          </div>
          <div class="modal-body">
            <p>Sample Text</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
    
    <!--Modal 2-->
    <div id="modal2" class="modal fade" role="dialoge">
      <div class="modal-dialog">
        
        <!--Modal Content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Black Forest</h4>
          </div>
          <div class="modal-body">
            <p>Sample Text</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
    
    <!--Modal 3-->
    <div id="modal3" class="modal fade" role="dialoge">
      <div class="modal-dialog">
        
        <!--Modal Content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Coffee Chocolate</h4>
          </div>
          <div class="modal-body">
            <p>Sample Text</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Cake 2020</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php
  } else{
    header("location:login.php");
  }
?>