
<?php

require 'config.php';


$Name =$_POST['urname'];
$Password=$_POST['password'];

$result = mysqli_query($conn," SELECT * FROM `registrations` WHERE (urname='$Name' OR email='$Name') AND password='$Password' ");


session_start();
if(mysqli_num_rows($result))
{

    $_SESSION['user']=$Name;
    echo " <script>
    alert('Succesfully login');
    window.location.href='main.php';
    </script>";
}
else{
    echo " <script>
    alert('incorrect email/urname/password  ');
    window.location.href='loginn.php';
    </script>";

}

?>