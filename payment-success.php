<?php
session_start();
include'connection.php';
$msg = "";
    if (isset($_SESSION['msg'])) {
        $msg = $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    if ($msg != "") {
        echo "<script> alert('$msg')</script>";
    }
    $cust_id=$_SESSION['user_id'];
    $ids = $_SESSION['last_updated_id'];
    $tables = $_SESSION['tables'];
    $sql = "SELECT * FROM $tables  WHERE `id` = $ids";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    // print_r($row['comp_name']);die;
    $length = 18;
    $merchant_order_id=substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz', ceil($length/strlen($x)) )),1,$length);
    $merchant_trans_id= time();
    $merchant_product_info_id = 'Payment for Admission';
    $merchant_surl_id = 'payment-success.php';
    $merchant_furl_id = 'payment-success.php';
    if(!empty($row['comp_name'])){
      $card_holder_name_id =$row['comp_name'];
      $finaldata['card_holder_name_id'] = $card_holder_name_id;
    }
    if(!empty($row['company_name'])){
      $card_holder_name_id =$row['company_name'];
      $finaldata['card_holder_name_id'] = $card_holder_name_id;
    }
    $someprice = $row['amount'];  
    $paisaprice = $someprice*100;
    $total = $paisaprice;
    $amount = $row['amount'];
    $order_id = $merchant_order_id;
    $finaldata['merchant_trans_id'] = $merchant_trans_id;
    $finaldata['merchant_product_info_id'] = $merchant_product_info_id;
    $finaldata['merchant_surl_id'] = $merchant_surl_id;
    $finaldata['merchant_furl_id'] = $merchant_furl_id;
    $finaldata['someprice'] = $someprice;
    $finaldata['total'] = $total;
    $finaldata['amount'] = $amount;
    $finaldata['order_id'] = $order_id;
    $finaldata['razorpay_payment_id'] = $_POST['razorpay_payment_id']; 
      if(isset($_POST['razorpay_payment_id'])){
      $payment_details=json_encode($finaldata);
      $razorpay_payment_id = $_POST['razorpay_payment_id']; 
      $payment_status = 1;
      $table = $_SESSION['tables'];
      $sql="UPDATE $table SET payment_status = '$payment_status',payment_id = '$razorpay_payment_id', payment_details = '$payment_details' WHERE `id`=$ids";

      $rslt = $conn->query($sql);
      if(!empty($_SESSION['payment_2'])){
         $start_date = date('Y-m-d');
         $expire_date = date("Y-m-d",strtotime("+60 day"));
         $sql1 = "INSERT INTO `myc_subscription`(`cust_id`,`start_date`,`expire_date`) VALUES ('$cust_id','$start_date','$expire_date')";
         $qrys=mysqli_query($conn,$sql1);
         if($qrys){
            $type = "EOT Crane";
            $added_on = date('Y-m-d');
            $count = 1;
            $qrys3 = "SELECT `id` FROM `myc_subscription_count` WHERE `user_id`='$cust_id'";
            
            $run3=mysqli_query($conn,$qrys3);
            $runs=mysqli_num_rows($run3);
             setcookie("count",$runs,time() + (86400 * 30),"/");
            if($runs==0){
              $qrys2 = "INSERT INTO `myc_subscription_count`(`user_id`,`type`,`count`,`added_on`) VALUES ('$cust_id','$type','$count','$added_on')";
              $sqls=mysqli_query($conn,$qrys2);
                $qrys4 = "SELECT `id` FROM `myc_subscription_count` WHERE `user_id`='$cust_id'";
               $run4=mysqli_query($conn,$qrys4);
              $runss=mysqli_num_rows($run4);
               setcookie("count",$runss,time() + (86400 * 30),"/");
                  
            }
         }
      }
    }
    unset($_SESSION['user_id']);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Payment Success</title>
        <?php include 'header-link.php'; ?> 
  </head>
  <body style="background: #dff5df;">
    <section class="payment-success">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="payment-success-box">
              <img src="https://img.icons8.com/ios-filled/50/000000/cloud-checked.png"/>
              <h3>Payment Successfull !!!</h3>
              <p style="color:green;">Your Payment has been Successfully Recieved !!!</p>
              <?php 
                if(!empty($_SESSION['payment_2'])){
                  unset($_SESSION['payment_2']);
                  ?><a href="subscription_report.php" class="btn btn-success mt-2">Done</a><?php
                }
                else{
                  ?><a href="home.php" class="btn btn-success mt-2">Done</a><?php
                }

              ?>
              
            </div>
          </div>
        </div>
      </div>
    </section>
   <!-- <?php include'footerlink.php'; ?> -->
    <?php include 'footer-link.php';?>
  </body>
</html>