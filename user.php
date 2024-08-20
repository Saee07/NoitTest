<?php
if(isset($_POST['submit'])){
    $con=mysqli_connect('localhost','root','','test1');
    if(!$con){
        die(mysqli_error($con));
    }
    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $message=$_POST['msg'];

    $qry="INSERT INTO `test`(`name`, `email`, `message`) VALUES ('$name','$mail','$message')";
    $res=mysqli_query($con,$qry);

    if($res){
        header('location:user.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg col-md-8 col-sm-10">
                <form class="form mt-5" method="post">
                    <h4 class="text-center">Submission Form</h4>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input id="name" class="form-control" type="text" name="name" autocomplete="off" placeholder="Enter your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="mail">Email:</label>
                        <input id="mail" class="form-control" type="email" name="mail" autocomplete="off" placeholder="Enter your Email" required>
                    </div> 
                    <div class="form-group">
                        <label for="msg">Message:</label>
                        <textarea id="msg" class="form-control" name="msg" autocomplete="off" placeholder="Enter here"></textarea>
                    </div>  
                    <button class="btn btn-primary btn-block" name="submit">Submit</button>    
                </form>
            </div>
        </div>
    </div>
</body>
</html>
