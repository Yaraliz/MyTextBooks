<?php
// check if fields passed are empty

if(isset($_POST["btn-submit"]))
{
    $name = $_POST['name'];
    $edition = $_POST['edition'];
    $condition = $_POST['condition'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $img = $_POST['img'];
    // create email body and send it    
    $connect = mysql_connect("localhost","root","");
    @mysql_select_db("Cloud") or("Database not found");
    $var="1";
    $query = "INSERT INTO 'books'
    VALUES(null,'$name','$edition','$img','$condition','$price',(SELECT users.user_id FROM users WHERE user_id = '$var'))";

    $result = mysql_query($query);

    echo $result;
    mysql_close();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Upload - My TextBooks</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/upload.css" rel="stylesheet">
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
                        <a href="#">Upload</a>
                    </li>
                </ul>


            </div>
        </div>
        
    </nav>
    <div class="center">
     <div class ="container">
        <div class="row">
            <div class="col-lg-12">
               <h3 class="page-header">Upload</h3>
            </div>
                <div class="col-md-6">
                <form name="upload" id="upload_book" novalidate method="post" action="upload.php">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Name of the book:</label>
                            <input type="text" class="form-control" name="name" id="name">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Edition:</label>
                            <input type="text" class="form-control" name="edition" id="edition">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Condition</label>
                            <select name="condition">
                                <option value="new">New</option>
                                <option value="use">Use</option>
                                <option value="old">Old</option>
                              </select>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Price:</label>
                            <input type="number" name="price" step="0.01" min="0.01" max="99" /> 
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Category</label>
                            <select name="category">
                                <option value="science">Science</option>
                                <option value="mathematics">Mathematics</option>
                                <option value="tecnology">Tecnology</option>
                                <option value="english">English</option>
                              </select>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Select images: </label>
                            <input type="file" name="img" multiple>
                        </div>
                    </div>
                    
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary" name="btn-submit">Submit</button>
                </form>
            </div>
            </div>

        </div>
        
        </div>
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