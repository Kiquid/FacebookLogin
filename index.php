<?php
session_start(); 

$id = $_SESSION['userData']['id'];
$First_name = $_SESSION['userData']['first_name'];
$Last_name =  $_SESSION['userData']['last_name'];
$Email = $_SESSION['userData']['email'];
$pic = $_SESSION['userData']['picture']['url'];
?>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3" align="center">
            <img src="<?php echo $pic ?>"/>
            
            </div>    
            <div class="col-md-9" align="center">
             <table class="table table-hover table-bordered">
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td><?php echo $id ; ?></td>
                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td><?php echo $First_name ?></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><?php echo $Last_name ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $Email ?></td>
                    </tr>
                </tbody>                         
             </table>            
            </div>     
      </div>
    </div>
</body>
</html>