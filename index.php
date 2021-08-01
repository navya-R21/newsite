<?php
$conn=mysqli_connect("remotemysql.com","Mgimj46xGd","mkMiuOjzLg","Mgimj46xGd") or die(mysqli_error($conn));

if(isset($_POST['submit'])){
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $phonemunber=$_POST['phonenumber'];
  

  $query="Insert into attendee(Firstname,Lastname,Email,Password,Phonenumber)values('$firstname','$lastname','$email','$password','$phonemunber')";
  $run=mysqli_query($conn,$query) or die(mysqli_error($conn));
  
}
?>


<!DOCTYPE html>
<html>
<head><body>


<Font Size="5">
   <title> Registration Form | PHP</title>
</head>
<body bgcolor="lightblue">
</body>

   <form method="post">
      <div class="form">
      <form action="" method="POST">
        <center> <h1> Registration </h1></center>
        <center><p> Fill up the form with correct values </p></center>
         
         <Font Size="3">
         <center>
         <table>
         <tr>
         <td><label for="firstname"><b>First name<b></label></td>
         <td><input type="text" name="firstname" placeholder="firstname" required""></td>
         </tr>
            
         <tr>
         <td><label for="lastname"><b>Last name<b></label></td>
         <td><input type="text" name="lastname" placeholder="lastname" required""></td>
         </tr>

         <tr>         
         <td><label for="email"><b>Email<b></label></td>
         <td><input type="email" id="email" name="email" placeholder="emailid" required""></td>
         </tr>

         <tr>
         <td><label for="password"><b>Password<b></label></td>
         <td><input type="password" name="password" placeholder="password" required""></td>
         </tr>
         

         <tr>
         <td><label for="phone number"><b>Phone number<b></label></td>
         <td><input type="text" name="phonenumber" placeholder="phone number" required""></td>
         </tr>
         
         
         
         <tr><td>
         <td><input type="Submit" value="submit" name="submit"></center></td>
         </tr>
         </table> </center>

</div>
</form>
</body>
</html>
