<?php include '../head.php'; ?>

<body>
<div class="log-form">
    <h2>LogIn</h2>
    <form action="login1.php" method="post">
     <label for="username">Username:</label>
     <input type="text" name="username" id="username" required> <br><br>
     <label for="userpassword">Password:</label>
     <input type="password" name="userpassword" id="userpassword" required><br><br>

     <button type="submit" name="submit">LogIn</button>
     <!-- <a href="registrationform.php" class="link">Register</a> -->
    </form>
</div>
</body>