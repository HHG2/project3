<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="style.css">
    <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
    require("conncet.php");

   $error ='';
   if(isset($_POST['Register'])){
      $firstname= $_POST['firstname'];
      $lastname= $_POST['lastname'];
      $email =$_POST['email'];
      $phone =$_POST['phone'];
      $password =$_POST['password'];
      $password =$_POST['password2'];
   
   // check connection
   if (!$conn) {
   die("Conncetion failed:". mysqli_conncet_error());
   }
   $sql = "INSERT INTO user (firstname, lastname, email, phone, password) VALUES ('$firstname','$lastname','$email','$phone','$password')";
   $result = mysqli_query($conn,$sql);
   if (!$result){
      die("Error: " . mysqli_error($conn));
   }
   print("inserted 1 row");
}

?>
<?php if (!empty($error)){?><h1 class="error"><?php echo $error;?></h1><?php }?>
</head>
<body>
    <div class="container">
        <h2>Registration form</h2>
        <form method="POST" action="">
            <div class="input-name">
                <i class="fa fa-user lock"></i>
                <input type="text" name="firstname" placeholder="FirstName" class="name">
                <span>
                        <i class="fa fa-user lock"></i>
                        <input type="text" name="lastname" placeholder="LastName" class="name">
                </span>
            </div>
            <div class="input-name">
                <i class="fa fa-envelope email"></i>
                <input type="email" name="email" placeholder="Email" class="text-name">
                </div>
                <div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="tel" name="phone" placeholder="phone" class="text-name">
                    </div>
                <div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="password" name="password" placeholder="password" class="text-name">
                    </div>
                    <div class="input-name">
                        <i class="fa fa-lock lock"></i>
                        <input type="password" name="password2" placeholder="confirm password" class="text-name">
                        </div>
                       
                        <div class="input-name">
                            <input type="radio" class="radio-button" name="r1">
                            <label style="margin-right: 30px;">Male</label>
                            <input type="radio" class="radio-button" name="r1">
                            <label >Female</label>
                            </div>
                            <div class="input-name">
                                <select class="country">
                                    <option>select acountry</option>
                                    <option>Sudan</option>
                                    <option>Egypt</option>
                                    <option>italy</option>
                                    <option>india</option>
                                    <option>japan</option>
                                    <option>quter</option>
                                    <option>USA</option>
                                    <option>chane</option>
                                    <option>KSA</option>
                                    </select>
                                    <div class="arrow"></div>
                                    </div>
                                    <div class="input-name">
                                        <input type="checkbox" class="check-button">
                                        <label>I accept the terms and conditions</label>
                                    </div>
                                    <div class="input-name">
                                        <input type="submit" name ="Register" class="button" value="Register">
                                    </div>


                                    
                                </div>
        </form>
    </div>
</body>
</html>