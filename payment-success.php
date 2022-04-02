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
    $ids = $_SESSION['last_updated_id'];
    $tables = $_SESSION['tables'];
    
    $sql = "SELECT * FROM $tables  WHERE `id` = '$ids'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    print_r($row);die;
    $length = 18;
    $merchant_order_id=substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz', ceil($length/strlen($x)) )),1,$length);
    $merchant_trans_id= time();
    $merchant_product_info_id = 'Payment for Admission';
    $merchant_surl_id = 'payment-success.php';
    $merchant_furl_id = 'payment-success.php';
    if(!empty($row['comp_name'])){
      $card_holder_name_id =$row['comp_name'];
    }
    if(!empty($row['company_name'])){
      $card_holder_name_id =$row['company_name'];
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
    $finaldata['card_holder_name_id'] = $card_holder_name_id;
    $finaldata['someprice'] = $someprice;
    $finaldata['total'] = $total;
    $finaldata['amount'] = $amount;
    $finaldata['order_id'] = $order_id;
    $finaldata['razorpay_payment_id'] = $_POST['razorpay_payment_id']; 
    // print_r( $finaldata);
      if(isset($_POST['razorpay_payment_id'])){
        // echo '<pre>';
        //  print_r($_SESSION['last_updated_id']);die;
      $payment_details=json_encode($finaldata);
      $razorpay_payment_id = $_POST['razorpay_payment_id']; 
      $payment_status = 1;
      $sessionid = $_SESSION['last_updated_id'];
      // print_r($sessionid);die;
      
      $table = $_SESSION['tables'];
      $ids = $_SESSION['last_updated_id'];
      $sql="UPDATE $table SET payment_status = '$payment_status',payment_id = '$razorpay_payment_id', payment_details = '$payment_details' WHERE `id`=$sessionid";
      // print_r($sql);
      $rslt = $conn->query($sql);
          
      // print_r($rslt);die;
      if(!empty($_SESSION['payment_2'])){
        unset($_SESSION['payment_2']);
         $use_id =  json_decode($_COOKIE['Cookie'],true); 
         $cust_id=$use_id['id'];
         print_r($cust_id);
         $start_date = date('Y-m-d');
         $expire_date = date("Y-m-d",strtotime("+60 day"));
         $sql1 = "INSERT INTO `myc_subscription`(`cust_id`,`start_date`,`expire_date`) VALUES ('$cust_id','$start_date','$expire_date')";
         print_r($sql1);
         $qrys=mysqli_query($conn,$sql1);
         print_r($qrys);die;
         if($qrys){
            $type = "EOT Crane";
            $added_on = date('Y-m-d');
            $count = 1;
            $qrys3 = "SELECT `id` FROM `myc_subscription_count` WHERE `user_id`='$cust_id'";
            print_r($qrys3);die;
            $run3=mysqli_query($conn,$qrys3);
            $runs=mysqli_num_rows($run3);
             setcookie("count",$runs,time() + (86400 * 30),"/");
            if($runs==0){
              $qrys2 = "INSERT INTO `myc_subscription_count`(`user_id`,`type`,`count`,`added_on`) VALUES ('$cust_id','$type','$count','$added_on')";
              $sqls=mysqli_query($conn,$qrys2);
              print_r($sqls);die;
                $qrys4 = "SELECT `id` FROM `myc_subscription_count` WHERE `user_id`='$cust_id'";
                print_r($qrys4);
               $run4=mysqli_query($conn,$qrys4);
              $runss=mysqli_num_rows($run4);
               setcookie("count",$runss,time() + (86400 * 30),"/");
                  
            }
         }
      }die;
    }
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
              <a href="subscription_report.php" class="btn btn-success mt-2">Done</a>
            </div>
          </div>
        </div>
      </div>
    </section>
   <!-- <?php include'footerlink.php'; ?> -->
    <?php include 'footer-link.php';?>
  </body>
</html>