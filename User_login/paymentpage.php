<?php 
    session_start();
    if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!==true){
        header("location:../User_login/USERLogin");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctocare Pay</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    </script>
    
    <link rel="icon" type="image/x-icon" href="20210911_192751.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
</head>



<style>
    
    body {
    background: beige;
}

.rounded {
    border-radius: 1rem;
}

.nav-pills .nav-link {
    color: #555;
}

.nav-pills .nav-link.active {
    color: white;
}

input[type="radio"] {
    margin-right: 5px
}

.bold {
    font-weight: bold
}
h1{
    color: blue;
}
h7{
    color:red;
}
nav a{
 float:right;
 }

</style>

<body>
 
  
<div class="container py-5">
    <!-- For demo purpose -->
    <div class="row mb-4">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-6">DOCTOCARE PAY</h1>
        </div>
    </div> <!-- End -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i>PAY WITH DOCTOCARE</a> </li>
                            </div> <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form role="form"  action="" method="POST" id="enquiry_form" name="enquiry_form">
                            <div class="form-group"> <label for="username">
                                        <h6>Card Holder</h6>
                                        </label> <input type="text" name="name" placeholder="John Roe" required  class="form-control "> </div>
                                <div class="form-group"> <label for="name">
                                <div class="form-group"> <label for="username">
                                        
                                        <h6>Email</h6>
                                        <?php echo "<center>"."<h7>".$_SESSION['id']."</h7>"."</center>";?><br>
                                         

                                        <h6>Bank</h6>
                                    </label>
                                    <div class="input-group">
                                    <select name="bank" id="bank" class="form-control ">
                                         <option value="Choice">Choice</option>
                                         <option value="SBI">SBI</option>
                                         <option value="PNB">PNB</option>
                                         <option value="CANARA">CANARA</option>
                                         <option value="KOTAK">KOTAK</option>
                                         <option value="UNION BANK">UNION BANK</option>
                                         <option value="BANK OF BARODA">BANK OF BARODA</option>
                                        <option value="INDIAN OVERSEAS BANK">INDIAN OVERSEAS BANK</option>
                                  </select>
                                    </div>
                                </div>

                                        <h6>Card number</h6>
                                    </label>
                                    <div class="input-group"> <input type="number"  id="mobile" name="cardnumber" placeholder="0000111122223333" class="form-control " required>
                                        <div class="input-group-append"> <span class="input-group-text text-muted"> <i style="color:red;" class="fab fa-cc-visa mx-1"></i> <i  style="color:red;" class="fab fa-cc-mastercard mx-1"></i> </span> </div>
                                    </div>
                                </div>
                                
                    
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> <label><span class="hidden-xs">
                                                    <h6>Expiration Date</h6>
                                                </span></label>
                                            <div class="input-group"> <input type="number" placeholder="01" name="" class="form-control"  required> <input type="number" placeholder="25" name="" class="form-control" required> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                            </label> <input type="password"  name="cvv" required class="form-control" placeholder="123"> </div>
                                    </div>
                                </div>
                                
                                
                                <div class="card-footer"> <button type="submit"  name="upload" class="subscribe btn btn-primary btn-block shadow-sm">RS.<?php echo $_SESSION["fess"];?> PAY</button>
                         </form>
                        </div>
                        <?php

include('conection.php');
if($conn){
    //echo "true";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    
    $name = $_POST["name"];
    
    $cardnumber = $_POST["cardnumber"];
    $bank=$_POST['bank'];
    $cardnumber=rand(100,999).base64_encode($cardnumber);
    $cvv = $_POST["cvv"];
    $cvv= md5($cvv);
    

  
    
    $from=$_SESSION['id'];
    $msg;

    $to='omgupta564@gmail.com'; // Receiver Email ID, Replace with your email ID 
    $subject='REGARDING OF DOCTOCARE PAYMENT TRANSECTION';
    $fee=$_SESSION["fess"];
    $msg="This is ".$name." "."of". " ".$from." happy to see you in our doctocare pay payment service. Your transection for appointment of transection id"." ". $cardnumber ." will done."."from Bank $bank"."If needed transection fail then money is refunded to your ACC within 1-2 working days"."\n\nTotal Amount deducted from your ACC is Rs. $fee "." ." ."\n\n\nyour faithfully \ndoctocarepay@enterprise.com".".";
    $headers="From: $from ";
   


$sql ="INSERT INTO `transctiondetail` ( `name`,`bank`, `cardnumber`, `cvv`) VALUES ( '$name','$bank','$cardnumber', '$cvv');";
$result = mysqli_query($conn, $sql); 
if($result){
    
   include("disappoint.php");
    mail($to, $subject, $msg, $headers);
    
}
}

?>
      
                    </div> 
                </div>
            </div>
        </div>
    </div>
    

</body>

</html>

