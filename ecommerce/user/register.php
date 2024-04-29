<?php
 require 'config.php';

if(isset($_POST['submit'])){
    $urname   = $_POST['urname'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $gender   = $_POST['gender'];

   
   
    $Dup_email =mysqli_query($conn, "SELECT * FROM `registrations` WHERE email= '$email'");
    $Dup_urname =mysqli_query($conn, "SELECT * FROM `registrations` WHERE urname='$urname' ");

    if(mysqli_num_rows($Dup_email)){
      echo "
               <script>
               alert('Email is already taken');
               window.location.href='registrationform.php';
               </script>";
    }else{
       //sql query to be executed
      $sql = "INSERT INTO registrations (urname ,email,password,gender) VALUES ('$urname', '$email', '$password', '$gender')";
      $result = mysqli_query($conn,$sql);
      if($result){
            echo "<script>
                  alert('Registration successfully');
                 window.location.href='loginn.php';
                </script>";
      }

    }

}
?>