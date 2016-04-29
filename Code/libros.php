<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Textbooks</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/Libros.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="img/logos/favicon.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h2>My Textbooks</h2>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right navbar-bottom">
                    <li class="active">
                        <a href="Libros.html">Home</a>
                    </li>
                    
                    <li>
                        <a href="Login.html">Login</a>
                    </li>
                    <li>
                        <a href="upload.html">Upload</a>
                    </li>
                </ul>


            </div>
        </div>
        
    </nav>

    <!-- Page Content -->
    <!-- /.row -->

    <!-- Team Members -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Books </h3>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/Database_System.jpg" alt="" >
                    <div class="caption">
                        <h3>Database System Concepts</h3>
                        <br>
                        <label>Edition: </label>
                        6th Edition
                        <br>
                        <label>Category:</label>
                        Tecnology
                        <br>
                        <label>Price:</label>
                        $ 49.99
                        <br>
                        <label>Condition:</label>
                        New
                            <div align="center">
                                <button onclick="window.location.href='contact.php'" id="myButton" class="btn btn-primary" >Contact User</button>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/Calculo_Una_Variables.jpg" alt="" >
                    <div class="caption">
                        <h3>Calculo Una Variable</h3>
                        <br>
                        <label>Edition: </label>
                        12th Edition
                        <br>
                        <label>Category:</label>
                        Mathematics
                        <br>
                        <label>Price:</label>
                        $ 35.00
                        <br>
                        <label>Condition:</label>
                        Used
                        <br>
                            <div align="center">
                                <button type="submit" class="btn btn-primary">Contact User</button>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/Python_Programming_for_the_Absolute_Beginner.jpg" alt="" >
                    <div class="caption">
                        <h3>Python Programming for the absolute beginner<br>
                        </h3>
                        <label>Edition: </label>
                        3th Edition
                        <br>
                        <label>Category:</label>
                        Tecnology
                        <br>
                        <label>Price:</label>
                        $ 19.51
                        <br>
                        <label>Condition:</label>
                        New
                        <br>
                            <div align="center">
                                <button type="submit" class="btn btn-primary" >Contact User</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
    <!-- /.container -->
<hr>
    <!-- footer -->
    <footer>
            <div class="row">
                <div class="col-lg-12">
                    <div align="center">
                        <p>Copyright &copy; My Textbook 2016</p>
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
