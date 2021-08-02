<!DOCTYPE html>
<html>
<head>
  <title>Database Table</title>
</head>
<body>
<table>
   <tr>
     <th>FirstName</th>
     <th>LastName</th>
     <th>Email</th>
     <th>Password</th>
     <th>Phonenumber</th>
   </tr>
   <?php
   $conn = mysqli_connect("remotemysql.com","Mgimj46xGd","mkMiuOjzLg","Mgimj46xGd");
   if ($conn-> connect_error){
     die("Connection failed:". $conn-> connect_error);
   }
  
   $sql = "SELECT * from attendee";
   $result = $conn-> query($sql);
    
  /*if ($result-> num_rows > 0){
     while ($row = $result-> mysqli_fetch_assoc()) {
      echo "<tr><td>". $row["Firstname"] ."</td><td>". $row["Lastname"] ."</td><td>". $row["Email"] ."</td><td>". $row["Password"] ."</td><td>". $row["Phonemumber"] ."</td><td>";
   }
      echo "</table>";
 }
 else {
       echo "0 result";
 }*/
 while ($row = mysqli_fetch_array($result)) {
      echo "<tr><td>". $row["Firstname"] ."</td><td>". $row["Lastname"] ."</td><td>". $row["Email"] ."</td><td>". $row["Password"] ."</td><td>". $row["Phonenumber"] ."</td><td>";
 }
 
   ?>  

</table>
</body>
</html>
