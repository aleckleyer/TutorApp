<?php   
        session_start();
        if(!(isset($_SESSION['valid_user_email']))){
            header('Location:index.php');
        }
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
                <div class="col-md-12">
                    <h1>Messages</h1>
                    <p>Would you like to <a href="#show" id="showSend">send</a> a message, or <a href="#show" id="showMessages">show</a> your messages?</p>
                    <form method="post" action="sendMessage.php" id="formShow" class="form-horizontal" style="display:none">
                        <div class="form-group">
                            <label class="control-label">To:</label>
                            <input type="text" name="sendTo" class="form-control" data-toggle="modal" data-target="#myModal" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Message:</label>
                            <textarea class="form-control" name="messageTo"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" />
                        </div>
                    </form>
                    <table class="table" id="showMessagesTable" style="display:none">
                        <tr>
                            <th>From</th>
                            <th>Message</th>
                        </tr>
                        <tr>
                        
                        <?php 

                            include 'showMessages.php'; ?>
                    </table>

<?php 
                    if($_SESSION['message_sent']==1){
                        echo '<div id="messageComplete" class="alert alert-success" role="alert">Message sent!</div>';
                    } else if($_SESSION['message_sent']==-1){ 
                        echo '<div id="messageFailed" class="alert alert-danger" role="alert">There was a problem with your message...</div>';
                    }  
?>
                    
                    
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Users</h4>
              </div>
              <div class="modal-body">
                  <?php 
                  
                    $sql = "SELECT FirstName, LastName FROM users";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0) {
                        echo "<ul class='list-unstyled'>";
                        while($row = $result->fetch_assoc()) {
                            echo "<li><a class='inputOption'>".$row['FirstName']. " " .$row['LastName']. "</a></li><br>";
                        }
                        echo "</ul>";
                    }

                  ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


        <script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>



<script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.1/angular.min.js"></script>


        
        <!-- JavaScript jQuery code from Bootply.com editor  -->
        
        <script type='text/javascript'>
        
        $(document).ready(function() {
        
            $('#showSend').click(function(){
                $('#formShow').css("display","block");
                $('#showMessagesTable').css("display","none");
            });
            
            $('#showMessages').click(function(){
                $('#showMessagesTable').css("display","block");
                $('#formShow').css("display","none");
            });
            
            $('#sendTo').click(function(){
                $('#myModal').modal('show');
            });
            
            $(".inputOption").click(function(){
                $('input[name=sendTo]').val($(this).html());
            });
            
            $(".inputOption").hover(function(){
                $(this).css("cursor","pointer");
            })
        
        
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