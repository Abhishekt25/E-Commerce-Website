<?php include '../head.php'; 

include 'header.php';
?>

<body>
    

        <div class="container-fluid">
            <div class="col-md-12">
            <div class="row">
                <h1 class="text-warning font-monospace text-center my-3">LAPTOPS</h1>          
                  
                <?php include 'config.php';

            $Record = mysqli_query($conn, "select * from tblproduct");
            while ($row = mysqli_fetch_array($Record)) {
                  
                $check_page =$row['PCategory'];
                if($check_page === 'laptop'){




               echo "
               <div class='col-md-6 col-lg-4 m-auto mb-3 '>

               <form action='insertcart.php' method='POST'>
                <div class='card m-auto' style='width: 18rem;'>
                <img src='../admin/$row[PImage]' class='card-img-top' alt=''...''>
                <div class='card-body' text-center>
                  <h5 class='card-title text-danger fs-4 fw-bold'>$row[PName]</h5>
                  <p class='card-texttext-danger fs-4 fw-bold'>RS:$row[PPrice]</p>
                  <input type='hidden' name='PName' value='$row[PName]'>
                  <input type='hidden' name='PPrice' value='$row[PPrice]'>
                  <input type='number' name='PQuantity' value=' min='1' max='20'' placeholder='Quantity'><br><br>
                  <input type='submit' name='addcart' class='btn btn-warning text-white w-100' value='Add To Cart'>
                 
                </div>
              </div>
              </form>
              </div>";
             

            }
        }

            ?>
            </div>
            </div>
        </div>
       
   

</body>

</html>