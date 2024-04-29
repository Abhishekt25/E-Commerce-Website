<?php include '../head.php'; ?>

<body>
<div class="log-form">
    <h2>LogIn</h2>
    <form action="login2.php" method="post">
     <label for="urname">Username:</label>
     <input type="text" name="urname" id="urname" required> <br><br>
     <label for="password">Password:</label>
     <input type="password" name="password" id="password" required><br><br>

     <button type="submit" name="submit">LogIn</button>
     <a href="registrationform.php" class="link">Register</a>
    </form>
</div>
</body>