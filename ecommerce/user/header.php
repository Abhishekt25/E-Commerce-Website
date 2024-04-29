
<?php include '../head.php'; ?>
<body>
<?php
session_start();
$count=0;
  if(isset($_SESSION['cart'])){
    $count=count($_SESSION['cart']);

  }
 ?>
    <header id="header">
        <div class="container">
            <div class="logo">
                <img src="../admin/Images/logo.png"  alt="logo" width="150px" height="80px">
            </div>
            <nav class="nav">
                    <ul>
                        <li><a href="main.php">Home </a></li>
                        <li><a href="viewcart.php"><i class="fa-solid fa-cart-shopping"></i> Cart (<?php echo $count ?>)</a></li>
                        <?php 
                        if(isset($_SESSION['user'])){
                        echo $_SESSION['user'];
                        echo "<li><a href='logoutt.php'>LogOut</a></li>";
                     }else{
                        echo "<li><a href='loginn.php'>LogIn</a></li>";
                     }
                        ?>
                       
                    </ul>
            </nav>
    </header>
    <div class="head-container">
        <ul>
            <li><a href="laptop.php">LAPTOPS</a></li>
            <li><a href="mobile.php" class="li-head">MOBILES</a></li>
            <li><a href="bag.php"class="li-head">BAGS</a></li>
        </ul>
    </div>

</body>
</html>

