<?php include '../head.php'; ?>

<body>
    <div class="reg-form">
    <h2>User Registration</h2>
    <!-- /curd/ecommerce/ -->
    <form action="register.php" method="post">
     <label for="urname">Username:</label>
     <input type="text" name="urname" id="urname" required><br><br>
     <label for="email">Email:</label>
     <input type="email" name="email" id="email" required> <br><br>
     <label for="password">Password:</label>
     <input type="password" name="password" id="password" required><br><br>
     <label for="gender">Gender:</label>
     <select name="gender" id="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select><br><br>
     <button type="submit" name="submit">Register</button><br><br>
     <a href="loginn.php" class="link">Already Register</a>
  
    </form>
    </div>
 
</body>
</html>