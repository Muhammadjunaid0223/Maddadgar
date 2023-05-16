

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <form action="" method="post">
        <p>Enter Name</p>
        <input type="text" name="name">

        <p>Enter Email</p>
        <input type="email" name="mail">

        <p>Enter Password</p>
        <input type="text" name="pass">
<br><br>
<button type="submit" name="btn">Login</button>
    </form>
    </center>
    <?php
if(isset($_POST["btn"])){
require_once('config.php');
$name = $_POST["name"];
$mail = $_POST["mail"];
$pass = $_POST["pass"];


$check = "SELECT * FROM `admin` WHERE Email ='$mail' and Password ='$pass'";
$runcheck = mysqli_query($conn,$check);
$num = mysqli_fetch_array($runcheck);


if($num > 0 ){

    echo "<script>
    alert ('Yor Are Login Succesfully')
    window.location.href = 'Userlogin.php'
    </script>";
}
else{
    echo "<script>
    alert ('Login Failed Please Try Again')
    window.location.href = 'AdminLogin.php'
    </script>";
}
}
?>
</body>
</html>