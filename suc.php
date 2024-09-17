<?php
include("connect1.php");
?>

<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
.container {  
    padding: 50px;  
  background-color: lightblue;  
  background-image: url("./images/suc.png");  
  background-position: center;
  background-size: cover;
  position: relative;
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>  
</head>  
<body>  
<form action="" method="post">  
  <div class="container">  
  <center>  <h1> Be the part of SUC Right Now </h1> </center>  
  <hr>  
<label> Name : </label>   
<input type="text" name="name" placeholder= "Name" size="50" required />   
<label> Roll Number : </label>   
<input type="text" name="roll" placeholder= "Roll No." size="15" required />
<label>   
    Phone :  
    </label>  
    <input type="text" name="contact" placeholder="Phone no." size="10"/ required> 
    <label> Year : </label>   
<input type="text" name="year" placeholder= "Roll No." size="15" required />

<center>
<div>  
<label>   
Branch :  
</label><br>  
<input type="radio" value="CS" name="branch" checked > CS   
<input type="radio" value="IT" name="branch"> IT  
<input type="radio" value="CSBS" name="branch"> CSBS 
<input type="radio" value="EXTC" name="branch"> EXTC  
<input type="radio" value="Instrumentation" name="branch"> Instrumentation  
  
</div>
</center>  
  
 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email" required>  

 <input type="submit" name="submit" class="registerbtn" value="Submit">  
</form>  

    <?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$roll=$_POST['roll'];
$contact=$_POST['contact'];
$year=$_POST['year'];
$branch=$_POST['branch'];
$email=$_POST['email'];

$result=mysqli_query($mysqli,"insert into suctable values('$name','$roll','$contact','$year','$branch','$email')");
if($result)
{
echo "Registration Successful";
}
else{
echo "failed";
}
}
?>

</body>
</html>