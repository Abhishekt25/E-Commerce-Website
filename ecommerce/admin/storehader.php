<?php include '../head.php'; ?>

<body>
    <header id="header">
        <div class="container">
            <div class="logo">
                <img src="Images/logo.png"  alt="logo" width="150px" height="80px">
            </div>
            <nav class="nav">
                    <ul>
                        <li><a href="#">Home <?php echo $_SESSION['admin']; ?></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-shopping"></i> Cart</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                        <!-- <li><a href="addpostform.php">Admin</a></li> -->
                    </ul>
            </nav>
    </header>

</body>
</html>