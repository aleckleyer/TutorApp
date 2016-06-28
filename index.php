<?php
    session_start();
    include 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tutoring App</title>
        <link rel="shortcut icon" type="image/x-icon" href="icons/icons/Pencil_note.png" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet"  type="text/css" href="main.css">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#">Tutor App</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
<?php   
        if(isset($_SESSION['valid_user_email'])){
            echo '<li><a href="logout.php">Logout</a></li>';
        } else {
?>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle navbar-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sign Up 
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu SignUpDropdown">
                                <div class="container loginContainer">
                                    <form role="form" action="registration.php" method="post" id="formSignUp">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="lastName" name="lastName"   placeholder="Last Name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="university" name="university" placeholder="University" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="email" placeholder="Email  Address" name="email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="password"    placeholder="Password" name="password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" style="equalTo:'#pwd'" id="cpassword" placeholder="Confirm Password" name="cpassword" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-default">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </ul>
                        </div>          
                        <div class="btn-group">
                            <button type="button" class="btn btn-success dropdown-toggle navbar-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Login 
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu SignUpDropdown">
                                <div class="container loginContainer">
                                    <form role="form" action="login.php" method="post">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="email" placeholder="Email Address" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label><input type="checkbox"> Remember me</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-default">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </ul>    
                        </div>
<?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container contentContainer" id = "topContainer">
            <div class="row">
                <div class= "col-md-6 col-md-offset-3" id="topRow">
                    <h1>TutorApp Title TBD</h1>
                    <p class="lead">Why you should use [TutorApp Name TBD]</p>
                    <p>Some more information about [TutorApp Name TBD]</p>
                    <p class="bold paddingTop">Interested? Join our mailing List</p>
                    <form class="paddingTop">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="johndoe@yourdomain.com"/>
                        </div>
                        <input type ="submit" class="btn btn-success btn-lg paddingTop" />
                    </form>
                </div>
            </div>
        </div>
        <section id="about">
            <div class="container contentContainer">
                <div class="row " class="center" >
                    <h1 class="center title"class="paddingTop">Why this app is awesome</h1>
                    <p class="lead center">Summary of this apps awesomeness</p>
                </div>
                <div class="row marginBottom">
                    <div class="col-md-4">
                        <h2><span class="glyphicon glyphicon-music"></span>  Header</h2>
                        <p>A brief description of one of the best features of you app. Maybe a little more text. A brief description of one of the best features of you app. Maybe a little more text.</p>
                        <button class="btn btn-success">Sign Up</button>
                    </div>
                    <div class="col-md-4">
                        <h2><span class="glyphicon glyphicon-off"></span>  Header</h2>
                        <p>A brief description of one of the best features of you app. Maybe a little more text. A brief description of one of the best features of you app. Maybe a little more text.</p>
                        <button class="btn btn-success">Sign Up</button>
                    </div>
                    <div class="col-md-4">
                        <h2><span class="glyphicon glyphicon-pencil"></span>  Header</h2>
                        <p>A brief description of one of the best features of you app. Maybe a little more text. A brief description of one of the best features of you app. Maybe a little more text.</p>
                        <button class="btn btn-success">Sign Up</button>
                    </div>
                </div>
            </div>
        </section>
        <div class="container" id="footer">
            <div class="row">
                <h1 class="center title">Download the App</h1>
                <p class="lead center">Really why should I download this app</p>
                <p class="center"><img src="download.jpg" class="appstoreImage"></p>
            </div>
        </div>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $("#formSignUp").validate({
                   rules: {
                       password: { 
                         required: true,
                            minlength: 6,
                            maxlength: 10,

                       } , 

                           cfmPassword: { 
                            equalTo: "#password",
                             minlength: 6,
                             maxlength: 10
                       }


                   },
                     messages:{
                         password: { 
                                 required:"the password is required"

                               }
                     }

                });
            });
        </script>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(".contentContainer").css("min-height",$(window).height());
    </script>

</body>
</html>