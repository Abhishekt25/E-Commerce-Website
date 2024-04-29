<?php include '../head.php'; ?>

<body>
    <div class="addform">
        <h2>Product Details</h2>
        <!-- /curd/ecommerce/admin/ -->
    <form action="addpost.php" method="POST" enctype="multipart/form-data">
        <label for="proname ">Product Name:</label>
        <input type="text" name="Pname" id="proname" ><br> <br>
        <label for="proprize">Product Prize:</label>
        <input type="number" name="Pprize" id="proprize"><br><br>
        <label for="addproim">Add Product Image:</label>
        <input type="file" name="Pimage" id="addproim"><br>
        <label for="category">Select Page Pategory:</label>
        <select name="Pages" class="form-select">
            <option value="home">Home</option>
            <option value="laptop">Laptop</option>
            <option value="bag">Bag</option>
            <option value="mobile">Mobile</option>
        </select><br><br>
        <button type="submit" name="submit">Upload</button>
    </form>
    </div>

    <table class="tabletable">
         <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Category</th>
            <!-- <th>Delete</th> -->
         </thead>
         <tbody class="tbody">

        <?php
          include 'config.php';
          $sql= "SELECT * From tblproduct" ;
          $Record =mysqli_query($conn, $sql);
       
           while($row = mysqli_fetch_array($Record)){
          

            echo "<tr>
                      <td>$row[id]</td>
                      <td>$row[PName]</td>
                      <td>$row[PPrice]</td>
                      <td><img src='$row[PImage]' width='150px' height='100px'> </td>
                      <td>$row[PCategory]</td>
                  
                </tr> ";
                
           }



        ?>
      
        </tbody>
        </table>           
        
</body>
</html>
