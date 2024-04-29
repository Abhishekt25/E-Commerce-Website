<?php

 require 'config.php';

if(isset($_POST['submit'])){
    $product_name = $_POST['Pname'];
    $product_price =$_POST['Pprize'];
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    $destination_directory = "uploadimage/" .$image_name;
    move_uploaded_file($image_loc, $destination_directory);
    $product_category = $_POST['Pages'];

    $sql = "INSERT INTO tblproduct (PName , PPrice, PImage, PCategory) VALUES ('$product_name', '$product_price', '$destination_directory', '$product_category')";
    $result = mysqli_query($conn,$sql);
    if($result){
        // echo "result inserted successfully";

        echo "<script>window.location.href='addpostform.php'</script>";
     }else{
         echo "the result was not inserted successfully" . mysqli_error($conn);
     }
}
?>

