<?php   
        session_start();
        include 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tutoringapp | <?php echo $_SESSION['valid_user_fname'];?></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">

    /* CSS used here will be applied after bootstrap.css */
    #picInfo{
      margin-top:30px;

    }

    #map{
      margin-top:10px;
    }
    body {
      padding-top: 75px;
    }

    </style>
    </head>
    <body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse"> <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>

            </button> <a class="navbar-brand" href="#">Brand</a>

        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a>
                </li>
                <li><a href="#about">About</a>
                </li>
                <li><a href="#contact">Contact</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>

<div class="container">
     <div class="row">
        <form class="form-horizontal">
         <div class="form-group">
             <div class="col-md-10">
                <input class="form-control" type="text">
             </div>
             <div class="col-md-2">
                <button class="btn" type="submit">Search</button>
             </div>
         </div>
         </form>
    </div>
     <h1 class="text-center">Center aligned</h1>
 

    <div class="row">
        <div class="col-md-4">
            <img class="img-responsive" src="//placehold.it/300x450">
            <div class="row">
                <address>
                    <strong><?php echo $_SESSION['valid_user_fname']. " " .$_SESSION['valid_user_lname']; ?></strong><br>
                    <a href="mailto:<?php echo $_SESSION['valid_user_email']; ?>"><?php echo $_SESSION['valid_user_email']; ?></a><br>
                    <?php echo $_SESSION['valid_user_uni']; ?><br>
                    <a href="messages.php">Messages</a>
                </address>    
            </div>
        </div>
        <div class="col-md-4">
          <table class="table table-striped">
<thead>
  <tr>
    <th>Name</th>
    <th>School</th>
    <th>Major</th>
    <th>Rating</th>
  </tr>
            </thead>
<tbody>
  <?php
   
            $sql= "SELECT * FROM users";
            
            $results = $conn->query($sql);
            while($row = $results->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['FirstName']." ".$row['LastName']?> </td>
                    <td><?php echo $row['university']?></td>
                    <td><?php echo $row['major']?></td>
                    <td><?php echo $row['university']?></td>
                </tr>

            <?php
            }
            ?>

  <!-- <tr>
    <td><img src="//placehold.it/50x50"></td>
    <td>Jeffrey Derose</td>
    <td>College of Staten Island</td>
    <td>Computer Science</td>
    <td>4.5 out of 5 stars</td>
  </tr>
  <tr>
    <td><img src="//placehold.it/50x50"></td>
    <td>Jeffrey Derose</td>
    <td>College of Staten Island</td>
    <td>Computer Science</td>
    <td>4.5 out of 5 stars</td>
  </tr>
  <tr>
    <td><img src="//placehold.it/50x50"></td>
    <td>Jeffrey Derose</td>
    <td>College of Staten Island</td>
    <td>Computer Science</td>
    <td>4.5 out of 5 stars</td>
  </tr>
  <tr>
    <td><img src="//placehold.it/50x50"></td>
    <td>Jeffrey Derose</td>
    <td>College of Staten Island</td>
    <td>Computer Science</td>
    <td>4.5 out of 5 stars</td>
  </tr>
  <tr>
    <td><img src="//placehold.it/50x50"></td>
    <td>Jeffrey Derose</td>
    <td>College of Staten Island</td>
    <td>Computer Science</td>
    <td>4.5 out of 5 stars</td>
  </tr> -->
            </tbody>
</table>
      </div>
        <div class="col-md-4">
          <div class="dropdown btn-group ">
    <button class="btn dropdown-toggle btn-success btn-group-justified " type="button" href="#" data-toggle="dropdown">
        Filters
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
        <li>Rating</li>
        <li>Distance</li>
    </ul>
</div>
      </div>
    </div>
</div>
<!-- /.container -->
        
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


        <script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>



<script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.1/angular.min.js"></script>


        
        <!-- JavaScript jQuery code from Bootply.com editor  -->
        
        <script type='text/javascript'>
        
        $(document).ready(function() {
        
            
        
        });
        
        </script>
        
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-40413119-1', 'bootply.com');
          ga('send', 'pageview');
        </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>