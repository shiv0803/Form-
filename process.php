<?php
$name=$_REQUEST["fname"];    
echo "$name"."<br>"; 

$email=$_REQUEST["email"];    
echo "$email"."<br>"; 

$password=$_REQUEST["password"];    
echo "$password"."<br>"; 

$cpassword=$_REQUEST["cpassword"];    
echo "$cpassword"."<br>"; 

$number=$_REQUEST["Cnumber"];
echo "$number"."<br>";

$gender = $_POST["gender"];
echo "$gender"."<br>";
$connect=mysqli_connect('localhost','root','');
mysqli_select_db($connect,'userdata');
?>

<?php
$username = $_POST["fname"];
$password = $_POST["password"];

if ($username =="shivanshi" && $password == "shiv")
{
    $expire = 60860;

    $_cookiename = "user";
    $_cookievalue = "shivanshi";

    setcookie(
        $_cookiename,
        $_cookievalue,
        time() + $expire,
    );
}
?>
