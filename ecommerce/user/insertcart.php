<?php

session_start();
//    session_destroy();


$product_name = $_POST['PName'];
$product_price = $_POST['PPrice'];
$product_quentity = $_POST['PQuantity'];

$first_data = false;

if (isset($_POST['addcart'])) {
  if(is_array($_SESSION['cart'])){
    $check_product = array_column($_SESSION['cart'], 'productName');
    if (in_array($product_name, $check_product)) {
      echo "
          <script>
          alert('product already added');
          window.location.href='main.php';
          </script>";
    } else {
      $first_data = true;
    }
  }else{
    $first_data = true;
  }

  if( $first_data == true ){
    $_SESSION['cart'][] = array(
      'productName' => $product_name,
      'productPrice' => $product_price,
      'productQuantity' => $product_quentity
    );
    header("location:viewcart.php");
  }
  
}

// remove product

if (isset($_POST['remove'])) {
  foreach ($_SESSION['cart'] as $key => $value) {
    if ($value['productName'] === $_POST['item']) {
      unset($_SESSION['cart'][$key]);
      $_SESSION['cart'] = array_values($_SESSION['cart']);
      header("location:viewcart.php");

    }
  }
}

//update product

if(isset($_POST['update'])) {
  foreach ($_SESSION['cart'] as $key => $value){
    if($value['productName'] === $_POST['item']){
      $_SESSION['cart'][$key] = array('productName' => $product_name,
                                    'productPrice' => $product_price,
                                    'productQuantity' => $product_quentity);
                                     header("location:viewcart.php");

  }

    }
  }


?>