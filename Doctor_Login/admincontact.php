<?php include('conection.php');
    session_start();
    if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!==true){
        header("location:DoctorLogin.php");
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="20210911_192751.png">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Appointment communication Exchange</title>
  </head>
  <body>
  <center><h1>APPOINTMENT COMMUNICTION</h1></center>
  <?php
                 $connection = mysqli_connect("localhost","root","","doctor123");
                           
                 $a=$_SESSION['id'];
            
               
                 
                  //$selectquery = "SELECT * FROM doctoradd";
                  $selectquery = "SELECT * FROM doctoradd where `email`='$a' ";
                  $query = mysqli_query($connection,$selectquery);
              
                  $number = mysqli_num_rows($query);
                while($res = mysqli_fetch_array($query)){
                                $n=$res['photo'];
                                $n = substr($n, 0, strpos($n, "image/jpe"));
                                //echo $n;
                                $folder="image1/$n";
                  ?>

                  <br>
                  <center><img src="<?php echo $folder;?>"  class="profie" style="border-radius: 50%;width: 50px;height: 50px;"><?php }?></center>

                             
                 

  <div class="content">
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          

          <div class="row justify-content-center">
            <div class="col-md-6">
              
              <h3 class="heading mb-4"><i>Let's talk admin regarding appointment!</i></h3>
              <p>Fell free to talk regarding appointment quires, complain and inquery. </p>

              <p><img src="images/doc.png" alt="Image" class="img-fluid"></p>


            </div>
            <div class="col-md-6">
              
              <form class="mb-5" method="post" id="contactForm" name="contactForm">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="YOUR NAME">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                  <?php echo $_SESSION['id']?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="SUBJECT">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="WHAT QUERY ON YOUR MIND"></textarea>
                  </div>
                </div>  
                <div class="row">
                  <div class="col-12">
                    <button type="submit" class="submit"><i class="fa fa-send-o" style="font-size:20px;color:blue"></i>Send</button>
                  <span class="submitting"></span>
                  </div>
                </div>
              </form>

              <div id="form-message-warning mt-4"></div> 
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>