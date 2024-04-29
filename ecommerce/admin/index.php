<?php include '../head.php'; ?>

<?php
     session_start();
     if(!$_SESSION['admin']){
        header('location:login.php');
     }
     ?>
<body>
    <?php
     // include header file
     include('storehader.php');
    ?>
    <div class="body-container">
        <h2>Dashboard</h2>
   </div>
        <div class="dashboard">
            <a href="addpostform.php" class="adash">ADD Post</a>
            <a href="" class="adasha">User </a>
        </div>

    
       
  
        
   


</body>
</html>