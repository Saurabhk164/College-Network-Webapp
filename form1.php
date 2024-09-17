<?php
include("connect4.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
</head>
<body>

<div class="contact-col">
            <h1>Post your Query</h1>
            <form action="form1.php" id="contact-form" method="POST">
                <input type="text" name="Name" id="Name" placeholder="Enter your Name" required>
                <input type="email" name="Email" id="Email" placeholder="Enter your Email" required>
                <input type="text" name="Subject" id="Subject" placeholder="Enter your Subject" required>
                <textarea rows="8" name="Message" id="Message" placeholder="Message" required></textarea>
                <input type="submit" name="Submit" class="hero-btn red-btn submit-btn" required>
            </form>
            <div id="status"></div>
        </div>
    </div>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['Name'];
$roll=$_POST['Email'];
$contact=$_POST['Subject'];
$year=$_POST['Message'];

$result=mysqli_query($mysqli,"insert into formtable values('$Name','$Email','$Subject','$Message')");
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



