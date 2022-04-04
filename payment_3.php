<?php 
session_start();
include'connection.php';
$tb = $_SESSION['tables'];  
 $sql = "select * from ".$_SESSION['tables']." where id = '$_SESSION[last_updated_id]'";
 // print_r($sql);
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
// echo '<pre>';
// print_r($row);die;
include 'payment_constant.php';
$someprice = $row['amount'];        
// 
$paisaprice = $someprice*100;
$orderno = $row['order_no'];
$custname = $row['comp_name'];
$productinfo = 'Payment for Admission';
$txnid = time();
$surl = "payment-success.php";
$furl ="payment-success.php" ;
$key_id = API_KEY;
$currency_code = 'INR';
$total = $paisaprice; 
$amount = $someprice;
$length = 18;
$merchant_order_id=substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz', ceil($length/strlen($x)) )),1,$length);
$card_holder_name = $custname;
$email =  'abs@gmail.com';
// $phone = $row['contact'];
$name = "Customer of $custname - $orderno";

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <title>Make Payment</title>
         <?php include 'header-link.php'; ?> 
  </head>
  <body style="background:#ffaf00;">
<section class="payment-page">  
    <div class="container">
    <div class="row" style='background-color:#ffaf00;'>
        <div class="col-md-1"></div>
        <div class="col-md-10 p-3">   
            <h3 style="color:#fff;">Make Payment</h3><hr/>   
            <div class="row">

                <div class="col-md-12 card p-3">
                    <div class="row">
                        <div class="col-6 col-md-6">
                            <h3><?php echo ucwords($row['comp_name']);?></h3>
                            
                        </div>
                        
                    </div><hr/>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <u><h5>Request Details</h5></u>
                                <div class="form-row">
                                    <label for="" class="col-6 col-md-6">Order No :</label>
                                    <p class='col-6 col-md-6'><?php echo $row['order_no'];?></p>
                                </div>
                                <div class="form-row">
                                    <label for="" class="col-6 col-md-6">Request Total Amount:</label>
                                    <p class='col-6 col-md-6 text-danger' style='font-size:20px;font-weight:600'>Rs.<?php echo $row['amount'];?></p>
                                </div>
                                <div class="form-row p-2">
                                    <div class="col-1 col-md-2"></div>
                                    <div class="col-10 col-md-8 text-center">
                                        <form action='payment-success.php' id="razorpay-form" method="post">
                                        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" />
                                        <input  id="submit-pay" type="button" onclick="razorpaySubmit(this);" value="PAY NOW" class="btn btn-sm btn-warning" />
                                        <!-- <a href="payment_barcode.php" class="btn btn-sm btn-success">PAY NOW</a> -->
                                        </form>
                                    </div>
                                    <div class="col-1 col-md-2"></div>
                                </div>                            
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    
                </div>
            </div>                 
        </div>
        <div class="col-md-1"></div>
    </div>
    
    </div>
</section>

    <?php include 'footer-link.php';?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>   
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<?php
function random_number($l){
	$num=range(0,9);
	   shuffle($num);
	   $res="";
	   for ($i=0; $i<$l; $i++) {      
		  $res.=$num[$i];    
	   }    
	   return ($res);
	}
	function random_string($length){
		$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randstring = '';
		for ($i = 0; $i < $length; $i++) {
			$randstring .= $characters[rand(0, strlen($characters)-1)];
		}
		return $randstring;
	}
?>
     <script>
    var razorpay_options = {
        key: "<?php echo $key_id; ?>",
        amount: "<?php echo $total; ?>",
        name: "<?php echo $name; ?>",
        description: "Order # <?php echo $merchant_order_id; ?>",
        netbanking: true,
        currency: "<?php echo $currency_code; ?>",
        prefill: {
        name:"<?php echo $card_holder_name; ?>",
        email: "<?php echo $email; ?>"
        },
        notes: {
        soolegal_order_id: "<?php echo $merchant_order_id; ?>",
        },
        handler: function (transaction) {
            document.getElementById('razorpay_payment_id').value = transaction.razorpay_payment_id;
            document.getElementById('razorpay-form').submit();
        },
        "modal": {
            "ondismiss": function(){
                location.reload()
            }
        },
        callback_url: 'https://app.craniumservices.in/payment-success.php',
         


    };
    var razorpay_submit_btn, razorpay_instance;

    function razorpaySubmit(el){
        debugger;
        if(typeof Razorpay == 'undefined'){
        setTimeout(razorpaySubmit, 200);
        if(!razorpay_submit_btn && el){
            razorpay_submit_btn = el;
            el.disabled = true;
            el.value = 'Please wait...';  
        }
        } else {
        if(!razorpay_instance){
            razorpay_instance = new Razorpay(razorpay_options);
            if(razorpay_submit_btn){
            razorpay_submit_btn.disabled = false;
            razorpay_submit_btn.value = "Pay Now";
            }
        }
        razorpay_instance.open();
        }
    }  

    </script>
    </body>
</html>
  


